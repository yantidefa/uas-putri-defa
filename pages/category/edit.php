<?php 
$id=$_GET['id'];
?>
<?php
$EDIT = "SELECT * FROM categories WHERE id='$id'" or die("Gagal melakukan query !!!".mysqli_error($id));
    $HASILEDIT = mysqli_query($koneksi,$EDIT);
    while ($ROW=mysqli_fetch_array($HASILEDIT)) {
        
        $id           =$ROW['id'];
        $name         =$ROW['name'];
        $description  =$ROW['description'];
        $image        =$ROW['image'];
}
?>
<div class="card">
    <div class="card-body">
    <h3>Update Data Categories</h3>
    <hr>
    <br>
    <form method="POST" action="../pages/category/proses_edit.php" enctype="multipart/form-data">
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
        <label class="form-label">Image</label>
        <input type="file" class="form-control" name="image" value="<?php echo $image; ?>">
        </div>
        <button type="submit" class="btn" style="background-color: #008000; color: white;">Save</button>
        <button type="reset" class="btn btn-dark">Cancel</button>
    </form>
    </div>
</div>