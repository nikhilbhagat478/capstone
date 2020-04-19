<?php include('dbconnection.php');
session_start();
if(isset($_SESSION['id'])) {
	header('location:userhome.php');
} else {
	if(isset($_POST['signup'])) {

		$name            = $_POST['name'];
		$email           = $_POST['email'];
		$password        = $_POST['password'];
		$passwordConfirm = $_POST['password_confirm'];
		$mobile          = $_POST['mobile'];
		$gender          = $_POST['gender'];
		$password        = md5($password);

		$sql0 = "SELECT * FROM `users` WHERE email = '$email'";
		$run0 = $conn->query($sql0);
		if($run0->num_rows > 0)
		{
			echo $error = "email already registered! try with unique one.";
		}
		else
		{
			$sql = "INSERT INTO `users`(`name`, `email`, `password`, `mobile`, `gender` , `address`) VALUES ('$name' , '$email' , '$password' , '$mobile' , '$gender' , '')";
			$run = $conn->query($sql);

			if($run) {
				?>
					<script>
						alert('account created successfully! Please Login');
						window.open('login.php','_self');
					</script>
				<?php
			} else {
				echo "error";
			}
		}
	}
}
?>

<?php include 'header.php' ?>
<?php include 'navbar.php'; ?>

	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h1 class="text-center">
					Signup
				</h1>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-12">
				<a href="index.php" class="btn btn-link mb-2">
					Homepage
				</a>
			</div>
		</div>

		<form action="" method="post" id="signupForm" enctype="multipart/form-data">
			<div class="form-group">
				<label for="name">Name</label>
				<input type="text" name="name" value="<?php if(isset($_POST['name'])) { echo $_POST['name']; } ?>" id="name" class="form-control">
			</div>

			<div class="form-group">
				<label for="email">Email</label>
				<input type="email" value="<?php if(isset($_POST['email'])) { echo $_POST['email']; } ?>" name="email" id="email" class="form-control">
			</div>

			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" name="password" id="password" class="form-control">
			</div>

			<div class="form-group">
				<label for="password_confirm">Password Confirm</label>
				<input type="password" name="password_confirm" id="password_confirm" class="form-control">
			</div>

			<div class="form-group">
				<label for="mobile">Mobile</label>
				<input type="tel" value="<?php if(isset($_POST['mobile'])) { echo $_POST['mobile']; } ?>" name="mobile" id="mobile" class="form-control">
			</div>
			
			<label>Gender</label>
			<div class="form-check">
				<label for="male" class="form-check-label">
					<input type="radio" name="gender" value="male" id="male" class="form-check-input">Male
				</label>
				<div class="ml-1 mr-1"></div>
				<label for="female" class="form-check-label">
					<input type="radio" name="gender" id="male" value="female" class="form-check-input">Female
				</label>
			</div>
			<div class="form-group">
				<span>
					<input type="submit" name="signup" value="Signup" class="btn btn-primary">
					<a href="login.php" class="btn btn-light">Login</a>
				</span>
			</div>
		</form>
	</div>
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/plugins/jquery-validation/lib/jquery.js"></script>
	<script src="assets/plugins/jquery-validation/dist/jquery.validate.min.js"></script>
	<script src="assets/plugins/jquery-validation/dist/additional.min.js"></script>
	<script src="assets/js/signup-form.js"></script>
</body>
</html>