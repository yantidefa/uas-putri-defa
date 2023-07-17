<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
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
    <!--------------------->
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
            <a class="text-light nav-link" href="#">About</a>
          </div>
        </div>
      </div>
    </nav>
    <!--------------------->

   <!--------------------->
   <div style="padding-bottom: 8%;">
    <img src="images/banner-02.png" alt="">
    </div>
    <!------------------------------>
    <div class="container">
      <h3>NAMA COMPANY</h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio ut dolor laboriosam minima qui rem autem totam voluptatem et, dicta fugit magni, aperiam tempore laborum? Officia molestias eos rerum culpa.</p>
      <p>alamat company</p>
      <p>kontak</p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>