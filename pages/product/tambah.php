<?php 
   $page = $_GET['aksi'];
    ?>
  <div class="card">
    <div class="card-body">
      <h3>Add Data Product</h3>
      <hr>
      <br>
      <form method="POST" action="../pages/product/proses_tambah.php" enctype="multipart/form-data">
        <div class="mb-3">
          <label class="form-label">Name</label>
          <input type="text" class="form-control" name="name">
        </div>
        <div class="mb-3">
          <label class="form-label">Category</label>
          <select class="form-control" name="category_id">
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
          <input type="text" class="form-control" name="description">
        </div>
        <div class="mb-3">
          <label class="form-label">Price</label>
          <input type="number" class="form-control" name="price">
        </div>
        <div class="mb-3">
          <label class="form-label">Image</label>
          <input type="file" class="form-control" name="file">
        </div>
        <div class="mb-3">
          <input type="hidden" class="form-control" name="created_by_name" value="<?php echo $_SESSION['name'] ?>">
          <input type="hidden" class="form-control" name="created_by_role" value="<?php echo $_SESSION['role'] ?>">
        </div>
        <button type="submit" class="btn" style="background-color: #008000; color: white;">Save</button>
        <button type="reset" class="btn btn-dark">Reset</button>
      </form>
    </div>
  </div>