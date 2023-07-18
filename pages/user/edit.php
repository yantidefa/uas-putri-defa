<?php 
   $page = $_GET['aksi'];
    ?>
  <div class="card">
    <div class="card-body">
      <h3>Update Data User</h3>
      <hr>
      <br>
      <form method="POST" action="../pages/user/proses_edit.php" enctype="multipart/form-data">
        <div class="mb-3">
          <label class="form-label">Name</label>
          <input type="text" class="form-control" name="name">
        </div>
        <div class="mb-3">
          <label class="form-label">Email</label>
          <input type="email" class="form-control" name="email">
        </div>
        <div class="mb-3">
          <label class="form-label">Role</label>
          <select name="role" id="" class="form-control">
            <option value="">-------- pilih --------</option>
            <option value="customer">Customer</option>
          </select>
        </div>
        <div class="mb-3">
          <label class="form-label">Password</label>
          <input type="password" class="form-control" name="password">
        </div>
        <div class="mb-3">
          <label class="form-label">No Telp</label>
          <input type="number" class="form-control" name="no_telp">
        </div>
        <div class="mb-3">
          <label class="form-label">Gender</label>
          <select name="gender" id="" class="form-control">
            <option value="">-------- pilih --------</option>
            <option value="perempuan">Perempuan</option>
            <option value="laki-laki">Laki-laki</option>
          </select>
        </div>
        <div class="mb-3">
          <label class="form-label">Address</label>
          <input type="text" class="form-control" name="address">
        </div>
        <div class="mb-3">
          <label class="form-label">Image</label>
          <input type="file" class="form-control" name="file">
        </div>
        <button type="submit" class="btn" style="background-color: #008000; color: white;">Save</button>
        <button type="reset" class="btn btn-dark">Cancel</button>
      </form>
    </div>
  </div>