<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
   tinymce.init({
   selector: '#custom',
   height: 400,
   forced_root_block : "",
   force_br_newlines : true,
   force_p_newlines : false,
   plugins: [
     'autolink lists link image charmap print preview hr anchor pagebreak',
     'searchreplace wordcount visualblocks visualchars code fullscreen',
     'insertdatetime media nonbreaking save table contextmenu directionality',
     'emoticons template paste textcolor colorpicker textpattern imagetools codesample toc'
   ],
   toolbar1: 'undo redo | insert | styleselect table | bold italic | hr alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media ',
   toolbar2: 'print preview | forecolor backcolor emoticons | fontselect | fontsizeselect | codesample code fullscreen',
   templates: [
     { title: 'Test template 1', content: '' },
     { title: 'Test template 2', content: '' }
   ],
   content_css: [
     '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
     '//www.tinymce.com/css/codepen.min.css'
   ],
   });
</script>
<?php 
$EDIT   ="SELECT * FROM company " or die("Gagal melakukan query !!!".mysqli_error($id));
$HASILEDIT  =   mysqli_query($koneksi, $EDIT);
while ($row =   mysqli_fetch_array($HASILEDIT)) {
$id    = $row['id'];
$name    = $row['name'];
$description    = $row['description'];
$address    = $row['address'];
$image    = $row['image'];
$email    = $row['email'];
$contact    = $row['contact'];
}
?>
<div class="card">
    <div class="card-body">
      <h3>Update Data Company</h3>
      <hr>
      <br>
      <form method="POST" action="../pages/company/proses_edit.php" enctype="multipart/form-data">
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
          <label class="form-label">Contact</label>
          <input type="number" class="form-control" name="contact" value="<?php echo $contact; ?>">
        </div>
        <div class="mb-3">
          <label class="form-label">Description</label>
          <textarea id="custom" name="description"><?php echo $description; ?></textarea>
          <!-- <input type="text" class="form-control" name="description" value="<?php echo $description; ?>"> -->
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