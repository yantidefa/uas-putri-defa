<?php 
   $page = $_GET['aksi'];
    ?>
  <div class="card">
    <div class="card-body">
      <h3>Update Data User</h3>
      <hr>
      <br>
      <?php 
        $id=$_GET['id'];
        $EDIT   ="SELECT * FROM users WHERE id = '$id'" or die("Gagal melakukan query !!!".mysqli_error($id));
        $HASILEDIT  =   mysqli_query($koneksi, $EDIT);
        while ($row =   mysqli_fetch_array($HASILEDIT)) {
        $id    = $row['id'];
        $name    = $row['name'];
        $email    = $row['email'];
        $gender    = $row['gender'];
        $password    = $row['password'];
        $role    = $row['role'];
        $no_telp    = $row['no_telp'];
        $address    = $row['address'];
        $image    = $row['image'];
        }
        ?>
      <form method="POST" action="../pages/user/proses_edit.php" enctype="multipart/form-data">
        <div class="mb-3">
          <label class="form-label">Name</label>
          <input type="text" class="form-control" name="name" value="<?php echo $name; ?>">
          <input type="hidden" class="form-control" name="id" value="<?php echo $id; ?>">
        </div>
        <div class="mb-3">
          <label class="form-label">Email</label>
          <input type="email" class="form-control" name="email" value="<?php echo $email; ?>">
        </div>
        <div class="mb-3">
          <label class="form-label">Role</label>
          <select name="role" id="" class="form-control" value="<?php echo $role; ?>">
            <option value="">-------- pilih --------</option>
            <option value="customer">Customer</option>
          </select>
        </div>
        <div class="mb-3">
          <label class="form-label">Password</label>
          <input type="password" class="form-control" name="password" value="<?php echo $password; ?>">
        </div>
        <div class="mb-3">
          <label class="form-label">No Telp</label>
          <input type="number" class="form-control" name="no_telp" value="<?php echo $no_telp; ?>">
        </div>
        <div class="mb-3">
          <label class="form-label">Gender</label>
          <select name="gender" id="" class="form-control" value="<?php echo $gender; ?>">
            <option value="">-------- pilih --------</option>
            <option value="perempuan">Perempuan</option>
            <option value="laki-laki">Laki-laki</option>
          </select>
        </div>
        <div class="mb-3">
          <label class="form-label">Address</label>
          <input type="text" class="form-control" name="address" value="<?php echo $address; ?>">
        </div>
        <div class="mb-3">
          <label class="form-label">Image</label>
          <input type="file" class="form-control" name="file" value="<?php echo $image; ?>">
        </div>
        <button type="submit" class="btn" style="background-color: #008000; color: white;">Save</button>
        <button type="reset" class="btn btn-dark">Cancel</button>
      </form>
    </div>
  </div>