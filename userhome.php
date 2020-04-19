<?php include('dbconnection.php');
session_start();
if(!isset($_SESSION['id']))
{
	header('location:login.php');
}

?>

<?php include 'header.php' ?>
<?php include 'navbar.php'; ?>
	
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h1 class="text-center">Homepage</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<div class="text-center">
					<a href="index.php" class="btn btn-secondary">
						Home
					</a>
					<a href="order-medicine.php" class="btn btn-primary">
						Order Medicine Now
					</a>
					<a href="view-profile.php" class="btn btn-success">
						View Profile
					</a>
					<a href="edit-profile.php" class="btn btn-warning">
						Edit Profile
					</a>
					<a href="logout.php" class="btn btn-danger">
						Logout
					</a>
				</div>
			</div>
		</div>
	</div>


	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/plugins/jquery-validation/lib/jquery.js"></script>
	<script src="assets/plugins/jquery-validation/dist/jquery.validate.min.js"></script>
	<script src="assets/plugins/jquery-validation/dist/additional.min.js"></script>
	<script src="assets/js/register.js"></script>
</body>
</html>