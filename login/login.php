<?php 
@session_start();
include "../config/config.php";
if (isset($_SESSION['email'])) 
{
	if($_SESSION['role'] =="customer") {header("location:../index.php");}
	elseif ($_SESSION['role'] =="shop") {header("location:../admin/index.php");}
	elseif ($_SESSION['role'] !="shop" || $_SESSION['role'] !="customer") {header("location:../admin/index.php");}
}

 ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <div class="container" style="padding-left: 27%; padding-top: 70px;">
        <div class="card" style="border: 0; width: 26rem;">
            <img src="../images/logo.png" class="card-img-top" alt="...">
            <div class="card-body">
            <form method="POST" action="cek_login.php">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" name="email">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <button type="submit" class="btn" style="background-color: #008000; color: white;">Login</button>
                    </div>
                    <div class="col-md-4">
                        <a href="../register/register.php">register here</a>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>