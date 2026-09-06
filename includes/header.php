
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>ETTIAM - Entreprise Transcontinentale des Travaux d'Infrastructure, d'Aménagement et de Maintenance</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

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
</head>

<body>
  <div id="preloader"></div>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <h1 style="color:darkblue ;">ETTIAM</h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
        <nav id="navbar" class="navbar">
          <ul>
            <li><a href="index.php" class="active">Accueil</a></li>
            <li><a href="about.php">A  propos</a></li>
            <li class="dropdown"><a href=""><span>Expériences</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
              <ul>
                <li><a href="service-details2025.php">Expériences 2025</a></li>
                <li><a href="service-details2024.php">Expériences 2024</a></li>
                <li><a href="service-details2023.php">Expériences 2023</a></li>
                <li><a href="service-details2022.php">Expériences 2022</a></li>
                <li><a href="service-details2021.php">Expériences 2021</a></li>
                <li><a href="service-details2020.php">Expériences 2020</a></li>
                <li><a href="service-details2019.php">Expériences 2019</a></li>
              </ul>
            </li>
            <li class="dropdown"><a href=""><span>Prestations</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
              <ul>
                <li><a href="geniecivil.php">Construction génie civil</a></li>
                <li><a href="voirie.php">Voirie et réseaux divers</a></li>
                <li><a href="hydraulique.php">Hydraulique &amp; Assainissement</a></li>
                <li><a href="exploitation.php">Section Exploitation</a></li>
              </ul>
            </li>
            <li><a href="projects.php">Projets</a></li>
            <li>
  <a href="sale-or-rent-btp-auto.php">Location</a>
  <span class="new">New</span>
</li>

<style>
  li {
    position: relative;
    list-style: none;
  }

  .new {
    position: absolute;
    top: 0;
    left: 100%;
    transform: translateY(-50%);
    background-color: red;
    color: white;
    font-size: 10px;
    padding: 2px 4px;
    border-radius: 12px;
    font-weight: bold;
    text-transform: uppercase;
  }
</style>

            </li>
            <li><a href="contact.php">Contact</a></li>
          </ul>
        </nav><!-- .navbar -->
      </div>

    </div>
  </header><!-- End Header -->


<script>
  document.addEventListener("DOMContentLoaded", function () {
    const currentUrl = window.location.pathname.split("/").pop();
    const navLinks = document.querySelectorAll("#navbar a");

    navLinks.forEach(link => {
      const linkHref = link.getAttribute("href");
      if (linkHref === currentUrl || currentUrl === "" && linkHref === "index.php") {
        link.classList.add("active");
      } else {
        link.classList.remove("active");
      }
    });
  });
</script>
