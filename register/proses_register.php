<?php 
ob_start();
include ("../config/config.php");
$NO;
$name       = $_POST['name'];
$email      = $_POST['email'];
$password   = md5($password);
$gender     = $_POST['gender'];
$role       = $_POST['role'];    

if ($name      == "" || 
    $email     == "" ||    
    $password  == "" ||      
    $gender    == "" ||     
    $role      == "" ) 
{
	?>
<div class="col-sm-12">
	<div class="alert alert-block alert-danger">
		<button type="button" class="close" data-dismiss="alert">
			<i class="icon-remove"></i>
		</button>

		<i class="icon-warning-sign red"></i>
		Pastikan Semua Form Terisi !!!	
	</div>
</div>
<?php
}
else {
	$QUERY = mysqli_query($koneksi, "INSERT INTO `users` SET 
			name='$name',
			email='$email',
			password='$password',
			gender='$gender',
			role='$role';") or die(mysqli_error($nama, $email, $password, $gender, $role));

header('location:../login/login.php');
?>
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Holy guacamole!</strong> You should check in on some of those fields below.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

<?php 
}
 ?>
