<?php
$allExperiences = require __DIR__ . '/data/experiences.php';

// Détermination de l'année sélectionnée
$selectedYear = isset($_GET['annee']) ? intval($_GET['annee']) : (isset($annee) ? intval($annee) : 2025);

if (!isset($allExperiences[$selectedYear])) {
    $selectedYear = 2025;
}

$exp = $allExperiences[$selectedYear];

// Méta-balises SEO dynamiques
$page_title = "Expériences " . $selectedYear . " - Réalisations";
$page_description = "Découvrez les projets et chantiers réalisés par ETTIAM en " . $selectedYear . " : " . htmlspecialchars($exp['title']);

include 'includes/header.php';
?>

<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/breadcrumbs-bg.jpg');">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
      <h2>Expériences <?php echo $selectedYear; ?></h2>
      <ol>
        <li><a href="index.php">Accueil</a></li>
        <li>Expériences <?php echo $selectedYear; ?></li>
      </ol>
    </div>
  </div><!-- End Breadcrumbs -->

  <!-- ======= Year Selector Bar ======= -->
  <section class="py-4 bg-light border-bottom">
    <div class="container text-center">
      <h6 class="text-muted text-uppercase mb-3 fw-bold" style="letter-spacing: 1px;">Naviguer par année de réalisation :</h6>
      <div class="d-flex flex-wrap justify-content-center gap-2">
        <?php foreach ($allExperiences as $year => $item): ?>
          <a href="experience.php?annee=<?php echo $year; ?>" 
             class="btn btn-sm <?php echo ($year === $selectedYear) ? 'btn-primary fw-bold shadow-sm' : 'btn-outline-secondary'; ?> px-3 py-2">
            Année <?php echo $year; ?>
          </a>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- ======= Service Details Section ======= -->
  <section id="service-details" class="service-details">
    <div class="container" data-aos="fade-up" data-aos-delay="100">
      <div class="row justify-content-center">
        <div class="col-lg-10 text-center">
          <span class="badge bg-primary px-3 py-2 text-uppercase mb-2">Chantier <?php echo $selectedYear; ?></span>
          <h2 class="h3 fw-bold text-dark mt-2"><?php echo htmlspecialchars($exp['title']); ?></h2>
          <p class="lead text-muted mt-3">
            <?php echo htmlspecialchars($exp['description']); ?>
          </p>
        </div>
      </div>
    </div>
  </section><!-- End Service Details Section -->

  <!-- ======= Sections & Galleries ======= -->
  <?php foreach ($exp['sections'] as $sIndex => $section): ?>
    <?php if (!empty($section['title'])): ?>
      <div class="container mt-4 mb-2" data-aos="fade-up">
        <h3 class="h4 text-primary border-start border-4 border-primary ps-3 mb-3">
          <?php echo htmlspecialchars($section['title']); ?>
        </h3>
      </div>
    <?php endif; ?>

    <section id="projects-<?php echo $sIndex; ?>" class="projects pt-0 pb-5">
      <div class="container" data-aos="fade-up">
        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order">
          <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">
            <?php foreach ($section['items'] as $item): ?>
              <div class="col-lg-4 col-md-6 portfolio-item <?php echo htmlspecialchars($item['category']); ?>">
                <div class="portfolio-content h-100 shadow-sm rounded overflow-hidden">
                  <img src="<?php echo htmlspecialchars($item['image']); ?>" 
                       class="img-fluid" 
                       alt="<?php echo htmlspecialchars($item['title']); ?>" 
                       loading="lazy" 
                       decoding="async">
                  <div class="portfolio-info">
                    <h4><?php echo $selectedYear; ?></h4>
                    <p><?php echo htmlspecialchars($item['title']); ?></p>
                    <a href="<?php echo htmlspecialchars($item['image']); ?>" 
                       title="<?php echo htmlspecialchars($item['title']); ?>" 
                       data-gallery="portfolio-gallery-<?php echo $selectedYear . '-' . $sIndex; ?>" 
                       class="glightbox preview-link">
                      <i class="bi bi-zoom-in"></i>
                    </a>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </section>
  <?php endforeach; ?>

  <!-- ======= Call to Action Section ======= -->
  <?php include 'includes/cta-section.php'; ?>

</main><!-- End #main -->

<?php include 'includes/footer.php'; ?>
