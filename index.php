<?php

require 'core/function.php';
$pdo = dbConnection();

$trending_query = "SELECT w.*, s.speaker_name FROM webinar w JOIN speaker s ON s.speaker_id = w.speaker_id WHERE status=1 LIMIT 4";
$trending_process = $pdo -> query($trending_query);
$data_trending = $trending_process -> fetchAll();

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
                <h2 class="animate__animated animate__fadeInDown">Welcome To <span style="color: #3ec1d5">K</span>aizen
                </h2>
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
      <div id="portfolio" class="portfolio-area mt-5">
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
            for($i=0; $i < sizeof($data_trending); $i++){
              // die(var_dump($data_trending[$i]['speaker_name']));
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
      <!-- </div> -->

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
            <div class="col-md-3 col-sm-3 col-xs-12 portfolio-item filter-app portfolio-item">
              <div class="single-awesome-project">
                <div class="awesome-img">
                  <img src="assets/img/thumbnail/binar5.png" alt="" />
                  <div class="add-actions text-center">
                    <div class="project-dec">
                      <a class="portfolio-lightbox" data-gallery="myGallery"
                        href="https://www.youtube.com/watch?v=_tTngynwM-k">
                        <h4>AKUNTANSI PERUSAHAAN DIGITAL: KEUNIKAN DAN TANTANGAN</h4>
                        <h6>Arry Andrian Simbolon</h6>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-3 col-sm-3 col-xs-12 portfolio-item filter-web">
              <div class="single-awesome-project">
                <div class="awesome-img">
                  <img src="assets/img/thumbnail/binar6.png" alt="" />
                  <div class="add-actions text-center">
                    <div class="project-dec">
                      <a class="portfolio-lightbox" data-gallery="myGallery"
                        href="https://www.youtube.com/watch?v=l3QntsdJh4g">
                        <h4>MENGEMBANGKAN SEMANGAT GURU DALAM MENINGKATKAN PUBLIKASI ILMIAH</h4>
                        <h6>Ferial</h6>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-3 col-sm-3 col-xs-12 portfolio-item filter-card">
              <div class="single-awesome-project">
                <div class="awesome-img">
                  <img src="assets/img/thumbnail/binar7.png" alt="" />
                  <div class="add-actions text-center">
                    <div class="project-dec">
                      <a class="portfolio-lightbox" data-gallery="myGallery"
                        href="https://www.youtube.com/watch?v=gCGnBBdyBC0">
                        <h4>INVESTIGATIVE AUDITING AND FORENSIC ACCOUNTING</h4>
                        <h6>Doddy Zulma</h6>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-3 col-sm-3 col-xs-12 portfolio-item filter-card">
              <div class="single-awesome-project">
                <div class="awesome-img">
                  <img src="assets/img/thumbnail/binar8.png" alt="" />
                  <div class="add-actions text-center">
                    <div class="project-dec">
                      <a class="portfolio-lightbox" data-gallery="myGallery"
                        href="https://www.youtube.com/watch?v=htOAldFIt4Q">
                        <h4>PEMBELAJARAN INTERAKTIF UNTUK GENERASI Z YANG MENYENANGKAN</h4>
                        <h6>Riesintiya Aska</h6>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
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
            <div class="col-md-3 col-sm-3 col-xs-12 portfolio-item filter-app portfolio-item">
              <div class="single-awesome-project">
                <div class="awesome-img">
                  <img src="assets/img/thumbnail/binar13.png" alt="" />
                  <div class="add-actions text-center">
                    <div class="project-dec">
                      <a class="portfolio-lightbox" data-gallery="myGallery" href="assets/img/thumbnail/binar13.png">
                        <h4>STRATEGI PRAKTIK PEMBELAJARAN KURIKULUM MERDEKA</h4>
                        <h6>Luluk Elyana</h6>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-3 col-sm-3 col-xs-12 portfolio-item filter-web">
              <div class="single-awesome-project">
                <div class="awesome-img">
                  <img src="assets/img/thumbnail/binar14.png" alt="" />
                  <div class="add-actions text-center">
                    <div class="project-dec">
                      <a class="portfolio-lightbox" data-gallery="myGallery" href="assets/img/thumbnail/binar14.png">
                        <h4>MENEROPONG ARAH KEBIJAKAN BARU KURIKULUM PENDIDIKAN DASAR DAN MENENGAH</h4>
                        <h6>Samsudi</h6>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-3 col-sm-3 col-xs-12 portfolio-item filter-card">
              <div class="single-awesome-project">
                <div class="awesome-img">
                  <img src="assets/img/thumbnail/binar15.png" alt="" />
                  <div class="add-actions text-center">
                    <div class="project-dec">
                      <a class="portfolio-lightbox" data-gallery="myGallery" href="assets/img/thumbnail/binar15.png">
                        <h4>MEMBANGUN BISNIS KULINER <br /> DARI NOL</h4>
                        <h6>Rex Marindo</h6>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-3 col-sm-3 col-xs-12 portfolio-item filter-card">
              <div class="single-awesome-project">
                <div class="awesome-img">
                  <img src="assets/img/thumbnail/binar16.png" alt="" />
                  <div class="add-actions text-center">
                    <div class="project-dec">
                      <a class="portfolio-lightbox" data-gallery="myGallery" href="assets/img/thumbnail/binar16.png">
                        <h4>SA 500 BUKTI AUDIT - <br /> AUDIT BERBASIS ISA</h4>
                        <h6>Ivan Kanel</h6>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>

          <!-- Start  Contact -->
          <div class="col-md-6">
            <div class="form contact-form">
              <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="form-group mt-3">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
                <div class="form-group mt-3">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                </div>
                <div class="form-group mt-3">
                  <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                </div>
                <div class="my-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>
                <div class="text-center"><button type="submit">Send Message</button></div>
              </form>
            </div>
          </div>
          <!-- End Left contact -->
        </div>
      </div>
    </div>
  </div><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php 
    include('core/footer.php');
  ?>
  <!-- End  Footer -->

</body>
</html>