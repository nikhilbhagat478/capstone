<?php include('dbconnection.php');
session_start();
if(isset($_SESSION['id']))
{
	header('location:userhome.php');
}
else
{
	if(isset($_POST['login']))
	{
		$email    = $_POST['email'];
		$password = md5($_POST['password']);

		$sql = "SELECT * FROM `users` WHERE email = '$email' AND password = '$password'";
		$run = $conn->query($sql);

		if($run->num_rows > 0)
		{
			$data           = $run->fetch_assoc();
			$id             = $data['id'];
			$_SESSION['id'] = $id;
			header('location:userhome.php?id='.$id);
		}
		else
		{
			echo "no user found";
		}
	}
}

?>

<?php include 'header.php' ?>

	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h1 class="text-center">
					Login
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

		<form action="" id="loginForm" method="post" enctype="multipart/form-data">

			<div class="form-group">
				<label for="email">Email</label>
				<input type="email" name="email" id="email" class="form-control">
			</div>

			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" name="password" id="password" class="form-control">
			</div>

			<div class="form-group">
				<span>
					<input type="submit" name="login" value="login" class="btn btn-primary mr-3">
					dont have account?
					<a href="signup.php" class="btn btn-success">Signup</a>
				</span>
			</div>
		</form>
	</div>
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/plugins/jquery-validation/lib/jquery.js"></script>
	<script src="assets/plugins/jquery-validation/dist/jquery.validate.min.js"></script>
	<script src="assets/plugins/jquery-validation/dist/additional.min.js"></script>
	<script src="assets/js/login-form.js"></script>
</body>
</html>