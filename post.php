<div class="container">
    <div class="row d-flex gap-0">
<?php 
$batas = 8;
$data_product = mysqli_query($koneksi,"SELECT * FROM products LIMIT 0, $batas");
while($d = mysqli_fetch_array($data_product)){
    $ID = $d['id'];
    $desc    =substr($d['description'], 0, 86);
    ?>
      <div class="col-md-3 pb-4">
        <a href="" style="text-decoration: none; color: white;">
          <div class="card product rounded-0" style="width: 16rem; border: 0;">
              <img src="images/products/product-01.png" alt="product">
              <div class="card-body">
                <p class="card-text"><?php echo $desc; ?></p>
              </div>
          </div>
        </a>
      </div>
      <?php
   }
   ?>
    </div>
  </div>

  <div class="container text-center" style="padding-top: 8%; padding-bottom: 8%;">
    <h3>Article Terbaru</h3>
    <p>Jelajahi dunia kuliner dan pertanian terkini dengan artikel-artikel menarik kami. Temukan wawasan baru tentang ragam Pangan, tips bercocok tanam, resep lezat, dan berita terkini seputar produk segar dan sehat. Dapatkan informasi berharga untuk mengoptimalkan pengalaman berbelanja Anda di Delight. Mari kita bersama-sama mengeksplorasi dunia makanan dan pertanian melalui panduan-panduan bermanfaat yang kami sajikan. Selamat membaca dan selamat menikmati perjalanan kuliner dan pertanian yang penuh inspirasi!</p>
    </div>
    <!------------------------------>
    <div class="container" style="padding-bottom: 8%;">
        <?php 
        $batas = 4;
        $data_product = mysqli_query($koneksi,"SELECT * FROM article LIMIT 0, $batas");
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
          <p class="fw-bold h5"><?php echo $title; ?></p>
          <p><?php echo $short_description; ?></p>
        </div>
      </div>
        <?php
        }
        ?>
    </div>

