<?php

include('core/loader.php');

$speaker_data = [
  'id' => '',
  'name' => 'NO SPEAKER FOUND',
  'img' => 'assets/img/profpic.png',
  'total_subscriber' => 0,
  'total_webinar' => 0,
  'subscription_status' => 0,
  'webinars' => [],
  // 'webinars' => [
  //   'webinar_id' => '',
  //   'webinar_title' => '',
  //   'webinar_link' => '',
  //   'webinar_views' => '',
  //   'webinar_date' => '',
  //   'webinar_thumbnail' => '',
  // ]
];

if(isset($_GET['speaker_id'])) {
  require 'core/function.php';
  $pdo = dbConnection();
  $speaker_query = "SELECT s.*, w.* FROM speaker s 
                    JOIN webinar w ON s.speaker_id = w.speaker_id 
                    WHERE s.speaker_id = ?";
  $speaker_process = $pdo -> prepare($speaker_query);
  $speaker_process -> execute([$_GET['speaker_id']]);
  $data_speaker = $speaker_process -> fetchAll();
  
  // For User Status Subscription
  $subscription_query = "SELECT * FROM subscription WHERE speaker_id = ? AND user_id = ?";
  $subscription_process = $pdo -> prepare($subscription_query);
  $subscription_process -> execute([$_GET['speaker_id'], $_SESSION['user_id']]);
  $data_subscription = $subscription_process -> fetchAll();

  // Get Subscriber of Speaker
  $subscription_of_speaker_query = "SELECT count(*) AS total_subscriber FROM subscription WHERE speaker_id = ? AND status = ?";
  $subscription_of_speaker_process = $pdo -> prepare($subscription_of_speaker_query);
  $subscription_of_speaker_process -> execute([$_GET['speaker_id'], 1]);
  $data_subscription_of_speaker = $subscription_of_speaker_process -> fetchAll();

  if(count($data_speaker) != 0){
    $speaker_data['id'] = $data_speaker[0]['speaker_id'];
    $speaker_data['name'] = $data_speaker[0]['speaker_name'];
    $speaker_data['img'] = $data_speaker[0]['pic'];
    $speaker_data['total_webinar'] = count($data_speaker);
    
    for($i=0;$i<sizeof($data_speaker);$i++){
      $speaker_data['webinars'][$i]['webinar_id'] = $data_speaker[$i]['webinar_id'];
      $speaker_data['webinars'][$i]['webinar_title'] = $data_speaker[$i]['webinar_title'];
      $speaker_data['webinars'][$i]['webinar_link'] = $data_speaker[$i]['link'];
      $speaker_data['webinars'][$i]['webinar_views'] = $data_speaker[$i]['views'];
      $speaker_data['webinars'][$i]['webinar_date'] = $data_speaker[$i]['date'];
      $speaker_data['webinars'][$i]['webinar_thumbnail'] = $data_speaker[$i]['thumbnail'];
    }
  }

  if(count($data_subscription) != 0){
    $speaker_data['subscription_status'] = $data_subscription[0]['status'];
  }

  if(count($data_subscription_of_speaker) != 0){
    $speaker_data['total_subscriber'] = $data_subscription_of_speaker[0]['total_subscriber'];
  }
}

// die(var_dump($speaker_data));

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Kaizen</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  
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
            <img src="<?= $speaker_data['img'] ?>">
        </div>
        <div class="speaker-head">
            <div class="speaker-detail">
                <div class="speaker-name">
                    <h4><?= $speaker_data['name'] ?></h4>
                </div>
                <div class="speaker-info">
                    <span><i class="bi bi-person-fill"></i>&ensp;<?= $speaker_data['total_subscriber'] ?> Subscribers &emsp;</span>
                    <span><i class="bi bi-play-circle-fill"></i>&ensp;<?= $speaker_data['total_webinar'] ?> Webinars</span>
                </div>
              <form action="subscribe_proses.php" method="post">
                <input type="hidden" name="speaker_id" value="<?= $speaker_data['id'] ?>">
                <input type="hidden" name="status" value="<?= $speaker_data['subscription_status'] ?>">
                <?php 
                  if($speaker_data['subscription_status'] == 0) {
                ?> 
                  <button class="btn-get-started scrollto animate__animated" type="submit">Subscribe</button>
                <?php
                  } else {
                ?>
                  <button class="btn-get-started scrollto animate__animated" style='background-color: #ff6666 !important' type="submit">Unsubscribe</button>
                <?php
                  } 
                ?>
              </form>
        </div>
    </div>
  </section>
  <section id="speaker_page_bottom">
    <div class="row col-12">
    <?php 
      for($i=0; $i<sizeof($speaker_data['webinars']); $i++){
    ?>
        <div class="speaker-vid-section col-6">
            <div class="speaker-vid-thumbnail">
              <?php if($speaker_data['webinars'][$i]['webinar_date'] < date('Y-m-d')) { ?>
                <a class="portfolio-lightbox" data-gallery="myGallery" href="<?= $speaker_data['webinars'][$i]['webinar_link'] ?>">
                  <img src="<?= $speaker_data['webinars'][$i]['webinar_thumbnail'] ?>">
                </a> 
              <?php } else { ?>
                <img class="portfolio-lightbox" data-gallery="myGallery" src="<?= $speaker_data['webinars'][$i]['webinar_thumbnail'] ?>">
              <?php } ?>
            </div>
            <div class="speaker-vid-detail">
                <div class="speaker-vid-detail-left">
                    <span><?= $speaker_data['webinars'][$i]['webinar_title'] ?></span>
                </div>
                <div class="speaker-vid-detail-right">
                    <span><i class="bi bi-eye"></i>&ensp;<?= $speaker_data['webinars'][$i]['webinar_views'] ?> Views</span>
                    <?php
                      $formatted_webinar_date = new DateTime($speaker_data['webinars'][$i]['webinar_date']);
                    ?>
                    <span><i class="bi bi-calendar-event"></i>&ensp;<?= $formatted_webinar_date -> format('F d, Y'); ?></span>
                </div>
            </div>
        </div>
    <?php 
      }
    ?>
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