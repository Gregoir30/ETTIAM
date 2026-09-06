<?php
$page_title = "Contactez-nous & Devis";
$page_description = "Contactez ETTIAM à Lomé : siège social à Atilamonou - Apédokoè, téléphone (+228) 97 15 18 30, email ou formulaire en ligne.";
include 'includes/header.php';
?>

<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/breadcrumbs-bg.jpg');">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

      <h2>Contacts</h2>
      <ol>
        <li><a href="index.php">Accueil</a></li>
        <li>Contacts</li>
      </ol>

    </div>
  </div><!-- End Breadcrumbs -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row gy-4">
        <div class="col-lg-6">
          <div class="info-item  d-flex flex-column justify-content-center align-items-center">
            <i class="bi bi-map"></i>
            <h3>Adresse</h3>
            <p>Atilamonou - Apédokoè, Lomé - TOGO</p>
          </div>
        </div><!-- End Info Item -->

        <div class="col-lg-3 col-md-6">
          <div class="info-item d-flex flex-column justify-content-center align-items-center">
            <i class="bi bi-envelope"></i>
            <h3>Email</h3>
            <p>contact@ettiam.com</p>
          </div>
        </div><!-- End Info Item -->

        <div class="col-lg-3 col-md-6">
          <div class="info-item  d-flex flex-column justify-content-center align-items-center">
            <i class="bi bi-telephone"></i>
            <h3>Téléphone</h3>
            <p>(+228) 97 15 18 30</p>
          </div>
        </div><!-- End Info Item -->

      </div>

      <div class="row gy-4 mt-1">
        <div class="col-lg-6">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.3452637132536!2d1.1280985740615426!3d6.218119226638684!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x10215bfd9c80c681%3A0x10aa5f7e2d0eb2ac!2sEntreprise%20ETTIAM!5e0!3m2!1sfr!2stg!4v1693811365455!5m2!1sfr!2stg" width="100%" height="450" style="border:0; border-radius: 8px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <div class="col-lg-6">
          <form action="forms/contact.php" method="post" role="form" class="php-email-form card p-4 shadow-sm">
            <!-- Champ anti-spam Honeypot (invisible aux humains, piege pour les robots) -->
            <div style="display:none !important;" aria-hidden="true">
              <input type="text" name="website" tabindex="-1" autocomplete="off">
            </div>

            <h3 class="h4 mb-3 text-primary">Envoyez-nous un message</h3>
            <div class="row gy-3">
              <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Votre nom" required>
              </div>
              <div class="col-md-6 form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Votre email" required>
              </div>
              <div class="col-12 form-group">
                <input type="text" class="form-control" name="phone" id="phone" placeholder="Téléphone (ex: +228 90 00 00 00)">
              </div>
              <div class="col-12 form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Objet de votre demande" value="<?= isset($_GET['subject']) ? htmlspecialchars($_GET['subject']) : '' ?>" required>
              </div>
              <div class="col-12 form-group">
                <textarea class="form-control" name="message" rows="5" placeholder="Votre message ou description de votre projet" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Chargement...</div>
                <div class="error-message"></div>
                <div class="sent-message">Votre message a été envoyé avec succès. Merci !</div>
              </div>
              <div class="text-center">
                <button type="submit" class="btn px-4 py-2 btn-contact-submit" 
                        style="color: black; background-color: var(--ettiam-primary, #feb900); border: 1px solid var(--ettiam-primary, #feb900); border-radius: 4px; font-weight: 600; transition: all 0.3s ease;" 
                        onmouseover="this.style.color='white'; this.style.backgroundColor='#0b2545'; this.style.borderColor='#0b2545';" 
                        onmouseout="this.style.color='black'; this.style.backgroundColor='var(--ettiam-primary, #feb900)'; this.style.borderColor='var(--ettiam-primary, #feb900)';">
                  Envoyer le message
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>

    </div>
  </section><!-- End Contact Section -->

</main><!-- End #main -->

<?php include 'includes/footer.php'; ?>
