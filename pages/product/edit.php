<?php 
   $page = $_GET['aksi'];
    ?>
  <div class="card">
    <div class="card-body">
      <h3>Update Data Product</h3>
      <hr>
      <br>
        <?php 
        $EDIT   ="SELECT * FROM products " or die("Gagal melakukan query !!!".mysqli_error($id));
        $HASILEDIT  =   mysqli_query($koneksi, $EDIT);
        while ($row =   mysqli_fetch_array($HASILEDIT)) {
        $id    = $row['id'];
        $name    = $row['name'];
        $description    = $row['description'];
        $image    = $row['image'];
        $price    = $row['price'];
        $category_id    = $row['category_id'];
        }
        ?>
      <form method="POST" action="../pages/product/proses_edit.php" enctype="multipart/form-data">
        <div class="mb-3">
          <label class="form-label">Name</label>
          <input type="text" class="form-control" name="name" value="<?php echo $name; ?>">
          <input type="hidden" class="form-control" name="id" value="<?php echo $id; ?>">
        </div>
        <div class="mb-3">
          <label class="form-label">Category</label>
          <select class="form-control" name="category_id" value="<?php echo $category_id; ?>">
                  <option>------ Pilih Kategori ------</option>
                  <?php 
                  $sql_pen = mysqli_query($koneksi, "SELECT * FROM categories") or die(mysqli_error($koneksi));
                  while ($data_pen = mysqli_fetch_array($sql_pen)) {
                    echo '<option value="'.$data_pen['id'].'">'.$data_pen['name'].'</option>';
                  }
                   ?>
                 </select>
        </div>
        <div class="mb-3">
          <label class="form-label">Description</label>
          <input type="text" class="form-control" name="description" value="<?php echo $description; ?>">
        </div>
        <div class="mb-3">
          <label class="form-label">Price</label>
          <input type="number" class="form-control" name="price" value="<?php echo $price; ?>">
        </div>
        <div class="mb-3">
          <label class="form-label">Image</label>
          <input type="file" class="form-control" name="file" value="<?php echo $image; ?>">
        </div>
        <div class="mb-3">
          <input type="hidden" class="form-control" name="updated_by_name">
          <input type="hidden" class="form-control" name="updated_by_role">
          <input type="hidden" class="form-control" name="updated_at">
        </div>
        <button type="submit" class="btn" style="background-color: #008000; color: white;">Save</button>
        <button type="reset" class="btn btn-dark">Reset</button>
      </form>
    </div>
  </div>