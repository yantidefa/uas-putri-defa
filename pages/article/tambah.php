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
   $page = $_GET['aksi'];
    ?>
  <div class="card">
    <div class="card-body">
      <h3>Add Data Article</h3>
      <hr>
      <br>
      <form method="POST" action="../pages/article/proses_tambah.php" enctype="multipart/form-data">
        <div class="mb-3">
          <label class="form-label">Title</label>
          <input type="text" class="form-control" name="title">
        </div>
        <div class="mb-3">
          <label class="form-label">Short Description</label>
          <input type="text" class="form-control" name="short_description">
        </div>
        <div class="mb-3">
          <label class="form-label">Description</label>
          <textarea id="custom" name="description"></textarea>
        </div>
        <div class="mb-3">
          <label class="form-label">Image</label>
          <input type="file" class="form-control" name="file">
        </div>
        <div class="mb-3">
          <label class="form-label">Caption</label>
          <input type="text" class="form-control" name="caption">
          <input type="hidden" class="form-control" name="created_by_name" value="<?php echo $_SESSION['name'] ?>">
        </div>
        <button type="submit" class="btn" style="background-color: #008000; color: white;">Save</button>
        <button type="reset" class="btn btn-dark">Cancel</button>
      </form>
    </div>
  </div>