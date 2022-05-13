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
      <form action="signup_proses.php" method="post" class="php-email-form">
      <input type="hidden" name="user_id">
      <p>
          E-mail
          <br /><input type="email" name="email" class="form-control" required>
      </p>
      <p>
          Username
          <br /><input type="text" name="username" class="form-control" required>
      </p>
      <?php
        if(isset($_GET['error_signup'])) {
          echo '<p style="color: red;">E-mail address or username is already in use!</p>';
        }
      ?>
      <p>
          Password
          <br /><input type="password" name="password" class="form-control" required>
      </p>
      <input type="hidden" name="date_joined">
      <div class="text-center">
          <button class="col-9" type="submit">Sign Up</button>
          </div>
      </div>
      <div class="text-center form-link">
          <span><a href="login.php" class="col-9">Already have an account?</a></span>
      </div>
      </form>
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