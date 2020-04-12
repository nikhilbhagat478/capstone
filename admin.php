<?php include('dbconnection.php');
session_start();
if(isset($_SESSION['admin_id']))
{
	header('location:adminhome.php');
}
else
{
	if(isset($_POST['login']))
	{
		$email = $_POST['email'];
		$password = $_POST['password'];

		$sql = "SELECT * FROM `admin` WHERE email = '$email' AND password = '$password'";
		$run = $conn->query($sql);
		if($run->num_rows > 0)
		{
			$data = $run->fetch_assoc();
			$id = $data['id'];
			$_SESSION['admin_id'] = $id;
			header('location:adminhome.php?id='.$id);
		}
		else
		{
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
				Admin Login
			</h1>
		</div>
	</div>
	<form action="admin.php" method="post">
		<div class="form-grouo">
			<label for="email">Email:</label>
				<input type="email" name="email" id="email" class="form-control">
		</div>

		<div class="form-grouo">
			<label for="password">Password:</label>
				<input type="password" name="password" id="password" class="form-control">
		</div>

		<div class="form-grouo">
				<input type="submit" name="login" value="Login" class="btn btn-primary">
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