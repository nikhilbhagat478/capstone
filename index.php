<?php include('dbconnection.php');
session_start();
?>

<?php include 'header.php' ?>

	<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<h1 class="text-center">Homepage</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6">
			<a href="find-chemist.php" class="btn btn-success">Find Chemist Shops</a>
			<a href="order-medicine.php" class="btn btn-secondary">Order medicine Now</a>
		</div>
		<div class="col-sm-6">
			<?php
				if(isset($_SESSION['id']))
				{
					?>
						<a href="userhome.php" class="btn btn-primary ml-5">Profile</a>
						<a href="my-orders.php" class="btn btn-warning">My Orders</a>
					<?php		
				}
				else
				{
					?>
						<a href="login.php" class="btn btn-primary">Login</a>
						<a href="signup.php" class="btn btn-danger">Signup</a>
					<?php
				}
			?>
		</div>
	</div>
	<form action="" method="post">
		<div class="form-group">
			<label for="searchMedicine">Search medicine</label>
			<input type="text" name="searchMedicine" id="searchMedicine" class="form-control">
		</div>
		<div class="form-f=group">
			<input type="submit" name="search" id="search" value="search" class="btn btn-primary">
		</div>
	</form>
	</div>
	

	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/plugins/jquery-validation/lib/jquery.js"></script>
	<script src="assets/plugins/jquery-validation/dist/jquery.validate.min.js"></script>
	<script src="assets/plugins/jquery-validation/dist/additional.min.js"></script>
	<script src="assets/js/register.js"></script>
</body>
</html>