<?php 
$page	=	$_GET['aksi'];
?>
<div class="card">
    <div class="card-body">
    <h3>Data company</h3>
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
        <!-- <a href="index.php?page=company&aksi=tambah" type="button" class="btn" style="background-color: black; color: white;"><i class="fa fa-plus"></i> Add</a> -->
    </form>
    <br>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">NAME</th>
            <th scope="col">IMAGE</th>
            <th scope="col">ACTION</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <?php 
                $TAMPIL = "SELECT * FROM company";
                $HASIL = mysqli_query($koneksi,$TAMPIL);
                $NO = 1;
                    while ($row=mysqli_fetch_array($HASIL)) {
                $NO;
                $id     = $row['id'];
                $name     = $row['name'];
                $image    = $row['image'];                               
             ?>
              <th scope="row"><?php echo $NO; ?></th>
              <td><?php echo $name; ?></td>
              <td><?php echo $image; ?></td>
              <td>
                  <a href="index.php?page=company&aksi=edit?id=<?php echo $id; ?>" class="btn" style="background-color: #008000; color: white;"><i class="fa fa-pen-to-square"></i></a>
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
