<?php
$currentPage = basename($_SERVER['PHP_SELF']);

// Détection dynamique des sections pour les menus déroulants
$isExperiences = (strpos($currentPage, 'service-details') === 0 || $currentPage === 'experience.php');
$isPrestations = in_array($currentPage, ['geniecivil.php', 'voirie.php', 'hydraulique.php', 'exploitation.php']);
$isProjects = in_array($currentPage, ['projects.php', 'project-details.php']);
$isBlog = in_array($currentPage, ['blog.php', 'blog-details.php']);

// Méta-balises par défaut et personnalisées
$siteName = "ETTIAM";
$defaultTitle = "ETTIAM - Entreprise BTP, Génie Civil, Hydraulique & VRD au Togo";
$defaultDesc = "ETTIAM est une entreprise togolaise de BTP et génie civil à Lomé : travaux d'infrastructure, assainissement, voirie, architecture et location de matériel de chantier.";
$defaultKeywords = "ETTIAM, BTP Togo, entreprise construction Lomé, génie civil Togo, hydraulique, assainissement, VRD, voirie, échafaudage, location matériel BTP";

$pageTitle = isset($page_title) ? htmlspecialchars($page_title) . " | " . $siteName : $defaultTitle;
$pageDesc = isset($page_description) ? htmlspecialchars($page_description) : $defaultDesc;
$pageKeywords = isset($page_keywords) ? htmlspecialchars($page_keywords) : $defaultKeywords;
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?php echo $pageTitle; ?></title>
  <meta content="<?php echo $pageDesc; ?>" name="description">
  <meta content="<?php echo $pageKeywords; ?>" name="keywords">

  <!-- Open Graph & Réseaux Sociaux -->
  <meta property="og:type" content="website">
  <meta property="og:title" content="<?php echo $pageTitle; ?>">
  <meta property="og:description" content="<?php echo $pageDesc; ?>">
  <meta property="og:image" content="assets/img/hero-carousel/hero-carousel-6.jpg">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?php echo $pageTitle; ?>">
  <meta name="twitter:description" content="<?php echo $pageDesc; ?>">

  <!-- Données Structurées Schema.org (SEO Local) -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "GeneralContractor",
    "name": "ETTIAM",
    "legalName": "Entreprise Transcontinentale des Travaux d'Infrastructure, d'Aménagement et de Maintenance",
    "url": "https://ettiam.com",
    "logo": "https://ettiam.com/assets/img/logo.png",
    "telephone": "+22897151830",
    "email": "contact@ettiam.com",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "Atilamonou - Apédokoè",
      "addressLocality": "Lomé",
      "addressCountry": "TG"
    },
    "sameAs": [
      "https://www.facebook.com/ettiam.construction/",
      "https://www.linkedin.com/company/ettiam/"
    ]
  }
  </script>

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
  <!-- Enhanced High-Impact Header CSS -->
  <link href="assets/css/header-impact.css" rel="stylesheet">
</head>

<body>
  <div id="preloader"></div>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="topbar d-flex align-items-center">
    <div class="container-fluid container-xl d-flex justify-content-between align-items-center">
      <div class="contact-info d-flex align-items-center">
        <span class="d-none d-lg-inline-block me-3"><i class="bi bi-geo-alt-fill"></i>Atilamonou - Apédokoè, Lomé</span>
        <a href="mailto:contact@ettiam.com" class="me-3"><i class="bi bi-envelope-fill"></i>contact@ettiam.com</a>
        <a href="tel:+22897151830"><i class="bi bi-telephone-fill"></i>(+228) 97 15 18 30</a>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <span class="topbar-badge me-3"><i class="bi bi-patch-check-fill me-1"></i>BTP &amp; Ingénierie Certifiée</span>
        <a href="https://www.facebook.com/ettiam.construction/" target="_blank" rel="noopener noreferrer" title="Facebook"><i class="bi bi-facebook"></i></a>
        <a href="https://www.linkedin.com/company/ettiam/" target="_blank" rel="noopener noreferrer" title="LinkedIn"><i class="bi bi-linkedin"></i></a>
      </div>
    </div>
  </div><!-- End Top Bar -->

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="Logo ETTIAM">
        <div class="brand-text ms-2">
          <span class="brand-name">ETTIAM<span class="brand-dot">.</span></span>
          <span class="brand-tagline">BTP &amp; GÉNIE CIVIL</span>
        </div>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.php" class="<?php echo ($currentPage == 'index.php' || $currentPage == '') ? 'active' : ''; ?>">Accueil</a></li>
          <li><a href="about.php" class="<?php echo ($currentPage == 'about.php') ? 'active' : ''; ?>">À propos</a></li>
          <li class="dropdown"><a href="#" class="<?php echo $isExperiences ? 'active' : ''; ?>"><span>Expériences</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="experience.php?annee=2025" class="<?php echo ($currentPage == 'service-details2025.php' || ($currentPage == 'experience.php' && ($selectedYear ?? 0) == 2025)) ? 'active' : ''; ?>">Expériences 2025</a></li>
              <li><a href="experience.php?annee=2024" class="<?php echo ($currentPage == 'service-details2024.php' || ($currentPage == 'experience.php' && ($selectedYear ?? 0) == 2024)) ? 'active' : ''; ?>">Expériences 2024</a></li>
              <li><a href="experience.php?annee=2023" class="<?php echo ($currentPage == 'service-details2023.php' || ($currentPage == 'experience.php' && ($selectedYear ?? 0) == 2023)) ? 'active' : ''; ?>">Expériences 2023</a></li>
              <li><a href="experience.php?annee=2022" class="<?php echo ($currentPage == 'service-details2022.php' || ($currentPage == 'experience.php' && ($selectedYear ?? 0) == 2022)) ? 'active' : ''; ?>">Expériences 2022</a></li>
              <li><a href="experience.php?annee=2021" class="<?php echo ($currentPage == 'service-details2021.php' || ($currentPage == 'experience.php' && ($selectedYear ?? 0) == 2021)) ? 'active' : ''; ?>">Expériences 2021</a></li>
              <li><a href="experience.php?annee=2020" class="<?php echo ($currentPage == 'service-details2020.php' || ($currentPage == 'experience.php' && ($selectedYear ?? 0) == 2020)) ? 'active' : ''; ?>">Expériences 2020</a></li>
              <li><a href="experience.php?annee=2019" class="<?php echo ($currentPage == 'service-details2019.php' || ($currentPage == 'experience.php' && ($selectedYear ?? 0) == 2019)) ? 'active' : ''; ?>">Expériences 2019</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#" class="<?php echo $isPrestations ? 'active' : ''; ?>"><span>Prestations</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="geniecivil.php" class="<?php echo ($currentPage == 'geniecivil.php') ? 'active' : ''; ?>"><i class="bi bi-building me-2"></i>Construction génie civil</a></li>
              <li><a href="voirie.php" class="<?php echo ($currentPage == 'voirie.php') ? 'active' : ''; ?>"><i class="bi bi-signpost-split me-2"></i>Voirie et réseaux divers</a></li>
              <li><a href="hydraulique.php" class="<?php echo ($currentPage == 'hydraulique.php') ? 'active' : ''; ?>"><i class="bi bi-droplet-half me-2"></i>Hydraulique &amp; Assainissement</a></li>
              <li><a href="exploitation.php" class="<?php echo ($currentPage == 'exploitation.php') ? 'active' : ''; ?>"><i class="bi bi-gear-wide-connected me-2"></i>Section Exploitation</a></li>
            </ul>
          </li>
          <li><a href="projects.php" class="<?php echo $isProjects ? 'active' : ''; ?>">Projets</a></li>
          <li class="position-relative">
            <a href="sale-or-rent-btp-auto.php" class="<?php echo ($currentPage == 'sale-or-rent-btp-auto.php') ? 'active' : ''; ?>">Location</a>
            <span class="new-badge">New</span>
          </li>
          <li><a href="contact.php" class="<?php echo ($currentPage == 'contact.php') ? 'active' : ''; ?>">Contact</a></li>
        </ul>
      </nav><!-- .navbar -->

      <div class="header-actions d-flex align-items-center">
        <a href="contact.php" class="btn-get-quote d-none d-lg-inline-flex align-items-center">
          <span>Devis Gratuit</span>
          <i class="bi bi-arrow-right-short ms-1"></i>
        </a>
        <i class="mobile-nav-toggle mobile-nav-show bi bi-list ms-3"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x ms-3"></i>
      </div>

    </div>
  </header><!-- End Header -->
