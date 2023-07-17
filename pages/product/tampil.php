<?php 
   $page = $_GET['aksi'];
    ?>
<div class="card">
    <div class="card-body">
    <h3>Data Users</h3>
    <hr>
    <br>
    <form>
        <div class="row">
            <div class="col-md-9">
                <div class="mb-3" style="width: 100%;">
                <input type="email" class="form-control" placeholder="Search...">
                </div>
            </div>
            <div class="col-md-3">
                <button type="submit" class="btn" style="background-color: #008000; color: white;"><i class="fa fa-magnifying-glass"></i></button>
            </div>
        </div>
        <a href="index.php?page=category&aksi=tambah" type="button" class="btn" style="background-color: black; color: white;"><i class="fa fa-plus"></i> Add</a>
    </form>
    <br>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">CATEGORY</th>
            <th scope="col">NAME</th>
            <th scope="col">PRICE</th>
            <th scope="col">USER</th>
            <th scope="col">ACTION</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <?php 
                $TAMPIL = "SELECT * FROM products";
                $HASIL = mysqli_query($koneksi,$TAMPIL);
                $NO = 1;
                    while ($row=mysqli_fetch_array($HASIL)) {
                $NO;
                $id     = $row['id'];
                $category_id     = $row['category_id'];
                $name     = $row['name'];
                $price    = $row['price'];                               
                $nameby    = $row['created_by_name'];                               
                $role    = $row['created_by_role'];                            
             ?>
              <th scope="row"><?php echo $NO; ?></th>
              <td><?php echo $category_id; ?></td>
              <td><?php echo $name; ?></td>
              <td><?php echo $price; ?></td>
              <td><?php echo $nameby; ?></td>
              <td><?php echo $role; ?></td>
              <td>
                  <a href="index.php?page=category&aksi=edit&id=<?php echo $id; ?>" class="btn" style="background-color: #008000; color: white;"><i class="fa fa-pen-to-square"></i></a>
                  <a href="../pages/user/hapus.php?id=<?php echo $row['id'];?>" type="button" class="btn" style="background-color: black; color: white;"><i class="fa fa-trash"></i></a>
              </td>
            </tr>
            <?php 
                  $NO++;
                  }
                   ?>
        </tbody>
        </table>
    </div>
</div>