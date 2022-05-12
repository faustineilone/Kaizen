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

    if(isset($_SESSION['loggedIn'])){
      header('Location: profile.php');
    }
  ?> 

  <script>
    $(document).ready(function(){
      $('a').removeClass('active');
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
<div class="white-small-container">
  <div class="small-white-box">
    <div class="small-logo">
      <img src="assets/img/kaizen.png">
    </div>
    <div class="signup-login-form">
      <form action="login_proses.php" method="post" class="php-email-form">
      <p>
          Username
          <br /><input type="text" name="username" class="form-control" required>
      </p>
      <p>
          Password
          <br /><input type="password" name="password" class="form-control" required>
      </p>
      <?php
        if(isset($_GET['error'])) {
          echo '<p style="color: red;">Username and Password Don\'t Match!</p>';
        }
      ?>
      <div class="text-center">
          <button class="col-9" type="submit">Login</button>
          </div>
      </div>
      </form>
      <div class="text-center form-link">
          <span><a href="#" class="col-9">Forgot Your Password?</a></span>
      </div>
      <div class="text-center form-link">
        <span><a href="signup.php" class="col-9">Don't Have an Account?</a></span>
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