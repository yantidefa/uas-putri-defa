<?php 
   $page = $_GET['aksi'];
    ?>
<div class="card">
    <div class="card-body">
    <h3>Data Users</h3>
    <hr>
    <br>
    <a href="index.php?page=user&aksi=tambah" type="button" class="btn" style="background-color: black; color: white;"><i class="fa fa-plus"></i> Add</a>
    <br>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">NAME</th>
            <th scope="col">EMAIL</th>
            <th scope="col">ROLE</th>
            <th scope="col">ACTION</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <?php 
                $TAMPIL = "SELECT id, name, email, CASE WHEN role = '' THEN 'Admin' WHEN role != '' THEN role END AS role FROM users";
                $HASIL = mysqli_query($koneksi,$TAMPIL);
                $NO = 1;
                    while ($row=mysqli_fetch_array($HASIL)) {
                $NO;
                $id     = $row['id'];
                $name     = $row['name'];
                $email    = $row['email'];                               
                $role    = $row['role'];                               
             ?>
              <th scope="row"><?php echo $NO; ?></th>
              <td><?php echo $name; ?></td>
              <td><?php echo $email; ?></td>
              <td><?php echo $role; ?></td>
              <td>
                  <a href="index.php?page=user&aksi=edit&id=<?php echo $id; ?>" class="btn" style="background-color: #008000; color: white;"><i class="fa fa-pen-to-square"></i></a>
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