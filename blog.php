<?php include 'includes/header.php'; ?>

<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/breadcrumbs-bg.jpg');">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

      <h2>Blog</h2>
      <ol>
        <li><a href="index.php">Accueil</a></li>
        <li>Blog</li>
      </ol>

    </div>
  </div><!-- End Breadcrumbs -->

  <!-- ======= Blog Section ======= -->
  <section id="blog" class="blog">
    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row gy-4 posts-list">

        <div class="col-xl-4 col-md-6">
          <div class="post-item position-relative h-100">

            <div class="post-img position-relative overflow-hidden">
              <img src="assets/img/blog/blog-1.jpg" class="img-fluid" alt="" loading="lazy" decoding="async">
              <span class="post-date">Date</span>
            </div>

            <div class="post-content d-flex flex-column">

              <h3 class="post-title">Titre de l'article</h3>

              <div class="meta d-flex align-items-center">
                <div class="d-flex align-items-center">
                  <i class="bi bi-person"></i> <span class="ps-2">Auteur du blog</span>
                </div>
                <span class="px-3 text-black-50">/</span>
                <div class="d-flex align-items-center">
                  <i class="bi bi-folder2"></i> <span class="ps-2">Sujet du blog</span>
                </div>
              </div>

              <p>
                Résumé ou contexte
              </p>

              <hr>

              <a href="blog-details.php" class="readmore stretched-link"><span>En savoir plus</span><i class="bi bi-arrow-right"></i></a>

            </div>

          </div>
        </div>
        </div><!-- End post list item -->

      </div><!-- End blog posts list -->

    </div>
  </section><!-- End Blog Section -->

  <!-- ======= Call to Action Section ======= -->
  <?php include 'includes/cta-section.php'; ?>

</main><!-- End #main -->

<?php include 'includes/footer.php'; ?>
