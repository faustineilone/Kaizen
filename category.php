<?php
require 'core/function.php';
$pdo = dbConnection();
$sql = "SELECT * FROM webinar WHERE category_id=?";
$hasil = $pdo -> query($sql);

if($_GET['page'] == 'Motivation'){
  $title = 'Motivation';

}else if ($_GET['page'] == 'Education'){
  $title = 'Education';

}else if ($_GET['page'] == 'Financial'){
  $title = 'Financial';

}else if ($_GET['page'] == 'Business'){
  $title = 'Business';

}else if ($_GET['page'] == 'Health'){
  $title = 'Health';

}else if ($_GET['page'] == 'Self'){
  $title = 'Self Development';

}else {
  $title = 'HI';
}

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
      $("#category").addClass('active');
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
  <h2><?= $title; ?></h2>
  <div class="title-container">
    <h4>Tips</h4>
  </div>

  <div class="cat-container col-12">
    <div class="cat-video-thumbnail">
      <img src="assets/img/thumbnail/binar3.png">
    </div>
    <div class="cat-video-info">
      <div class="cat-video-info-2">
      <p class="cat-video-title">Financial Modeling Best Practice</p>
      <p class="cat-speaker-name">Ian Schnoor</p>
      <div class="cat-video-else">
        <i class="bi bi-hourglass-split"></i><span>  &nbsp; 120 MIN</span>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
        <i class="bi bi-eye"></i><span> &nbsp; 1,542,803 Views</span><br />
        <i class="bi bi-calendar-event"></i><span> &nbsp; August 21, 2021</span>
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
</body>
  
</html>