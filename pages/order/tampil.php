<?php 
   $page = $_GET['aksi'];
    ?>
<div class="card">
    <div class="card-body">
    <h3>Data Orders</h3>
    <hr>
    <br>
    <a href="index.php?page=order&aksi=tambah" type="button" class="btn" style="background-color: black; color: white;"><i class="fa fa-plus"></i> Add</a>
    <br>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">PRODUCT</th>
            <th scope="col">QTY</th>
            <th scope="col">TOTAL</th>
            <th scope="col">ACTION</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <?php 
                $TAMPIL = "SELECT * FROM orders";
                $HASIL = mysqli_query($koneksi,$TAMPIL);
                $NO = 1;
                    while ($row=mysqli_fetch_array($HASIL)) {
                $NO;
                $id     = $row['id'];
                $product     = $row['product_id'];
                $qty     = $row['qty'];
                $price    = $row['price'];                               
                $total    = $row['total'];                                
             ?>
              <th scope="row"><?php echo $NO; ?></th>
              <td><?php echo $product; ?></td>
              <td><?php echo $qty; ?></td>
              <td><?php echo $price; ?></td>
              <td><?php echo $total; ?></td>
              <td>
                  <a href="index.php?page=order&aksi=edit&id=<?php echo $id; ?>" class="btn" style="background-color: #008000; color: white;"><i class="fa fa-pen-to-square"></i></a>
                  <a href="../pages/order/hapus.php?id=<?php echo $row['id'];?>" type="button" class="btn" style="background-color: black; color: white;"><i class="fa fa-trash"></i></a>
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