<?php 
   $page = $_GET['aksi'];
    ?>
<div class="card">
    <div class="card-body">
    <h3>Data Article</h3>
    <hr>
    <br>
    <a href="index.php?page=article&aksi=tambah" type="button" class="btn" style="background-color: black; color: white;"><i class="fa fa-plus"></i> Add</a>
    <br>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">TITLE</th>
            <th scope="col">VISIT</th>
            <th scope="col">ACTION</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <?php 
                $TAMPIL = "SELECT * FROM article";
                $HASIL = mysqli_query($koneksi,$TAMPIL);
                $NO = 1;
                    while ($row=mysqli_fetch_array($HASIL)) {
                $NO;
                $id     = $row['id'];
                $title     = $row['title'];
                $visit    = $row['visit'];                               
             ?>
              <th scope="row"><?php echo $NO; ?></th>
              <td><?php echo $title; ?></td>
              <td><?php echo $visit; ?></td>
              <td>
                  <a href="index.php?page=article&aksi=edit&id=<?php echo $id; ?>" class="btn" style="background-color: #008000; color: white;"><i class="fa fa-pen-to-square"></i></a>
                  <a href="../pages/article/hapus.php?id=<?php echo $row['id'];?>" type="button" class="btn" style="background-color: black; color: white;"><i class="fa fa-trash"></i></a>
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