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
    
    if(!isset($_SESSION['loggedIn'])){
      header('Location: login.php');
    } else {
      require 'core/function.php';
      $pdo = dbConnection();
      $user_query = "SELECT * FROM user WHERE username = ?";
      
      $user_process = $pdo -> prepare($user_query);
      $user_process -> execute([$_SESSION['username']]);
      $data_user = $user_process -> fetch();
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
  <div class="profile-container">
        <div class="profile-settings">
            <div class="profile-picture">
                <img src="assets/img/user.png">
            </div>
            <div class="profile-form">
                <div class="profile-username">
                    <h4><?= $data_user['username']; ?></h4>
                </div>
                <div class="profile-date">
                  <?php
                    $formatted_date_joined = new DateTime($data_user['date_joined']);
                  ?>
                    <h5 style="color: #3ec1d5;"><?= "Since " . $formatted_date_joined -> format('F, Y'); ?></h5>
                </div>
                <form action="changepw_proses.php" method="post" class="php-email-form">
                    <p>
                        Current Password
                        <br /><input type="password" name="cpassword" class="form-control" required>
                    </p>
                    <?php
                        if(isset($_GET['error']) && $_GET['error'] == 'cpw') {
                          echo '<p style="color: red;">Current password doesn\'t match!</p>';
                        }
                    ?>
                    <p>
                        New Password
                        <br /><input type="password" name="password1" class="form-control" required>
                    </p>
                    <p>
                        Confirm New Password
                        <br /><input type="password" name="password2" class="form-control" required>
                    </p>
                    <?php
                        if(isset($_GET['error']) && $_GET['error'] == 'npw') {
                          echo '<p style="color: red;">New password doesn\'t match!</p>';
                        }
                    ?>
                    <div class="text-center">
                        <div class="col-12 mt-5">
                            <button class="col-4" type="submit">Save</button>
                            <button class="col-4" type="reset">Reset</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
  <!-- ======= Footer ======= -->
  <?php 
    include('core/footer.php');
  ?>
  <!-- End  Footer -->
</body>

</html>