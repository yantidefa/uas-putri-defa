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

   <!--------------------->
   <div class="container text-center" style="padding-top: 8%; padding-bottom: 8%;">
    <h3>Article Terbaru</h3>
    <p>Jelajahi dunia kuliner dan pertanian terkini dengan artikel-artikel menarik kami. Temukan wawasan baru tentang ragam Pangan, tips bercocok tanam, resep lezat, dan berita terkini seputar produk segar dan sehat. Dapatkan informasi berharga untuk mengoptimalkan pengalaman berbelanja Anda di Delight. Mari kita bersama-sama mengeksplorasi dunia makanan dan pertanian melalui panduan-panduan bermanfaat yang kami sajikan. Selamat membaca dan selamat menikmati perjalanan kuliner dan pertanian yang penuh inspirasi!</p>
    </div>
    <!------------------------------>
    <div class="container" style="padding-bottom: 8%;">
    <?php 
        include ("config/config.php");
        $batas = 10;
        $halaman = isset($_GET['halaman'])?(int)$_GET['halaman'] : 1;
        $halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;  
        
        $previous = $halaman - 1;
        $next = $halaman + 1;
        
        $data = mysqli_query($koneksi,"SELECT * FROM products");
        $jumlah_data = mysqli_num_rows($data);
        $total_halaman = ceil($jumlah_data / $batas);

        $data_product = mysqli_query($koneksi,"SELECT * FROM article LIMIT 0, $batas");
        $nomor = $halaman_awal+1;
        while($d = mysqli_fetch_array($data_product)){
        $ID = $d['id'];
        $title    = $d['title'];
        $created_at    = $d['created_at'];
        $short_description    = $d['short_description'];
        ?>
      <div class="row d-flex gap-4 pb-4">
        <img src="images/article/<?php echo $d ['image']; ?>" style="width: 300px; height: 150px; object-fit: cover;" alt="article">
        <div class="col-md-8">
          <p><?php echo $created_at; ?></p>
          <p class="fw-bold h5"><a style="text-decoration: none; color: black;" href="detail_article.php?id=<?php echo($ID) ?>/<?php echo $d['slug']; ?>"><?php echo $title; ?></a></p>
          <p><?php echo $short_description; ?></p>
        </div>
      </div>
        <?php
        }
        ?>
        <nav>
   <ul class="pagination justify-content-center">
      <li class="page-item">
         <a class="page-link" <?php if($halaman > 1){ echo "href='?halaman=$previous'"; } ?>>Previous</a>
      </li>
      <?php 
         for($x=1;$x<=$total_halaman;$x++){
           ?> 
      <li class="page-item"><a class="page-link" href="?halaman=<?php echo $x ?>"><?php echo $x; ?></a></li>
      <?php
         }
         ?>        
      <li class="page-item">
         <a  class="page-link" <?php if($halaman < $total_halaman) { echo "href='?halaman=$next'"; } ?>>Next</a>
      </li>
   </ul>
</nav>
    </div>
    <footer>
      <div class="text-light" style="height: 350px; background-color: #008000;">
       <div class="container">
         <div class="row">
           <div class="col-md-4" style="padding-top: 40px;">
             <img src="images/logo.png" width="50%" alt="" style="padding-bottom: 20px;">
             <p>destinasi belanja daring yang menyediakan produk segar dan berkualitas tinggi untuk memenuhi kebutuhan kuliner dan pertanian Anda.</p>
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