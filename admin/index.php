<?php 
   @session_start();
   include "../config/config.php";
   
   $email=$_SESSION['email'];
   $QUERY="SELECT * FROM users WHERE email='$email'";
   $result=mysqli_query($koneksi,$QUERY);

    if (mysqli_num_rows($result)) {
      $data_user=mysqli_fetch_array($result);
      $_SESSION['id']=$data_user['id'];
      $_SESSION['name']=$data_user['name'];
      $_SESSION['image']=$data_user['image'];
      $_SESSION['email']=$data_user['email'];
   }
   ?>
<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Bootstrap demo</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
      <script src="https://kit.fontawesome.com/bde6091853.js" crossorigin="anonymous"></script>
   </head>
   <body style="width: 1365px;
   min-height: 200px;">
      <!-- nav -->
      <nav class="navbar navbar-expand-lg" style="background-color: black; width: 1366px;">
        <div class="container">
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav" style="padding-left: 100%;">
              <a class="text-light nav-link active" href="../login/logout.php">LOGOUT</a>
            </div>
          </div>
        </div>
      </nav>
      <!-- nav -->

          <!-- sidebar -->
          <div class="p-3" style="width: 250px; height: 540px; background-color: #008000;">
            <ul class="nav nav-pills flex-column mb-auto">
              <?php $page = $_GET['page']; ?>
              <!-- <li>
                  <a href="?page=category" class="nav-link" style="color: white; text-decoration:none;">
                  <i class="fa fa-bag-shopping"></i>
                    <span style="padding-left: 20px;">
                      Home
                    </span>
                  </a>
              </li> -->
              <li <?php if ($page) ?>>
                  <a href="?page" class="nav-link" style="color: white; text-decoration:none;">
                  <i class="fa fa-chart-line"></i>
                    <span style="padding-left: 20px;">
                      Dashboard
                    </span>
                    <hr>
                  </a>
              </li>
              <li <?php if ($page == "category") ?>>
                  <a href="?page=category&aksi" class="nav-link" style="color: white; text-decoration:none;">
                  <i class="fa fa-bag-shopping"></i>
                    <span style="padding-left: 20px;">
                      Category
                    </span>
                    <hr>
                  </a>
              </li>
              <li <?php if ($page == "order") ?>>
                  <a href="?page=order&aksi" class="nav-link" style="color: white; text-decoration:none;">
                  <i class="fa fa-bag-shopping"></i>
                    <span style="padding-left: 20px;">
                      Orders
                    </span>
                    <hr>
                  </a>
              </li>
              <li <?php if ($page == "product") ?>>
                  <a href="?page=product&aksi" class="nav-link" style="color: white; text-decoration:none;">
                    <i class="fa fa-box"></i>
                      <span style="padding-left: 20px;">
                        Products
                      </span>
                      <hr>
                  </a>
              </li>
              <li <?php if ($page == "user") ?>>
                  <a href="?page=user&aksi" class="nav-link" style="color: white; text-decoration:none;">
                  <i class="fa fa-users"></i>
                    <span style="padding-left: 20px;">
                    Users
                    </span>
                    <hr>
                  </a>
              </li>
              <li <?php if ($page == "article") ?>>
                  <a href="?page=article&aksi" class="nav-link" style="color: white; text-decoration:none;">
                  <i class="fa fa-bag-shopping"></i>
                    <span style="padding-left: 20px;">
                      Article
                    </span>
                    <hr>
                  </a>
              </li>
              <li <?php if ($page == "company") ?>>
                  <a href="?page=company" class="nav-link" style="color: white; text-decoration:none;">
                  <i class="fa fa-bag-shopping"></i>
                    <span style="padding-left: 20px;">
                      Company
                    </span>
                  </a>
              </li>
            </ul>
          </div>
        <!-- sidebar -->

        <!-- content -->
            <div class="container" style="padding-left: 15%; margin-top: -35%;">
            <?php  
              include "../config/menu.php";
            ?>
            </div>
        <!-- content -->
    
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
   </body>
</html>