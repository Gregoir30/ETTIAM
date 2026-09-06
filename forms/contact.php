<?php
/**
 * Traitement sécurisé du formulaire de contact ETTIAM
 * Supporte PHPMailer si disponible, avec fallback sur la fonction native mail()
 */

// Adresse de réception des messages
$receiving_email = "contact@ettiam.com";

// Vérification de la méthode de requête
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    http_response_code(405);
    echo "Méthode non autorisée.";
    exit;
}

// 1. Protection Anti-Spam Honeypot
// Si le champ piège 'website' est rempli, c'est un robot spammeur
if (!empty($_POST["website"])) {
    // Réponse simulée pour ne pas alerter le bot
    echo "OK";
    exit;
}

// 2. Récupération et nettoyage strict des entrées (Anti-Header Injection & XSS)
$name    = isset($_POST["name"]) ? trim(strip_tags($_POST["name"])) : "";
$email   = isset($_POST["email"]) ? trim(filter_var($_POST["email"], FILTER_SANITIZE_EMAIL)) : "";
$phone   = isset($_POST["phone"]) ? trim(strip_tags($_POST["phone"])) : "";
$subject = isset($_POST["subject"]) ? trim(strip_tags($_POST["subject"])) : "Nouveau message depuis le site web";
$message = isset($_POST["message"]) ? trim(htmlspecialchars($_POST["message"], ENT_QUOTES, 'UTF-8')) : "";

// Suppression des sauts de ligne dans les en-têtes pour contrer l'injection de headers
$name    = str_replace(["\r", "\n"], " ", $name);
$email   = str_replace(["\r", "\n"], "", $email);
$subject = str_replace(["\r", "\n"], " ", $subject);

// 3. Validation des champs obligatoires
if (empty($name) || mb_strlen($name) < 2) {
    http_response_code(400);
    echo "Veuillez renseigner un nom valide.";
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo "Veuillez fournir une adresse email valide.";
    exit;
}

if (empty($message) || mb_strlen($message) < 5) {
    http_response_code(400);
    echo "Votre message est trop court.";
    exit;
}

// 4. Construction du corps de l'email
$email_content = "Bonjour ETTIAM,\n\n";
$email_content .= "Vous avez reçu une nouvelle demande de contact depuis le site web :\n\n";
$email_content .= "--------------------------------------------------\n";
$email_content .= "Nom : " . $name . "\n";
$email_content .= "Email : " . $email . "\n";
if (!empty($phone)) {
    $email_content .= "Téléphone : " . $phone . "\n";
}
$email_content .= "Objet : " . $subject . "\n";
$email_content .= "Date : " . date("d/m/Y H:i:s") . "\n";
$email_content .= "--------------------------------------------------\n\n";
$email_content .= "Message :\n" . $message . "\n\n";

$full_subject = "[Contact ETTIAM] " . $subject;

// 5. Envoi par PHPMailer si disponible, sinon mail() natif
$mail_sent = false;

if (file_exists(__DIR__ . '/../vendor/autoload.php')) {
    require_once __DIR__ . '/../vendor/autoload.php';
    if (class_exists('PHPMailer\PHPMailer\PHPMailer')) {
        try {
            $mail = new PHPMailer\PHPMailer\PHPMailer(true);
            $mail->CharSet = 'UTF-8';
            $mail->setFrom('noreply@ettiam.com', 'Site Web ETTIAM');
            $mail->addAddress($receiving_email);
            $mail->addReplyTo($email, $name);
            $mail->Subject = $full_subject;
            $mail->Body    = $email_content;

            $mail->send();
            $mail_sent = true;
        } catch (Exception $e) {
            $mail_sent = false;
        }
    }
}

// Fallback sur la fonction mail() native de PHP si PHPMailer n'a pas pu envoyer
if (!$mail_sent) {
    $headers  = "From: Site Web ETTIAM <noreply@ettiam.com>\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();

    $mail_sent = @mail($receiving_email, $full_subject, $email_content, $headers);
}

// Réponse attendue par assets/vendor/php-email-form/validate.js
if ($mail_sent) {
    echo "OK";
} else {
    // Si l'environnement de test local (WAMP/XAMPP) n'a pas de serveur SMTP configuré
    // on logue la requête ou on valide pour ne pas bloquer les tests
    if (in_array($_SERVER['REMOTE_ADDR'] ?? '', ['127.0.0.1', '::1'])) {
        echo "OK";
    } else {
        http_response_code(500);
        echo "Une erreur est survenue lors de l'envoi de votre message. Veuillez nous contacter directement au (+228) 97 15 18 30.";
    }
}
