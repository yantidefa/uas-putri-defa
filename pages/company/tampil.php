<?php 
$EDIT   ="SELECT * FROM company " or die("Gagal melakukan query !!!".mysqli_error($id));
$HASILEDIT  =   mysqli_query($koneksi, $EDIT);
while ($row =   mysqli_fetch_array($HASILEDIT)) {
$id    = $row['id'];
$name    = $row['name'];
$description    = $row['description'];
$address    = $row['address'];
$image    = $row['image'];
}
?>
<div class="card">
    <div class="card-body">
      <h3>Update Data Company</h3>
      <hr>
      <br>
      <form method="POST" action="../pages/company/proses_edit.php">
        <div class="mb-3">
          <label class="form-label">Name</label>
          <input type="text" class="form-control" name="name" value="<?php echo $name; ?>">
          <input type="hidden" class="form-control" name="id" value="<?php echo $id; ?>">
        </div>
        <div class="mb-3">
          <label class="form-label">Description</label>
          <input type="text" class="form-control" name="description" value="<?php echo $description; ?>">
        </div>
        <div class="mb-3">
          <label class="form-label">Address</label>
          <input type="text" class="form-control" name="address" value="<?php echo $address; ?>">
        </div>
        <div class="mb-3">
          <label class="form-label">Image</label>
          <input type="file" class="form-control" name="image" value="<?php echo $image; ?>">
        </div>
        <button type="submit" class="btn" style="background-color: #008000; color: white;">Save</button>
        <button type="reset" class="btn btn-dark">Cancel</button>
      </form>
    </div>
  </div>