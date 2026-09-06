<?php
$page_title = "Nos Réalisations & Projets BTP";
$page_description = "Découvrez le portfolio des réalisations d'ETTIAM : génie civil, ouvrages d'art, infrastructures industrielles, adduction d'eau et résidences de standing au Togo.";
include 'includes/header.php';
?>

<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/breadcrumbs-bg.jpg');">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
      <span class="badge bg-warning text-dark px-3 py-2 text-uppercase fw-bold mb-2 shadow-sm" style="letter-spacing: 1.5px;">
        Excellence &amp; Savoir-Faire
      </span>
      <h1 class="text-white fw-bold mb-2">Nos Projets &amp; Réalisations</h1>
      <ol class="text-white">
        <li><a href="index.php" class="text-white">Accueil</a></li>
        <li class="text-white">Projets</li>
      </ol>
    </div>
  </div><!-- End Breadcrumbs -->

  <!-- ======= Section Chiffres Clés & Réassurance (Trust Bar) ======= -->
  <section class="py-4 bg-white border-bottom shadow-sm">
    <div class="container" data-aos="fade-up">
      <div class="row g-3 text-center">
        <div class="col-6 col-md-3">
          <div class="p-3 rounded-3 bg-light h-100">
            <div class="display-6 fw-bold text-primary mb-1">
              <span data-purecounter-start="0" data-purecounter-end="50" data-purecounter-duration="1" class="purecounter">50</span>+
            </div>
            <div class="small fw-semibold text-secondary text-uppercase">Chantiers d'Envergure</div>
          </div>
        </div>
        <div class="col-6 col-md-3">
          <div class="p-3 rounded-3 bg-light h-100">
            <div class="display-6 fw-bold text-primary mb-1">
              <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter">15</span>+
            </div>
            <div class="small fw-semibold text-secondary text-uppercase">Ans d'Expertise Cumulée</div>
          </div>
        </div>
        <div class="col-6 col-md-3">
          <div class="p-3 rounded-3 bg-light h-100">
            <div class="display-6 fw-bold text-success mb-1">
              <span data-purecounter-start="0" data-purecounter-end="100" data-purecounter-duration="1" class="purecounter">100</span>%
            </div>
            <div class="small fw-semibold text-secondary text-uppercase">Conformité aux Normes</div>
          </div>
        </div>
        <div class="col-6 col-md-3">
          <div class="p-3 rounded-3 bg-light h-100">
            <div class="display-6 fw-bold text-warning mb-1">
              48h
            </div>
            <div class="small fw-semibold text-secondary text-uppercase">Chiffrage Préliminaire</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ======= Navigation Chronologique (Accès Rapide par Année) ======= -->
  <section class="py-3 bg-light border-bottom">
    <div class="container" data-aos="fade-up">
      <div class="d-flex flex-wrap align-items-center justify-content-between gap-2">
        <div class="d-flex align-items-center text-muted small fw-bold text-uppercase">
          <i class="bi bi-calendar3 me-2 text-primary fs-5"></i> Dossiers par année :
        </div>
        <div class="d-flex flex-wrap gap-1">
          <a href="service-details2025.php" class="btn btn-sm btn-outline-primary rounded-pill px-3 py-1 fw-bold">2025</a>
          <a href="service-details2024.php" class="btn btn-sm btn-outline-primary rounded-pill px-3 py-1 fw-bold">2024</a>
          <a href="service-details2023.php" class="btn btn-sm btn-outline-primary rounded-pill px-3 py-1 fw-bold">2023</a>
          <a href="service-details2022.php" class="btn btn-sm btn-outline-primary rounded-pill px-3 py-1 fw-bold">2022</a>
          <a href="service-details2021.php" class="btn btn-sm btn-outline-primary rounded-pill px-3 py-1 fw-bold">2021</a>
          <a href="service-details2020.php" class="btn btn-sm btn-outline-primary rounded-pill px-3 py-1 fw-bold">2020</a>
          <a href="service-details2019.php" class="btn btn-sm btn-outline-primary rounded-pill px-3 py-1 fw-bold">2019</a>
          <a href="experience.php" class="btn btn-sm btn-primary rounded-pill px-3 py-1 fw-bold ms-md-2">
            <i class="bi bi-journal-text me-1"></i> Voir tout l'historique
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- ======= Our Projects Section ======= -->
  <section id="projects" class="projects py-5">
    <div class="container" data-aos="fade-up">

      <div class="text-center max-width-700 mx-auto mb-5">
        <span class="badge bg-primary-subtle text-primary text-uppercase px-3 py-2 fw-bold mb-2">Portfolio Technique</span>
        <h2 class="display-6 fw-bold text-dark">Nos Chantiers Phares en Images</h2>
        <p class="text-muted">
          Du dimensionnement structural à la livraison clé en main, explorez un aperçu de nos projets menés selon les standards internationaux de sécurité et d'ingénierie.
        </p>
      </div>

      <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order">

        <!-- Filtres par catégorie -->
        <ul class="portfolio-flters d-flex flex-wrap justify-content-center gap-2 mb-5" data-aos="fade-up" data-aos-delay="100">
          <li data-filter="*" class="filter-active">Tous les projets</li>
          <li data-filter=".filter-civil">Génie Civil &amp; Industrie</li>
          <li data-filter=".filter-building">Bâtiment &amp; Résidentiel</li>
          <li data-filter=".filter-vrd">Hydraulique &amp; VRD</li>
          <li data-filter=".filter-art">Ouvrages d'Art</li>
        </ul><!-- End Projects Filters -->

        <div class="row g-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <!-- PROJET 1 : Centrale KEKELI -->
          <div class="col-lg-4 col-md-6 portfolio-item filter-civil">
            <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden project-card">
              <div class="position-relative overflow-hidden" style="height: 250px;">
                <img src="assets/img/image52.jpg" class="w-100 h-100 object-fit-cover" alt="Centrale KEKELI" loading="lazy" decoding="async">
                <span class="badge bg-dark bg-opacity-75 text-white position-absolute top-0 start-0 m-3 px-3 py-2 rounded-pill small">
                  <i class="bi bi-geo-alt-fill text-warning me-1"></i> Lomé Port
                </span>
                <span class="badge bg-warning text-dark position-absolute top-0 end-0 m-3 px-3 py-2 rounded-pill small fw-bold">
                  Industrie &amp; Énergie
                </span>
                <a href="assets/img/image52.jpg" title="Centrale KEKELI : Construction d'un grand hangar métallique pour maintenance lourde" data-gallery="portfolio-gallery" class="glightbox preview-link-btn position-absolute bottom-0 end-0 m-3 btn btn-light btn-sm rounded-circle shadow">
                  <i class="bi bi-zoom-in"></i>
                </a>
              </div>
              <div class="card-body p-4 d-flex flex-column">
                <h4 class="card-title fw-bold text-dark mb-2">Centrale KEKELI</h4>
                <p class="text-muted small mb-3">
                  Construction d'un grand hangar métallique lourd destiné aux opérations techniques de maintenance et de stockage d'équipements.
                </p>
                <div class="mb-3">
                  <span class="badge bg-light text-secondary border me-1 mb-1 small">Charpente métallique</span>
                  <span class="badge bg-light text-secondary border me-1 mb-1 small">Fondations spéciales</span>
                  <span class="badge bg-light text-secondary border mb-1 small">Haute sécurité</span>
                </div>
                <div class="mt-auto pt-3 border-top d-flex gap-2">
                  <a href="contact.php?subject=Devis%20Projet%20Industriel%20Centrale%20Kekeli" class="btn btn-sm btn-primary flex-grow-1 fw-bold rounded-pill">
                    Chiffrer un projet similaire
                  </a>
                  <a href="https://wa.me/22897151830?text=Bonjour%20ETTIAM,%20je%20souhaite%20un%20chiffrage%20pour%20un%20projet%20industriel%20comme%20la%20Centrale%20Kékéli" 
                     class="btn btn-sm btn-success rounded-circle d-flex align-items-center justify-content-center" 
                     style="width: 34px; height: 34px;" 
                     target="_blank" 
                     rel="noopener noreferrer" 
                     title="WhatsApp">
                    <i class="bi bi-whatsapp"></i>
                  </a>
                </div>
              </div>
            </div>
          </div><!-- End Projects Item -->

          <!-- PROJET 2 : Site Minier de Nayega -->
          <div class="col-lg-4 col-md-6 portfolio-item filter-civil filter-vrd">
            <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden project-card">
              <div class="position-relative overflow-hidden" style="height: 250px;">
                <img src="assets/img/image035.jpg" class="w-100 h-100 object-fit-cover" alt="Site Minier de Nayega" loading="lazy" decoding="async">
                <span class="badge bg-dark bg-opacity-75 text-white position-absolute top-0 start-0 m-3 px-3 py-2 rounded-pill small">
                  <i class="bi bi-geo-alt-fill text-warning me-1"></i> Nayega (Savanes)
                </span>
                <span class="badge bg-info text-white position-absolute top-0 end-0 m-3 px-3 py-2 rounded-pill small fw-bold">
                  Site Minier • 2024
                </span>
                <a href="assets/img/image035.jpg" title="Site Minier de Nayega : Bassin de rétention d'eau 600m3 et infrastructures de remise en service" data-gallery="portfolio-gallery" class="glightbox preview-link-btn position-absolute bottom-0 end-0 m-3 btn btn-light btn-sm rounded-circle shadow">
                  <i class="bi bi-zoom-in"></i>
                </a>
              </div>
              <div class="card-body p-4 d-flex flex-column">
                <h4 class="card-title fw-bold text-dark mb-2">Site Minier de Nayega</h4>
                <p class="text-muted small mb-3">
                  Construction des infrastructures de remise en service : bassin de rétention d'eau de 600 m³, 4 points d'eau, blocs administratifs et magasins techniques.
                </p>
                <div class="mb-3">
                  <span class="badge bg-light text-secondary border me-1 mb-1 small">Bassin 600 m³</span>
                  <span class="badge bg-light text-secondary border me-1 mb-1 small">Bloc modulaire</span>
                  <span class="badge bg-light text-secondary border mb-1 small">Hydraulique</span>
                </div>
                <div class="mt-auto pt-3 border-top d-flex gap-2">
                  <a href="contact.php?subject=Devis%20Infrastructures%20Site%20Minier%20Nayega" class="btn btn-sm btn-primary flex-grow-1 fw-bold rounded-pill">
                    Chiffrer un projet similaire
                  </a>
                  <a href="https://wa.me/22897151830?text=Bonjour%20ETTIAM,%20je%20souhaite%20un%20devis%20pour%20des%20ouvrages%20miniers%20ou%20bassins%20de%20rétention%20comme%20Nayega" 
                     class="btn btn-sm btn-success rounded-circle d-flex align-items-center justify-content-center" 
                     style="width: 34px; height: 34px;" 
                     target="_blank" 
                     rel="noopener noreferrer" 
                     title="WhatsApp">
                    <i class="bi bi-whatsapp"></i>
                  </a>
                </div>
              </div>
            </div>
          </div><!-- End Projects Item -->

          <!-- PROJET 3 : Plateforme PIA - Traitement des Eaux (STP) -->
          <div class="col-lg-4 col-md-6 portfolio-item filter-vrd filter-civil">
            <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden project-card">
              <div class="position-relative overflow-hidden" style="height: 250px;">
                <img src="assets/img/image34.jpg" class="w-100 h-100 object-fit-cover" alt="PIA STP Centrale Traitement Eaux" loading="lazy" decoding="async">
                <span class="badge bg-dark bg-opacity-75 text-white position-absolute top-0 start-0 m-3 px-3 py-2 rounded-pill small">
                  <i class="bi bi-geo-alt-fill text-warning me-1"></i> PIA Adétikopé
                </span>
                <span class="badge bg-success text-white position-absolute top-0 end-0 m-3 px-3 py-2 rounded-pill small fw-bold">
                  Environnement • 2023
                </span>
                <a href="assets/img/image34.jpg" title="Plateforme PIA : Centrale de Traitement des Eaux Usées (STP Civil Works)" data-gallery="portfolio-gallery" class="glightbox preview-link-btn position-absolute bottom-0 end-0 m-3 btn btn-light btn-sm rounded-circle shadow">
                  <i class="bi bi-zoom-in"></i>
                </a>
              </div>
              <div class="card-body p-4 d-flex flex-column">
                <h4 class="card-title fw-bold text-dark mb-2">Centrale d'Épuration PIA (STP)</h4>
                <p class="text-muted small mb-3">
                  Génie civil d'une station d'épuration industrielle : deux tanks antérieurs, plateforme de 300 m² pour silos, salle des machines et bâtiments d'exploitation.
                </p>
                <div class="mb-3">
                  <span class="badge bg-light text-secondary border me-1 mb-1 small">Station d'épuration</span>
                  <span class="badge bg-light text-secondary border me-1 mb-1 small">Cuvelage étanche</span>
                  <span class="badge bg-light text-secondary border mb-1 small">Génie civil lourd</span>
                </div>
                <div class="mt-auto pt-3 border-top d-flex gap-2">
                  <a href="contact.php?subject=Devis%20Centrale%20Traitement%20Eaux%20PIA" class="btn btn-sm btn-primary flex-grow-1 fw-bold rounded-pill">
                    Chiffrer un projet similaire
                  </a>
                  <a href="https://wa.me/22897151830?text=Bonjour%20ETTIAM,%20je%20m'intéresse%20à%20vos%20projets%20d'assainissement%20et%20stations%20d'épuration%20comme%20PIA%20STP" 
                     class="btn btn-sm btn-success rounded-circle d-flex align-items-center justify-content-center" 
                     style="width: 34px; height: 34px;" 
                     target="_blank" 
                     rel="noopener noreferrer" 
                     title="WhatsApp">
                    <i class="bi bi-whatsapp"></i>
                  </a>
                </div>
              </div>
            </div>
          </div><!-- End Projects Item -->

          <!-- PROJET 4 : Pont Bipoutre Mixte -->
          <div class="col-lg-4 col-md-6 portfolio-item filter-art filter-civil">
            <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden project-card">
              <div class="position-relative overflow-hidden" style="height: 250px;">
                <img src="assets/img/image24.jpg" class="w-100 h-100 object-fit-cover" alt="Pont Bipoutre Mixte" loading="lazy" decoding="async">
                <span class="badge bg-dark bg-opacity-75 text-white position-absolute top-0 start-0 m-3 px-3 py-2 rounded-pill small">
                  <i class="bi bi-geo-alt-fill text-warning me-1"></i> Réseau Routier
                </span>
                <span class="badge bg-danger text-white position-absolute top-0 end-0 m-3 px-3 py-2 rounded-pill small fw-bold">
                  Ouvrage d'Art
                </span>
                <a href="assets/img/image24.jpg" title="Pont Bipoutre Mixte : Calculs géométriques et résistance structurelle aux normes Eurocodes" data-gallery="portfolio-gallery" class="glightbox preview-link-btn position-absolute bottom-0 end-0 m-3 btn btn-light btn-sm rounded-circle shadow">
                  <i class="bi bi-zoom-in"></i>
                </a>
              </div>
              <div class="card-body p-4 d-flex flex-column">
                <h4 class="card-title fw-bold text-dark mb-2">Pont Bipoutre Mixte</h4>
                <p class="text-muted small mb-3">
                  Conception structurale avancée, modélisation géométrique et calculs de charge pour un ouvrage de franchissement alliant acier et tablier béton armé.
                </p>
                <div class="mb-3">
                  <span class="badge bg-light text-secondary border me-1 mb-1 small">Structure mixte</span>
                  <span class="badge bg-light text-secondary border me-1 mb-1 small">Normes Eurocodes</span>
                  <span class="badge bg-light text-secondary border mb-1 small">Résistance des ponts</span>
                </div>
                <div class="mt-auto pt-3 border-top d-flex gap-2">
                  <a href="contact.php?subject=Devis%20Etude%20Pont%20Ouvrage%20Art" class="btn btn-sm btn-primary flex-grow-1 fw-bold rounded-pill">
                    Chiffrer un projet similaire
                  </a>
                  <a href="https://wa.me/22897151830?text=Bonjour%20ETTIAM,%20je%20souhaite%20une%20étude%20technique%20pour%20un%20ouvrage%20d'art%20ou%20pont" 
                     class="btn btn-sm btn-success rounded-circle d-flex align-items-center justify-content-center" 
                     style="width: 34px; height: 34px;" 
                     target="_blank" 
                     rel="noopener noreferrer" 
                     title="WhatsApp">
                    <i class="bi bi-whatsapp"></i>
                  </a>
                </div>
              </div>
            </div>
          </div><!-- End Projects Item -->

          <!-- PROJET 5 : Villa F5 Contemporaine -->
          <div class="col-lg-4 col-md-6 portfolio-item filter-building">
            <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden project-card">
              <div class="position-relative overflow-hidden" style="height: 250px;">
                <img src="assets/img/image108.jpg" class="w-100 h-100 object-fit-cover" alt="Villa F5 Sanguéra" loading="lazy" decoding="async">
                <span class="badge bg-dark bg-opacity-75 text-white position-absolute top-0 start-0 m-3 px-3 py-2 rounded-pill small">
                  <i class="bi bi-geo-alt-fill text-warning me-1"></i> Sanguéra (Lomé)
                </span>
                <span class="badge bg-primary text-white position-absolute top-0 end-0 m-3 px-3 py-2 rounded-pill small fw-bold">
                  Résidentiel • 2025
                </span>
                <a href="assets/img/image108.jpg" title="Villa F5 à Sanguéra : Études architecturales, gros œuvre et finitions de standing" data-gallery="portfolio-gallery" class="glightbox preview-link-btn position-absolute bottom-0 end-0 m-3 btn btn-light btn-sm rounded-circle shadow">
                  <i class="bi bi-zoom-in"></i>
                </a>
              </div>
              <div class="card-body p-4 d-flex flex-column">
                <h4 class="card-title fw-bold text-dark mb-2">Villa Contemporaine F5</h4>
                <p class="text-muted small mb-3">
                  Conception architecturale et réalisation d'une villa de prestige de type F5, associant grands volumes lumineux, lignes épurées et confort bioclimatique.
                </p>
                <div class="mb-3">
                  <span class="badge bg-light text-secondary border me-1 mb-1 small">Gros œuvre &amp; Second œuvre</span>
                  <span class="badge bg-light text-secondary border me-1 mb-1 small">Finitions premium</span>
                  <span class="badge bg-light text-secondary border mb-1 small">Plan F5</span>
                </div>
                <div class="mt-auto pt-3 border-top d-flex gap-2">
                  <a href="contact.php?subject=Devis%20Construction%20Villa%20F5%20Sanguera" class="btn btn-sm btn-primary flex-grow-1 fw-bold rounded-pill">
                    Chiffrer un projet similaire
                  </a>
                  <a href="https://wa.me/22897151830?text=Bonjour%20ETTIAM,%20je%20souhaite%20construire%20une%20villa%20moderne%20comme%20celle%20de%20Sanguéra" 
                     class="btn btn-sm btn-success rounded-circle d-flex align-items-center justify-content-center" 
                     style="width: 34px; height: 34px;" 
                     target="_blank" 
                     rel="noopener noreferrer" 
                     title="WhatsApp">
                    <i class="bi bi-whatsapp"></i>
                  </a>
                </div>
              </div>
            </div>
          </div><!-- End Projects Item -->

          <!-- PROJET 6 : Ligne de Conduite d'Eau 6 km (PIA) -->
          <div class="col-lg-4 col-md-6 portfolio-item filter-vrd filter-civil">
            <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden project-card">
              <div class="position-relative overflow-hidden" style="height: 250px;">
                <img src="assets/img/image059.jpg" class="w-100 h-100 object-fit-cover" alt="Conduite d'eau 6 km PIA" loading="lazy" decoding="async">
                <span class="badge bg-dark bg-opacity-75 text-white position-absolute top-0 start-0 m-3 px-3 py-2 rounded-pill small">
                  <i class="bi bi-geo-alt-fill text-warning me-1"></i> PIA Adétikopé
                </span>
                <span class="badge bg-success text-white position-absolute top-0 end-0 m-3 px-3 py-2 rounded-pill small fw-bold">
                  Réseau AEP • 2023
                </span>
                <a href="assets/img/image059.jpg" title="Pose d'une ligne d'adduction d'eau de 6 kilomètres pour la plateforme industrielle PIA" data-gallery="portfolio-gallery" class="glightbox preview-link-btn position-absolute bottom-0 end-0 m-3 btn btn-light btn-sm rounded-circle shadow">
                  <i class="bi bi-zoom-in"></i>
                </a>
              </div>
              <div class="card-body p-4 d-flex flex-column">
                <h4 class="card-title fw-bold text-dark mb-2">Conduite d'Eau AEP 6 km</h4>
                <p class="text-muted small mb-3">
                  Terrassement, pose et raccordement de 6 kilomètres de conduites d'eau sous pression pour l'alimentation industrielle, avec regards et vannes de régulation.
                </p>
                <div class="mb-3">
                  <span class="badge bg-light text-secondary border me-1 mb-1 small">Canalisation 6 km</span>
                  <span class="badge bg-light text-secondary border me-1 mb-1 small">Adduction d'eau</span>
                  <span class="badge bg-light text-secondary border mb-1 small">Épreuves sous pression</span>
                </div>
                <div class="mt-auto pt-3 border-top d-flex gap-2">
                  <a href="contact.php?subject=Devis%20Conduite%20Eau%20et%20VRD" class="btn btn-sm btn-primary flex-grow-1 fw-bold rounded-pill">
                    Chiffrer un projet similaire
                  </a>
                  <a href="https://wa.me/22897151830?text=Bonjour%20ETTIAM,%20je%20souhaite%20un%20chiffrage%20pour%20des%20travaux%20de%20réseau%20d'eau%20ou%20canalisations" 
                     class="btn btn-sm btn-success rounded-circle d-flex align-items-center justify-content-center" 
                     style="width: 34px; height: 34px;" 
                     target="_blank" 
                     rel="noopener noreferrer" 
                     title="WhatsApp">
                    <i class="bi bi-whatsapp"></i>
                  </a>
                </div>
              </div>
            </div>
          </div><!-- End Projects Item -->

          <!-- PROJET 7 : Villa Haut Standing & Dépendance -->
          <div class="col-lg-4 col-md-6 portfolio-item filter-building">
            <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden project-card">
              <div class="position-relative overflow-hidden" style="height: 250px;">
                <img src="assets/img/image21.jpg" class="w-100 h-100 object-fit-cover" alt="Villa Haute Standing" loading="lazy" decoding="async">
                <span class="badge bg-dark bg-opacity-75 text-white position-absolute top-0 start-0 m-3 px-3 py-2 rounded-pill small">
                  <i class="bi bi-geo-alt-fill text-warning me-1"></i> Lomé Résidentiel
                </span>
                <span class="badge bg-primary text-white position-absolute top-0 end-0 m-3 px-3 py-2 rounded-pill small fw-bold">
                  Résidentiel de Luxe
                </span>
                <a href="assets/img/image21.jpg" title="Villa Haute Standing avec dépendance et aménagements paysagers" data-gallery="portfolio-gallery" class="glightbox preview-link-btn position-absolute bottom-0 end-0 m-3 btn btn-light btn-sm rounded-circle shadow">
                  <i class="bi bi-zoom-in"></i>
                </a>
              </div>
              <div class="card-body p-4 d-flex flex-column">
                <h4 class="card-title fw-bold text-dark mb-2">Villa Haut Standing</h4>
                <p class="text-muted small mb-3">
                  Bâtiment de caractère comprenant une villa principale spacieuse, une dépendance pour le personnel, une clôture d'enceinte et un aménagement paysager.
                </p>
                <div class="mb-3">
                  <span class="badge bg-light text-secondary border me-1 mb-1 small">Structure R+1</span>
                  <span class="badge bg-light text-secondary border me-1 mb-1 small">Architecture d'intérieur</span>
                  <span class="badge bg-light text-secondary border mb-1 small">Étanchéité toiture</span>
                </div>
                <div class="mt-auto pt-3 border-top d-flex gap-2">
                  <a href="contact.php?subject=Devis%20Villa%20Haut%20Standing" class="btn btn-sm btn-primary flex-grow-1 fw-bold rounded-pill">
                    Chiffrer un projet similaire
                  </a>
                  <a href="https://wa.me/22897151830?text=Bonjour%20ETTIAM,%20je%20souhaite%20un%20devis%20pour%20une%20villa%20de%20haut%20standing" 
                     class="btn btn-sm btn-success rounded-circle d-flex align-items-center justify-content-center" 
                     style="width: 34px; height: 34px;" 
                     target="_blank" 
                     rel="noopener noreferrer" 
                     title="WhatsApp">
                    <i class="bi bi-whatsapp"></i>
                  </a>
                </div>
              </div>
            </div>
          </div><!-- End Projects Item -->

          <!-- PROJET 8 : Bâtiment Universitaire & Scolaire ESAM -->
          <div class="col-lg-4 col-md-6 portfolio-item filter-building filter-civil">
            <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden project-card">
              <div class="position-relative overflow-hidden" style="height: 250px;">
                <img src="assets/img/image41.jpg" class="w-100 h-100 object-fit-cover" alt="Bâtiment ESAM" loading="lazy" decoding="async">
                <span class="badge bg-dark bg-opacity-75 text-white position-absolute top-0 start-0 m-3 px-3 py-2 rounded-pill small">
                  <i class="bi bi-geo-alt-fill text-warning me-1"></i> Lomé
                </span>
                <span class="badge bg-secondary text-white position-absolute top-0 end-0 m-3 px-3 py-2 rounded-pill small fw-bold">
                  Bâtiment ERP
                </span>
                <a href="assets/img/image41.jpg" title="Bâtiment ESAM : Complexe d'enseignement supérieur conforme aux normes d'accueil du public" data-gallery="portfolio-gallery" class="glightbox preview-link-btn position-absolute bottom-0 end-0 m-3 btn btn-light btn-sm rounded-circle shadow">
                  <i class="bi bi-zoom-in"></i>
                </a>
              </div>
              <div class="card-body p-4 d-flex flex-column">
                <h4 class="card-title fw-bold text-dark mb-2">Bâtiment ESAM (Éducation)</h4>
                <p class="text-muted small mb-3">
                  Construction d'un grand bâtiment d'enseignement supérieur comprenant amphithéâtres, salles de cours et circulations conformes aux normes ERP et sécurité incendie.
                </p>
                <div class="mb-3">
                  <span class="badge bg-light text-secondary border me-1 mb-1 small">Normes ERP</span>
                  <span class="badge bg-light text-secondary border me-1 mb-1 small">Acoustique &amp; Ventilation</span>
                  <span class="badge bg-light text-secondary border mb-1 small">Capacité 500+</span>
                </div>
                <div class="mt-auto pt-3 border-top d-flex gap-2">
                  <a href="contact.php?subject=Devis%20Batiment%20Scolaire%20ERP" class="btn btn-sm btn-primary flex-grow-1 fw-bold rounded-pill">
                    Chiffrer un projet similaire
                  </a>
                  <a href="https://wa.me/22897151830?text=Bonjour%20ETTIAM,%20nous%20avons%20un%20projet%20de%20bâtiment%20éducatif%20ou%20complexe%20scolaire" 
                     class="btn btn-sm btn-success rounded-circle d-flex align-items-center justify-content-center" 
                     style="width: 34px; height: 34px;" 
                     target="_blank" 
                     rel="noopener noreferrer" 
                     title="WhatsApp">
                    <i class="bi bi-whatsapp"></i>
                  </a>
                </div>
              </div>
            </div>
          </div><!-- End Projects Item -->

          <!-- PROJET 9 : Roundabout & Protection de Talus -->
          <div class="col-lg-4 col-md-6 portfolio-item filter-vrd filter-civil">
            <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden project-card">
              <div class="position-relative overflow-hidden" style="height: 250px;">
                <img src="assets/img/image58.jpg" class="w-100 h-100 object-fit-cover" alt="Aménagement Roundabout et Talus" loading="lazy" decoding="async">
                <span class="badge bg-dark bg-opacity-75 text-white position-absolute top-0 start-0 m-3 px-3 py-2 rounded-pill small">
                  <i class="bi bi-geo-alt-fill text-warning me-1"></i> Réseau Routier
                </span>
                <span class="badge bg-warning text-dark position-absolute top-0 end-0 m-3 px-3 py-2 rounded-pill small fw-bold">
                  VRD &amp; Sécurité
                </span>
                <a href="assets/img/image58.jpg" title="Aménagement de Roundabout et travaux de protection de talus par perrés maçonnés" data-gallery="portfolio-gallery" class="glightbox preview-link-btn position-absolute bottom-0 end-0 m-3 btn btn-light btn-sm rounded-circle shadow">
                  <i class="bi bi-zoom-in"></i>
                </a>
              </div>
              <div class="card-body p-4 d-flex flex-column">
                <h4 class="card-title fw-bold text-dark mb-2">Roundabout &amp; Stabilisation de Talus</h4>
                <p class="text-muted small mb-3">
                  Travaux d'aménagement géométrique d'un carrefour giratoire, maçonnerie de confortement de talus contre le ravinement et drainage pluvial.
                </p>
                <div class="mb-3">
                  <span class="badge bg-light text-secondary border me-1 mb-1 small">Stabilisation de talus</span>
                  <span class="badge bg-light text-secondary border me-1 mb-1 small">Perré maçonné</span>
                  <span class="badge bg-light text-secondary border mb-1 small">Aménagement urbain</span>
                </div>
                <div class="mt-auto pt-3 border-top d-flex gap-2">
                  <a href="contact.php?subject=Devis%20Travaux%20VRD%20et%20Talus" class="btn btn-sm btn-primary flex-grow-1 fw-bold rounded-pill">
                    Chiffrer un projet similaire
                  </a>
                  <a href="https://wa.me/22897151830?text=Bonjour%20ETTIAM,%20je%20souhaite%20une%20étude%20pour%20un%20projet%20VRD%20ou%20protection%20de%20talus" 
                     class="btn btn-sm btn-success rounded-circle d-flex align-items-center justify-content-center" 
                     style="width: 34px; height: 34px;" 
                     target="_blank" 
                     rel="noopener noreferrer" 
                     title="WhatsApp">
                    <i class="bi bi-whatsapp"></i>
                  </a>
                </div>
              </div>
            </div>
          </div><!-- End Projects Item -->

          <!-- PROJET 10 : Mur de Clôture Industriel PIA ICD -->
          <div class="col-lg-4 col-md-6 portfolio-item filter-civil">
            <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden project-card">
              <div class="position-relative overflow-hidden" style="height: 250px;">
                <img src="assets/img/image43.jpg" class="w-100 h-100 object-fit-cover" alt="PIA ICD Boundary Wall" loading="lazy" decoding="async">
                <span class="badge bg-dark bg-opacity-75 text-white position-absolute top-0 start-0 m-3 px-3 py-2 rounded-pill small">
                  <i class="bi bi-geo-alt-fill text-warning me-1"></i> PIA Adétikopé
                </span>
                <span class="badge bg-secondary text-white position-absolute top-0 end-0 m-3 px-3 py-2 rounded-pill small fw-bold">
                  Industrie • 2021
                </span>
                <a href="assets/img/image43.jpg" title="PIA ICD Boundary Wall : Clôture californienne et panneaux grillagés pour parc de conteneurs" data-gallery="portfolio-gallery" class="glightbox preview-link-btn position-absolute bottom-0 end-0 m-3 btn btn-light btn-sm rounded-circle shadow">
                  <i class="bi bi-zoom-in"></i>
                </a>
              </div>
              <div class="card-body p-4 d-flex flex-column">
                <h4 class="card-title fw-bold text-dark mb-2">Clôture Portuaire PIA ICD</h4>
                <p class="text-muted small mb-3">
                  Construction d'un mur de clôture californien en béton armé surmonté de panneaux grillagés haute résistance pour sécuriser le parc de conteneurs logistique.
                </p>
                <div class="mb-3">
                  <span class="badge bg-light text-secondary border me-1 mb-1 small">Mur californien</span>
                  <span class="badge bg-light text-secondary border me-1 mb-1 small">Sécurité portuaire</span>
                  <span class="badge bg-light text-secondary border me-1 small">Préfabrication béton</span>
                </div>
                <div class="mt-auto pt-3 border-top d-flex gap-2">
                  <a href="contact.php?subject=Devis%20Cloture%20Industrielle%20PIA" class="btn btn-sm btn-primary flex-grow-1 fw-bold rounded-pill">
                    Chiffrer un projet similaire
                  </a>
                  <a href="https://wa.me/22897151830?text=Bonjour%20ETTIAM,%20je%20souhaite%20un%20devis%20pour%20une%20clôture%20industrielle%20sécurisée" 
                     class="btn btn-sm btn-success rounded-circle d-flex align-items-center justify-content-center" 
                     style="width: 34px; height: 34px;" 
                     target="_blank" 
                     rel="noopener noreferrer" 
                     title="WhatsApp">
                    <i class="bi bi-whatsapp"></i>
                  </a>
                </div>
              </div>
            </div>
          </div><!-- End Projects Item -->

          <!-- PROJET 11 : Villa F4 & Dépendance -->
          <div class="col-lg-4 col-md-6 portfolio-item filter-building">
            <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden project-card">
              <div class="position-relative overflow-hidden" style="height: 250px;">
                <img src="assets/img/image17.jpg" class="w-100 h-100 object-fit-cover" alt="Villa F4 Familiale" loading="lazy" decoding="async">
                <span class="badge bg-dark bg-opacity-75 text-white position-absolute top-0 start-0 m-3 px-3 py-2 rounded-pill small">
                  <i class="bi bi-geo-alt-fill text-warning me-1"></i> Lomé
                </span>
                <span class="badge bg-primary text-white position-absolute top-0 end-0 m-3 px-3 py-2 rounded-pill small fw-bold">
                  Résidentiel
                </span>
                <a href="assets/img/image17.jpg" title="Villa F4 avec dépendance et cour aménagée" data-gallery="portfolio-gallery" class="glightbox preview-link-btn position-absolute bottom-0 end-0 m-3 btn btn-light btn-sm rounded-circle shadow">
                  <i class="bi bi-zoom-in"></i>
                </a>
              </div>
              <div class="card-body p-4 d-flex flex-column">
                <h4 class="card-title fw-bold text-dark mb-2">Villa F4 Familiale &amp; Dépendance</h4>
                <p class="text-muted small mb-3">
                  Ensemble résidentiel comprenant séjour traversant, 3 chambres avec salles de bains individuelles, dépendance pour le gardien et terrasse couverte.
                </p>
                <div class="mb-3">
                  <span class="badge bg-light text-secondary border me-1 mb-1 small">Résidence F4</span>
                  <span class="badge bg-light text-secondary border me-1 mb-1 small">Plans d'architecte</span>
                  <span class="badge bg-light text-secondary border me-1 small">Suivi rigoureux</span>
                </div>
                <div class="mt-auto pt-3 border-top d-flex gap-2">
                  <a href="contact.php?subject=Devis%20Villa%20F4%20Familiale" class="btn btn-sm btn-primary flex-grow-1 fw-bold rounded-pill">
                    Chiffrer un projet similaire
                  </a>
                  <a href="https://wa.me/22897151830?text=Bonjour%20ETTIAM,%20je%20souhaite%20des%20plans%20et%20un%20chiffrage%20pour%20une%20villa%20F4" 
                     class="btn btn-sm btn-success rounded-circle d-flex align-items-center justify-content-center" 
                     style="width: 34px; height: 34px;" 
                     target="_blank" 
                     rel="noopener noreferrer" 
                     title="WhatsApp">
                    <i class="bi bi-whatsapp"></i>
                  </a>
                </div>
              </div>
            </div>
          </div><!-- End Projects Item -->

          <!-- PROJET 12 : Exploitation Avicole Moderne d'Agbodrafo -->
          <div class="col-lg-4 col-md-6 portfolio-item filter-civil">
            <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden project-card">
              <div class="position-relative overflow-hidden" style="height: 250px;">
                <img src="assets/img/image48.jpg" class="w-100 h-100 object-fit-cover" alt="Ferme avicole Agbodrafo" loading="lazy" decoding="async">
                <span class="badge bg-dark bg-opacity-75 text-white position-absolute top-0 start-0 m-3 px-3 py-2 rounded-pill small">
                  <i class="bi bi-geo-alt-fill text-warning me-1"></i> Agbodrafo
                </span>
                <span class="badge bg-success text-white position-absolute top-0 end-0 m-3 px-3 py-2 rounded-pill small fw-bold">
                  Agro-Industrie • 2020
                </span>
                <a href="assets/img/image48.jpg" title="Ferme avicole moderne à Agbodrafo : bâtiments d'élevage, forages et locaux techniques" data-gallery="portfolio-gallery" class="glightbox preview-link-btn position-absolute bottom-0 end-0 m-3 btn btn-light btn-sm rounded-circle shadow">
                  <i class="bi bi-zoom-in"></i>
                </a>
              </div>
              <div class="card-body p-4 d-flex flex-column">
                <h4 class="card-title fw-bold text-dark mb-2">Complexe Avicole Moderne</h4>
                <p class="text-muted small mb-3">
                  Réalisation de hangars d'élevage ventilés, réseaux sanitaires, réservoirs d'eau et locaux techniques dédiés à la production avicole industrielle.
                </p>
                <div class="mb-3">
                  <span class="badge bg-light text-secondary border me-1 mb-1 small">Agro-industrie</span>
                  <span class="badge bg-light text-secondary border me-1 mb-1 small">Ventilation contrôlée</span>
                  <span class="badge bg-light text-secondary border me-1 small">Réseau d'eau dédié</span>
                </div>
                <div class="mt-auto pt-3 border-top d-flex gap-2">
                  <a href="contact.php?subject=Devis%20Infrastructure%20Agro-industrielle" class="btn btn-sm btn-primary flex-grow-1 fw-bold rounded-pill">
                    Chiffrer un projet similaire
                  </a>
                  <a href="https://wa.me/22897151830?text=Bonjour%20ETTIAM,%20je%20souhaite%20des%20conseils%20pour%20un%20projet%20agro-industriel%20ou%20hangar" 
                     class="btn btn-sm btn-success rounded-circle d-flex align-items-center justify-content-center" 
                     style="width: 34px; height: 34px;" 
                     target="_blank" 
                     rel="noopener noreferrer" 
                     title="WhatsApp">
                    <i class="bi bi-whatsapp"></i>
                  </a>
                </div>
              </div>
            </div>
          </div><!-- End Projects Item -->

        </div><!-- End Projects Container -->

      </div>

    </div>
  </section><!-- End Our Projects Section -->

  <!-- ======= Section Pourquoi Choisir ETTIAM (Conversion & Confiance) ======= -->
  <section class="py-5 bg-light border-top border-bottom">
    <div class="container" data-aos="fade-up">
      <div class="row align-items-center gy-4">
        <div class="col-lg-5">
          <span class="badge bg-primary text-white text-uppercase px-3 py-2 fw-bold mb-2">Notre Différence</span>
          <h2 class="fw-bold text-dark mb-3">Pourquoi confier votre ouvrage à ETTIAM ?</h2>
          <p class="text-muted mb-4">
            Contrairement aux simples exécutants, ETTIAM réunit un <strong>bureau d'études techniques intégré</strong> et des <strong>équipes travaux hautement qualifiées</strong>, assurant une maîtrise totale de la chaîne de valeur.
          </p>
          <div class="d-flex align-items-center gap-3">
            <a href="contact.php" class="btn btn-primary px-4 py-2 rounded-pill fw-bold">
              Demander un devis détaillé <i class="bi bi-arrow-right ms-1"></i>
            </a>
            <a href="about.php" class="btn btn-outline-secondary px-3 py-2 rounded-pill">
              Découvrir notre équipe
            </a>
          </div>
        </div>

        <div class="col-lg-7">
          <div class="row g-3">
            <div class="col-md-6">
              <div class="p-4 bg-white rounded-4 shadow-sm h-100 border-start border-4 border-primary">
                <i class="bi bi-shield-check text-primary fs-2 mb-2 d-inline-block"></i>
                <h5 class="fw-bold">Rigueur &amp; Normes Internationales</h5>
                <p class="text-muted small mb-0">Tous nos calculs de structure respectent les normes BAEL et Eurocodes avec validation géotechnique.</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="p-4 bg-white rounded-4 shadow-sm h-100 border-start border-4 border-warning">
                <i class="bi bi-clock-history text-warning fs-2 mb-2 d-inline-block"></i>
                <h5 class="fw-bold">Respect des Délais &amp; Budgets</h5>
                <p class="text-muted small mb-0">Planning d'exécution rigoureux (méthode GANTT) et devis estimatifs détaillés sans surcoût imprévu.</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="p-4 bg-white rounded-4 shadow-sm h-100 border-start border-4 border-success">
                <i class="bi bi-person-badge text-success fs-2 mb-2 d-inline-block"></i>
                <h5 class="fw-bold">Ingénieur Résident Dédié</h5>
                <p class="text-muted small mb-0">Chaque chantier est supervisé au quotidien par un ingénieur ou conducteur de travaux expérimenté.</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="p-4 bg-white rounded-4 shadow-sm h-100 border-start border-4 border-info">
                <i class="bi bi-tools text-info fs-2 mb-2 d-inline-block"></i>
                <h5 class="fw-bold">Parc Matériel Propre</h5>
                <p class="text-muted small mb-0">Élévateurs, échafaudages, bétonnières et engins en propriété garantissant réactivité et autonomie.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ======= Section Témoignages & Références Partenaires ======= -->
  <section class="py-5 bg-white">
    <div class="container text-center" data-aos="fade-up">
      <span class="text-muted text-uppercase fw-bold small" style="letter-spacing: 2px;">Ils nous ont fait confiance pour leurs réalisations</span>
      <div class="row justify-content-center align-items-center g-4 mt-2">
        <div class="col-6 col-md-3">
          <div class="p-3 border rounded-3 bg-light text-dark fw-bold">
            <i class="bi bi-building me-2 text-primary"></i> Plateforme PIA
          </div>
        </div>
        <div class="col-6 col-md-3">
          <div class="p-3 border rounded-3 bg-light text-dark fw-bold">
            <i class="bi bi-lightning-charge-fill me-2 text-warning"></i> Centrale KEKELI
          </div>
        </div>
        <div class="col-6 col-md-3">
          <div class="p-3 border rounded-3 bg-light text-dark fw-bold">
            <i class="bi bi-gem me-2 text-success"></i> Secteur Minier
          </div>
        </div>
        <div class="col-6 col-md-3">
          <div class="p-3 border rounded-3 bg-light text-dark fw-bold">
            <i class="bi bi-houses me-2 text-info"></i> Promoteurs Privés
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ======= Call to Action Section (Composant Commun) ======= -->
  <?php include 'includes/cta-section.php'; ?>

</main><!-- End #main -->

<style>
  /* Améliorations spécifiques à la page Projets */
  .portfolio-flters li {
    cursor: pointer;
    display: inline-block;
    padding: 8px 20px;
    font-size: 14px;
    font-weight: 600;
    line-height: 1;
    text-transform: uppercase;
    margin-bottom: 5px;
    transition: all 0.3s ease-in-out;
    border-radius: 50px;
    background: #f1f5f9;
    color: #475569;
  }
  .portfolio-flters li:hover,
  .portfolio-flters li.filter-active {
    background: #ffb703 !important;
    color: #0b2545 !important;
    box-shadow: 0 4px 12px rgba(255, 183, 3, 0.3);
  }
  .project-card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    border: 1px solid rgba(0, 0, 0, 0.06) !important;
  }
  .project-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 16px 32px rgba(11, 37, 69, 0.12) !important;
  }
  .project-card img {
    transition: transform 0.5s ease;
  }
  .project-card:hover img {
    transform: scale(1.06);
  }
  .preview-link-btn {
    opacity: 0.9;
    transition: opacity 0.3s ease, transform 0.3s ease;
  }
  .preview-link-btn:hover {
    opacity: 1;
    transform: scale(1.1);
  }
</style>

<?php include 'includes/footer.php'; ?>
