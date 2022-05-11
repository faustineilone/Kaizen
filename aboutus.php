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

  <!-- Favicons -->
  <link href="assets/img/kaizen.png" rel="icon">
</head>

<body>
  <!-- ======= Content Section ======= -->
  <section id="aboutus">
    <div class="aboutus-container">
        <div class="aboutus-logo">
            <img src="assets/img/kaizen.png">
        </div>
        <div class="aboutus-desc">
            <p><span>Kaizen</span> is a webinar streaming platform for people to watch webinars in numerous topics without commercials on an internet-connected device.</p>
            <p><span>Kaizen.org</span> built Kaizen in <span>2022</span> in hopes of increasing people's interest in webinars by providing easy access to webinars.</p>
            <p><span>Kaizen</span> managed to collaborate with various webinars' speakers for users to choose from. We hope to further cooperate with different parties in the future and provide the best user experience.</p>
        </div>
    </div>
  </section>
  <!-- End Content Section -->

  <!-- ======= Footer ======= -->
  <?php 
    include('core/footer.php');
  ?>
</body>

</html>