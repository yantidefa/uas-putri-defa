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

