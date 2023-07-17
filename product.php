<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/bde6091853.js" crossorigin="anonymous"></script>
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
<!-- nav -->
    <nav class="navbar navbar-expand-lg" style="background-color: green; padding-top: 10px; padding-bottom: 15px;">
      <div class="container">
        <a class="navbar-brand" href="#"><img src="" alt="logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav" style="padding-left: 800px;">
            <a class="text-light nav-link active" href="index.php">Home</a>
            <a class="text-light nav-link" href="product.php">Pangan</a>
            <a class="text-light nav-link" href="artikel.php">Artikel</a>
            <a class="text-light nav-link" href="about.php">About</a>
          </div>
        </div>
      </div>
    </nav>
   <!-- nav -->

   
   <div class="container" style="padding-top: 8%; padding-bottom: 8%; padding-left: 12%">
   <form>
        <div class="row">
            <div class="col-md-9">
                <div class="mb-3" style="width: 100%;">
                <input type="email" class="form-control" placeholder="Search...">
                </div>
            </div>
            <div class="col-md-3">
                <button type="submit" class="btn" style="background-color: #008000; color: white;"><i class="fa fa-magnifying-glass"></i></button>
            </div>
        </div>
    </form>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>