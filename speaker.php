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
      $("#id").addClass('active');
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
  <section id="speaker_page_head">
    <div class="speaker-container col-12">
        <div class="speaker-profpic">
            <img src="assets/img/profpic.png">
        </div>
        <div class="speaker-head">
            <div class="speaker-detail">
                <div class="speaker-name">
                    <h4>Name of Speaker</h4>
                </div>
                <div class="speaker-info">
                    <span><i class="bi bi-person-fill"></i>&ensp;1,000,000 Subscribers &emsp;</span>
                    <span><i class="bi bi-play-circle-fill"></i>&ensp;20 Webinars</span>
                </div>
            <button class="btn-get-started scrollto animate__animated">Subscribe</button>
        </div>
    </div>
  </section>
  <section id="speaker_page_bottom">
    <div class="speaker-container-2 col-12">
        <div class="speaker-vid-section col-6">
            <div class="speaker-vid-thumbnail">
                <img src="assets/img/thumbnail/binar1.png">
            </div>
            <div class="speaker-vid-detail">
                <div class="speaker-vid-detail-left">
                    <span>Title of Webinar</span>
                </div>
                <div class="speaker-vid-detail-right">
                    <span><i class="bi bi-eye"></i>&ensp;Number of Views</span>
                    <span><i class="bi bi-calendar-event"></i>&ensp;Date of Webinar</span>
                </div>
            </div>
        </div>
        <div class="speaker-vid-section col-6">
            <div class="speaker-vid-thumbnail">
                <img src="assets/img/thumbnail/binar1.png">
            </div>
            <div class="speaker-vid-detail">
                <div class="speaker-vid-detail-left">
                    <span>Title of Webinar</span>
                </div>
                <div class="speaker-vid-detail-right">
                    <span><i class="bi bi-eye"></i>&ensp;Number of Views</span>
                    <span><i class="bi bi-calendar-event"></i>&ensp;Date of Webinar</span>
                </div>
            </div>
        </div>
    </div>
  </section>
  <!-- End Content Section -->

  <!-- ======= Footer ======= -->
  <?php 
    include('core/footer.php');
  ?>
  <!-- End  Footer -->

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</body>

</html>