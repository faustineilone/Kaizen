<?php

if($_GET['page'] == 'Education'){
  $title = 'Education';
}else if ($_GET['page'] == 'Financial'){
  $title = 'Financial';
}else if ($_GET['page'] == 'Business'){
  $title = 'Business';
}else if ($_GET['page'] == 'Health'){
  $title = 'Health';
}else if ($_GET['page'] == 'Self Development'){
  $title = 'Self Development';
}else {
  $title = 'No Data of This Category';
}

require 'core/function.php';
$pdo = dbConnection();
$category_query = "SELECT w.*, c.category_name, s.* FROM webinar w 
                  LEFT JOIN category c ON w.category_id = c.category_id 
                  LEFT JOIN speaker s ON w.speaker_id = s.speaker_id 
                  WHERE c.category_name = ? AND w.date < NOW()";
$category_process = $pdo -> prepare($category_query);
$category_process -> execute([$_GET['page']]);
$data_category = $category_process -> fetchAll();
// die(var_dump($data_category));

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
  <div class="title-container">
    <h4><?= $title; ?></h4>
  </div>

  <?php 
    for($i=0; $i<sizeof($data_category); $i++){
  ?>

  <div class="cat-container col-12">
    <div class="cat-video-thumbnail">
      <a class="portfolio-lightbox" data-gallery="myGallery"
        href="<?= $data_category[$i]['link'] ?>">
        <img src="<?= $data_category[$i]['thumbnail'] ?>">
      </a>
    </div>
    <div class="cat-video-speaker">
      <img src="<?= $data_category[$i]['pic'] ?>">
    </div>
    <div class="cat-video-info">
      <div class="cat-video-info-2">
      <p class="cat-video-title"><?= $data_category[$i]['webinar_title'] ?></p>
      <p class="cat-speaker-name"><?= $data_category[$i]['speaker_name'] ?></p>
      <div class="cat-video-else">
        <i class="bi bi-hourglass-split"></i><span>  &nbsp; <?= $data_category[$i]['duration'] ?> MIN</span>
        <p><?= $data_category[$i]['webinar_desc'] ?></p>
        <i class="bi bi-eye"></i><span> &nbsp; <?= $data_category[$i]['views'] ?> Views</span><br />
        <?php
          $formatted_webinar_date = new DateTime($data_category[$i]['date']);
        ?>
        <i class="bi bi-calendar-event"></i><span> &nbsp; <?= $formatted_webinar_date -> format('F d, Y'); ?></span>
      </div>
      </div>
    </div>
  </div>

  <?php
    }
  ?>
  
  <!-- End Content Section -->
  
  <!-- ======= Footer ======= -->
  <?php 
    include('core/footer.php');
  ?>
  <!-- End  Footer -->
</body>
  
</html>