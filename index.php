<?php

require 'core/function.php';
$pdo = dbConnection();


$trending_query = "SELECT w.*, s.speaker_name FROM webinar w JOIN speaker s ON s.speaker_id = w.speaker_id WHERE status=1 LIMIT 4";
$trending_process = $pdo -> query($trending_query);
$data_trending = $trending_process -> fetchAll();

$newr_query = "SELECT w.*, s.speaker_name FROM webinar w JOIN speaker s ON s.speaker_id = w.speaker_id WHERE date < NOW() ORDER BY date DESC LIMIT 4";
$newr_process = $pdo -> query($newr_query);
$data_newr = $newr_process -> fetchAll();

$csoon_query = "SELECT w.*, s.speaker_name FROM webinar w JOIN speaker s ON s.speaker_id = w.speaker_id WHERE w.date > NOW() LIMIT 4";
$csoon_process = $pdo -> query($csoon_query);
$data_csoon = $csoon_process -> fetchAll();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Kaizen</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <?php 
    include('core/loader.php');
  ?> 

  <script>
    $(document).ready(function(){
      $('a').removeClass('active');
      $("#home").addClass('active');
    });
  </script>
</head>

<body>
  <!-- ======= Header ======= -->
  <?php 
    include('core/header.php');
  ?>
  <!-- End Header -->

  <!-- ======= Carousel Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

        <ol id="hero-carousel-indicators" class="carousel-indicators"></ol>
        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active" style="background-image: url(assets/img/hero-carousel/1.jpg)">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">Welcome To <span style="color: #3ec1d5">K</span>aizen </h2>
                <p class="animate__animated animate__fadeInUp">Kaizen Help You Find The Best Webinar</p>
                <a href="#main" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a>
              </div>
            </div>
          </div>
          
          <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/2.jpg)">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">Welcome to <span style="color :#3ec1d5">K</span>aizen
                </h2>
                <p class="animate__animated animate__fadeInUp">Excellent Carrer Begin With Excellent Education</p>
                <a href="#main" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a>
              </div>
            </div>
          </div>

          <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/3.jpg)">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">Welcome To <span style="color: #3ec1d5">K</span>aizen
                </h2>
                <p class="animate__animated animate__fadeInUp">Education Is The Most Powerful Weapon Which You Can Use
                  To Change The World</p>
                <a href="#main" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>
    </div>
  </section><!-- End Carousel Section -->

  <section id=main>
    <main id="main">    
      <!-- ======= Videos in Home Section ======= -->
      <!-- TRENDING NOW -->
      <div id="portfolio" class="portfolio-area mt-5 mb-5">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="section-headline">
                <h2>TRENDING NOW</h2>
              </div>
            </div>
          </div>

          <div class="row awesome-project-content portfolio-container">
          <?php 
            for($i=0; $i<sizeof($data_trending); $i++){
          ?>

          <div class="col-md-3 col-sm-3 col-xs-12 portfolio-item filter-app portfolio-item">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <img src="<?= $data_trending[$i]['thumbnail'] ?>" alt="" />
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="portfolio-lightbox" data-gallery="myGallery"
                      href="<?= $data_trending[$i]['link'] ?>">
                      <h4><?= strtoupper($data_trending[$i]['webinar_title']) ?></h4>
                      <h6><?= ucwords($data_trending[$i]['speaker_name']) ?></h6>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <?php
            }
          ?>
        </div>
      </div>

      <!-- NEW RELEASE -->
      <div id="portfolio" class="portfolio-area mt-4">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="section-headline">
                <h2>NEW RELEASE</h2>
              </div>
            </div>
          </div>

          <div class="row awesome-project-content portfolio-container">
          <?php 
            for($i=0; $i < sizeof($data_newr); $i++){
          ?>

          <div class="col-md-3 col-sm-3 col-xs-12 portfolio-item filter-app portfolio-item">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <img src="<?= $data_newr[$i]['thumbnail'] ?>" alt="" />
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="portfolio-lightbox" data-gallery="myGallery"
                      href="<?= $data_newr[$i]['link'] ?>">
                      <h4><?= strtoupper($data_newr[$i]['webinar_title']) ?></h4>
                      <h6><?= ucwords($data_newr[$i]['speaker_name']) ?></h6>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <?php
            }
          ?>
        </div>
      </div>

      <!-- CONTINUE WATCHING -->
      <div id="portfolio" class="portfolio-area mt-4">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="section-headline">
                <h2>CONTINUE WATCHING</h2>
              </div>
            </div>
          </div>

          <div class="row awesome-project-content portfolio-container">
            <div class="col-md-3 col-sm-3 col-xs-12 portfolio-item filter-app portfolio-item">
              <div class="single-awesome-project">
                <div class="awesome-img">
                  <img src="assets/img/thumbnail/binar9.png" alt="" />
                  <div class="add-actions text-center">
                    <div class="project-dec">
                      <a class="portfolio-lightbox" data-gallery="myGallery"
                        href="https://www.youtube.com/watch?v=OKAlX-GArG8">
                        <h4>FORENSIC ACCOUNTING VS INVESTIGATIVE AUDITING</h4>
                        <h6>Vidvant Brahmantyo</h6>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-3 col-sm-3 col-xs-12 portfolio-item filter-web">
              <div class="single-awesome-project">
                <div class="awesome-img">
                  <img src="assets/img/thumbnail/binar10.png" alt="" />
                  <div class="add-actions text-center">
                    <div class="project-dec">
                      <a class="portfolio-lightbox" data-gallery="myGallery"
                        href="https://www.youtube.com/watch?v=8QoT_o3ljv4">
                        <h4>OPTIMASI MEDIA PODCAST, RADIO, & TV EDUKASI PADA PEMBELAJARAN</h4>
                        <h6>Agus Triarso</h6>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-3 col-sm-3 col-xs-12 portfolio-item filter-card">
              <div class="single-awesome-project">
                <div class="awesome-img">
                  <img src="assets/img/thumbnail/binar11.png" alt="" />
                  <div class="add-actions text-center">
                    <div class="project-dec">
                      <a class="portfolio-lightbox" data-gallery="myGallery"
                        href="https://www.youtube.com/watch?v=AjuIcMzjf5M">
                        <h4>HOW TO IMPROVE CHARACTERISTIC SELF POTENTIAL</h4>
                        <h6>AC Mahendra K Datu</h6>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-3 col-sm-3 col-xs-12 portfolio-item filter-card">
              <div class="single-awesome-project">
                <div class="awesome-img">
                  <img src="assets/img/thumbnail/binar12.png" alt="" />
                  <div class="add-actions text-center">
                    <div class="project-dec">
                      <a class="portfolio-lightbox" data-gallery="myGallery"
                        href="https://www.youtube.com/watch?v=fJiCcZd6Ky8">
                        <h4>MERDEKA BELAJAR DI ERA KURIKULUM PROTOTIPE 2022</h4>
                        <h6>Fathur Rokhman</h6>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- COMING SOON -->
      <div id="portfolio" class="portfolio-area mt-4">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="section-headline">
                <h2>COMING SOON</h2>
              </div>
            </div>
          </div>

          <div class="row awesome-project-content portfolio-container">
          <?php 
            for($i=0; $i < sizeof($data_csoon); $i++){
          ?>

          <div class="col-md-3 col-sm-3 col-xs-12 portfolio-item filter-app portfolio-item">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <img src="<?= $data_csoon[$i]['thumbnail'] ?>" alt="" />
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="portfolio-lightbox" data-gallery="myGallery"
                      href="<?= $data_csoon[$i]['thumbnail'] ?>">
                      <h4><?= strtoupper($data_csoon[$i]['webinar_title']) ?></h4>
                      <h6><?= ucwords($data_csoon[$i]['speaker_name']) ?></h6>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <?php
            }
          ?>
        </div>
      </div>
  </section>
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php 
    include('core/footer.php');
  ?>
  <!-- End  Footer -->

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>
</html>