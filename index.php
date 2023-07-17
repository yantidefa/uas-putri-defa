<?php include ("config/config.php");?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Delight</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        .product:hover {
            box-shadow: 2px 11px 16px rgba(0, 0, 0, 0.8);
        }
        .gap {
          gap: 10%;
        }
        ul{
          list-style: none;
          display: flex;
          gap: 10px;
        }
    </style>
</head>
  <body>
    <!-- <nav class="navbar" style="background-color: green; padding-bottom: 0%; padding-left: 20px; padding-right: 60px;">
      <div class="container-fluid">
        <ul class="text-light" style="font-size: 12px;">
          <li>080808080</li>
          <li>080808080</li>
          <li>080808080</li>
        </ul>
        <ul class="text-light" style="font-size: 12px;">
            <li>080808080</li>
            <li>080808080</li>
            <li>080808080</li>
        </ul>
      </div>
    </nav> -->
    <!--------------------->
    <nav class="navbar navbar-expand-lg" style="background-color: #008000;">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <a class="navbar-brand" href="#"><img src="images/logo.png" style="width: 100px;" alt="logo"></a>
          </div>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="col-md-5">
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav" style="padding-left: 150px;">
              <a class="text-light nav-link active" href="index.php">Home</a>
              <a class="text-light nav-link" href="product.php">Pangan</a>
              <a class="text-light nav-link" href="artikel.php">Artikel</a>
              <a class="text-light nav-link" href="about.php">About</a>
            </div>
          </div>
        </div>
        <div class="col-md-3" style="padding-left: 100px;">
        <a href="login/login.php" class="btn text-light">Login</a>
        <a href="register/register.php" type="submit" class="btn" style="background-color: white; color: #008000;">
          Register
        </a>
        </div>
      </div>
    </nav>
    <!--------------------->
    <div>
      <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="images/banner-1.png" class="d-block" style="width: 100%;" alt="...">
          </div>
          <div class="carousel-item">
            <img src="images/banner-2.png" class="d-block" style="width: 100%;" alt="...">
          </div>
        </div>
      </div>
    </div>
    <!-- ---------------------- -->
    <!-- category -->
    <div style="height: 400px; background-color: #008000;">
      <div class="container">
      <div class="container text-center" style="padding-top: 8%;">
        <h3 class="text-light">Category</h3>
      </div>
        <div class="row" style="padding-left: 9%; padding-top: 3%;">
          <div class="col-md-3">
            <img src="images/category/daging.png" width="60%" alt="">
          </div>
          <div class="col-md-3">
            <img src="images/category/sayur.png" width="60%" alt="">
          </div>
          <div class="col-md-3">
            <img src="images/category/bibit.png" width="60%" alt="">
          </div>
          <div class="col-md-3">
            <img src="images/category/buah.png" width="60%" alt="">
          </div>
        </div>
      </div>
    </div>
    <!-- category -->
    <!-- <div class="container pt-4" style="padding-left: 17%;">
      <div class="row d-flex gap">
        <div class="col-md-4">
          <img src="" alt="">
        </div>
      </div>
    </div> -->
  <!--------------------->
  <div class="container text-center" style="padding-top: 8%; padding-bottom: 8%;">
  <h3>Recomendation</h3>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo qui nisi quo voluptatum vero recusandae praesentium non harum similique nesciunt nam saepe illum provident optio perferendis facere, iure quibusdam eos.</p>
  </div>
  <!------------------------------>
  <div class="container">
    <div class="row d-flex gap-0">
      <div class="col-md-3 pb-4">
        <a href="" style="text-decoration: none; color: white;">
          <div class="card product rounded-0" style="width: 16rem; border: 0;">
              <img src="images/products/product-01.png" alt="product">
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
          </div>
      </a>
      </div>
      <div class="col-md-3">
        <a href="" style="text-decoration: none; color: white;">
          <div class="card product rounded-0" style="width: 16rem; border: 0;">
              <img src="images/products/product-01.png" alt="product">
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
          </div>
      </a>
      </div>
      <div class="col-md-3">
        <a href="" style="text-decoration: none; color: white;">
          <div class="card product rounded-0" style="width: 16rem; border: 0;">
              <img src="images/products/product-01.png" alt="product">
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
          </div>
      </a>
      </div>
      <div class="col-md-3">
        <a href="" style="text-decoration: none; color: white;">
          <div class="card product rounded-0" style="width: 16rem; border: 0;">
              <img src="images/products/product-01.png" alt="product">
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
          </div>
      </a>
      </div>
      <div class="col-md-3">
        <a href="" style="text-decoration: none; color: white;">
          <div class="card product rounded-0" style="width: 16rem; border: 0;">
              <img src="images/products/product-01.png" alt="product">
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
          </div>
      </a>
      </div>
      <div class="col-md-3">
        <a href="" style="text-decoration: none; color: white;">
          <div class="card product rounded-0" style="width: 16rem; border: 0;">
              <img src="images/products/product-01.png" alt="product">
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
          </div>
      </a>
      </div>
      <div class="col-md-3">
        <a href="" style="text-decoration: none; color: white;">
          <div class="card product rounded-0" style="width: 16rem; border: 0;">
              <img src="images/products/product-01.png" alt="product">
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
          </div>
      </a>
      </div>
      <div class="col-md-3">
        <a href="" style="text-decoration: none; color: white;">
          <div class="card product rounded-0" style="width: 16rem; border: 0;">
              <img src="images/products/product-01.png" alt="product">
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
          </div>
      </a>
      </div>
    </div>
</div>
   <!--------------------->
   <div class="container text-center" style="padding-top: 8%; padding-bottom: 8%;">
    <h3>Article Terbaru</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo qui nisi quo voluptatum vero recusandae praesentium non harum similique nesciunt nam saepe illum provident optio perferendis facere, iure quibusdam eos.</p>
    </div>
    <!------------------------------>
    <div class="container">
      <div class="row d-flex gap-4 pb-4">
        <img src="images/products/product-01.png" style="width: 300px; height: 150px; object-fit: cover;" alt="article">
        <div class="col-md-8">
          <p>2 Desember 2023</p>
          <p class="fw-bold h5">Lorem, ipsum dolor sit amet consectetur adipisicing elit</p>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sed unde odio quis vero consequuntur corrupti quas, tempore, magnam voluptate neque hic explicabo, a cumque obcaecati maxime nesciunt libero animi natus?</p>
        </div>
      </div>
      <div class="row d-flex gap-4 pb-4">
        <img src="images/products/product-01.png" style="width: 300px; height: 150px; object-fit: cover;" alt="article">
        <div class="col-md-8">
          <p>2 Desember 2023</p>
          <p class="fw-bold h5">Lorem, ipsum dolor sit amet consectetur adipisicing elit</p>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sed unde odio quis vero consequuntur corrupti quas, tempore, magnam voluptate neque hic explicabo, a cumque obcaecati maxime nesciunt libero animi natus?</p>
        </div>
      </div>
      <div class="row d-flex gap-4 pb-4">
        <img src="images/products/product-01.png" style="width: 300px; height: 150px; object-fit: cover;" alt="article">
        <div class="col-md-8">
          <p>2 Desember 2023</p>
          <p class="fw-bold h5">Lorem, ipsum dolor sit amet consectetur adipisicing elit</p>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sed unde odio quis vero consequuntur corrupti quas, tempore, magnam voluptate neque hic explicabo, a cumque obcaecati maxime nesciunt libero animi natus?</p>
        </div>
      </div>
    </div>
    <footer>
      <div class="text-light" style="height: 350px; background-color: #008000;">
       <div class="container">
         <div class="row">
           <div class="col-md-4" style="padding-top: 40px;">
             <img src="images/logo.png" width="50%" alt="" style="padding-bottom: 20px;">
             <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae earum corporis voluptate beatae totam quidem. Beatae voluptate, nostrum quos ullam error temporibus perspiciatis in molestiae optio perferendis nulla, iusto obcaecati?</p>
           </div>
           <div class="col-md-4 text-light" style="padding-top: 40px; padding-left: 15%;">
              <h3>Menu</h3><br>
                <a href="" style="text-decoration: none;" class="text-light">Home</a><br>
                <a href="" style="text-decoration: none;" class="text-light">Pangan</a><br>
                <a href="" style="text-decoration: none;" class="text-light">Article</a><br>
                <a href="" style="text-decoration: none;" class="text-light">About</a>
           </div>
           <div class="col-md-4 text-light" style="padding-top: 40px; padding-left: 15%;">
              <h3>Contact</h3><br>
              <p>email@gmail.com</p>
              <p>080000000000</p>
           </div>
         </div>
       </div>
      </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>