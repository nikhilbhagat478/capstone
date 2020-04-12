<?php include('dbconnection.php');
session_start();
if(!isset($_SESSION['id'])) {
	header('location:login.php');
} else {

	$id =$_SESSION['id'];
	$sql0 = "SELECT * FROM `users` WHERE id =$id";
	$run0 = $conn->query($sql0);
	if($run0->num_rows > 0)
	{
		$data = $run0->fetch_assoc();
	}
	if(isset($_POST['update'])) {

		$name            = $_POST['name'];
		$mobile          = $_POST['mobile'];
		$gender          = $_POST['gender'];
		$address		 = $_POST['address'];

		$sql = "UPDATE `users` SET `name`='$name',`mobile`='$mobile',`gender`='$gender' , `address` = '$address' WHERE id = $id";
		$run = $conn->query($sql);

		if($run) {
			header('location:view-profile.php');
		} else {
			echo "error";
		}
	}
}
?>

<?php include 'header.php' ?>

	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h1 class="text-center">
					Update
				</h1>
			</div>
		</div>

		<form action="" id="edit-profile-form" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label for="name">Name</label>
				<input type="text" name="name" value="<?php echo $data['name']; ?>" id="name" class="form-control">
			</div>

			<div class="form-group">
				<label for="mobile">Mobile</label>
				<input type="tel" name="mobile" id="mobile" value="<?php echo $data['mobile']; ?>" class="form-control">
			</div>
			
			<label>Gender</label>
			<div class="form-check">
				<label for="male" class="form-check-label">
					<input type="radio" name="gender" value="male" id="gender" class="form-check-input" <?php if($data['gender'] == 'male') { ?> checked <?php } ?> >Male
				</label>
				<div class="ml-1 mr-1"></div>
				<label for="female" class="form-check-label">
					<input type="radio" name="gender" id="gender" value="female" class="form-check-input" <?php if($data['gender'] == 'female') { ?> checked <?php } ?> >Female
				</label>
			</div>

			<div class="form-group">
				<label for="address">Address</label>
				<input type="text" name="address" id="address" class="form-control">
			</div>
			<div class="form-group">
				<span>
					<input type="submit" name="update" value="Update" class="btn btn-primary">
					<a href="userhome.php" class="btn btn-secondary">Go Back</a>
				</span>
			</div>
		</form>
	</div>
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/plugins/jquery-validation/lib/jquery.js"></script>
	<script src="assets/plugins/jquery-validation/dist/jquery.validate.min.js"></script>
	<script src="assets/plugins/jquery-validation/dist/additional.min.js"></script>
	<script src="assets/js/edit-profile.js"></script>
</body>
</html>