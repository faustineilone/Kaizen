<!-- ======= Header ======= -->
<?php
  require_once 'function.php';
  $pdo = dbConnection();

  $category_query = "SELECT * FROM category";
  $category_process = $pdo -> query($category_query);
  $categories = $category_process -> fetchAll();

  $pdo = null;
?>

<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex justify-content-between">

      <div class="logo mt-3">
        <a href="index.php"><img src="assets/img/kaizen.png" alt="" class="img-fluid"></a>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a id="home" class="nav-link" href="index.php">Home</a></li>
          <li><a id="subscription" class="nav-link" href="subscription.php">Subscription</a></li>
          <li class="dropdown"><a id="category" href="#">Category<i class="bi bi-chevron-down"></i></a>
            <ul>
              <?php 
                for($i=0; $i < sizeof($categories); $i++) {
                  echo '<li>
                          <a href="category.php?page=' . $categories[$i]['category_name'] . '">' . $categories[$i]['category_name'] . '</a>
                        </li>';
                }
              ?>
            </ul>
          </li>
          <li class="mt-3 ml-4">
            <div class="form-group has-search">
              <input type="text" class="form-control" placeholder="Search">
              <i class="fa fa-search form-control-feedback"></i>
            </div>
          </li>
          <li><a href="history.php"><i class="bi bi-clock text-white"></a></i></li>

          <?php 
            if(!isset($_SESSION['login'])) {
          ?>
              <li><a id="profile" href="login.php"><i class="bi bi-person text-white fa-lg"></a></i></li>
          <?php
            } else {
              die(var_dump('logged in'));
          ?>
            <li><a id="profile" href="profile.php"><i class="bi bi-person text-white fa-lg"></a></i></li>
          <?php
            }
          ?>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
    </div>
  </header><!-- End Header -->