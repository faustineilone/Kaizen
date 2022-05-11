<?php
require 'core/function.php';
$pdo = dbConnection();
$sql = "SELECT * FROM webinar WHERE category_id=?";
$hasil = $pdo -> query($sql);

if($_GET['page'] == 'Motivation'){

}else if ($_GET['page'] == 'Education'){

}else if ($_GET['page'] == 'Financial'){

}else if ($_GET['page'] == 'Business'){

}else if ($_GET['page'] == 'Health'){

}else if ($_GET['page'] == 'Tips'){

}else if ($_GET['page'] == 'History'){

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


  
  <!-- ======= Footer ======= -->
  <?php 
    include('core/footer.php');
  ?>
  <!-- End  Footer -->
</body>
  
</html>