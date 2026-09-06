<?php
/**
 * Traitement sécurisé des demandes de devis ETTIAM
 */

$receiving_email = "contact@ettiam.com";

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    http_response_code(405);
    echo "Méthode non autorisée.";
    exit;
}

// 1. Protection Anti-Spam Honeypot
if (!empty($_POST["website"])) {
    echo "OK";
    exit;
}

// 2. Nettoyage et validation des données
$name    = isset($_POST["name"]) ? trim(strip_tags($_POST["name"])) : "";
$email   = isset($_POST["email"]) ? trim(filter_var($_POST["email"], FILTER_SANITIZE_EMAIL)) : "";
$phone   = isset($_POST["phone"]) ? trim(strip_tags($_POST["phone"])) : "";
$subject = isset($_POST["subject"]) ? trim(strip_tags($_POST["subject"])) : "Demande de devis";
$message = isset($_POST["message"]) ? trim(htmlspecialchars($_POST["message"], ENT_QUOTES, 'UTF-8')) : "";

$name    = str_replace(["\r", "\n"], " ", $name);
$email   = str_replace(["\r", "\n"], "", $email);
$subject = str_replace(["\r", "\n"], " ", $subject);

if (empty($name) || mb_strlen($name) < 2) {
    http_response_code(400);
    echo "Veuillez renseigner votre nom.";
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo "Veuillez renseigner une adresse email valide.";
    exit;
}

// 3. Construction du message
$email_content = "Bonjour ETTIAM,\n\n";
$email_content .= "Une nouvelle demande de devis a été soumise sur votre site web :\n\n";
$email_content .= "--------------------------------------------------\n";
$email_content .= "Nom : " . $name . "\n";
$email_content .= "Email : " . $email . "\n";
$email_content .= "Téléphone : " . $phone . "\n";
$email_content .= "Objet : " . $subject . "\n";
$email_content .= "Date : " . date("d/m/Y H:i:s") . "\n";
$email_content .= "--------------------------------------------------\n\n";
$email_content .= "Détails de la demande :\n" . $message . "\n\n";

$full_subject = "[Devis ETTIAM] " . $subject;

// 4. Envoi via PHPMailer ou mail()
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

if (!$mail_sent) {
    $headers  = "From: Site Web ETTIAM <noreply@ettiam.com>\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();

    $mail_sent = @mail($receiving_email, $full_subject, $email_content, $headers);
}

if ($mail_sent || in_array($_SERVER['REMOTE_ADDR'] ?? '', ['127.0.0.1', '::1'])) {
    echo "OK";
} else {
    http_response_code(500);
    echo "Une erreur est survenue lors de l'envoi de votre demande de devis.";
}
