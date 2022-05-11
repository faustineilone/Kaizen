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
      $("#profile").addClass('active');
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
  <section id="id">
    
  </section>
  <!-- End Content Section -->
  <div class="profile-container">
        <div class="profile-settings">
            <div class="profile-picture">
                <img src="assets/img/user.png">
            </div>
            <div class="profile-form">
                <form action="profile_proses.php" method="post" class="php-email-form">
                    <input type="hidden" name="user_id" >
                    <p>
                        Username
                        <br /><input type="text" name="username" class="form-control" required>
                    </p>
                    <p>
                        E-mail
                        <br /><input type="email" name="email" class="form-control" required>
                    </p>
                    <p>
                        Phone Number
                        <br /><input type="tel" name="phone_no" class="form-control" required>
                    </p>
                    <p>
                        Password
                        <br /><input type="password" name="password" class="form-control" required>
                    </p>
                    <input type="hidden" name="date_joined">
                    <div class="text-center">
                        <div class="col-12">
                            <button class="col-3" type="submit">Save</button>
                            <button class="col-3" type="reset">Cancel</button>
                            <button id="logout" class="col-6">Log Out</button>
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