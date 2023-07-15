<?php 
   $page = $_GET['aksi'];
    ?>
  <div class="card">
                  <div class="card-body">
                    <h3>Add Data Categories</h3>
                    <hr>
                    <br>
                    <form method="POST" action="../pages/category/proses_tambah.php">
                      <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" name="name">
                      </div>
                      <div class="mb-3">
                        <label class="form-label">Description</label>
                        <input type="text" class="form-control" name="description">
                      </div>
                      <div class="mb-3">
                        <label class="form-label">Image</label>
                        <input type="file" class="form-control" name="image">
                      </div>
                      <button type="submit" class="btn" style="background-color: #008000; color: white;">Save</button>
                      <button type="reset" class="btn btn-dark">Cancel</button>
                    </form>
                  </div>
                </div>