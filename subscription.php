<!DOCTYPE php>
<php lang="en">

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
      $("#subscription").addClass('active');
    });
  </script>
</head>

<body>
  <!-- ======= Header ======= -->
  <?php 
    include('core/header.php');
  ?>
  <!-- End Header -->

  <!-- ======= Content Section ======= -->
  <div class="subs-container">
        <div class="video-post">
            <div class="video-post-thumbnail">
                <img src="assets/img/thumbnail/binar3.png">
            </div>
            <div class="video-post-info">
                <div class="video-post-speaker">
                    <img src="assets/img/speaker/ian-schnoor.jpg">
                </div>
                <div class="video-post-detail-left">
                    <span class="video-post-title font-weight-bold">Financial Modeling Best Practice</span>
                    <p class="video-post-name">Ian Schnoor</p>
                </div>
                <div class="video-post-detail-right">
                    <span class="video-post-views">1,542,803 Views</span>
                    <p class="vide-post-date">August 21, 2021</p>
                </div>
            </div>
        </div>
    </div>
  <!-- End Content Section -->


  <!-- ======= Footer ======= -->
  <?php 
    include('core/footer.php');
  ?>
  <!-- End  Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</php>