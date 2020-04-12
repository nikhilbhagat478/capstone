<?php include('dbconnection.php');
session_start();
if(!isset($_SESSION['id']))
{
	header('location:userhome.php');
}
else
{
	if(isset($_SESSION['id']))
	{
		$id    = $_SESSION['id'];

		$sql = "SELECT * FROM `users` WHERE id = $id";
		$run = $conn->query($sql);

		if($run->num_rows > 0)
		{
			$data           = $run->fetch_assoc();
			$id             = $data['id'];
			$name			= $data['name'];
			$email			= $data['email'];
			$mobile			= $data['mobile'];
			$gender			= $data['gender'];
			$address		= $data['address'];
		}
	}
}

?>

<?php include 'header.php' ?>

	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h1>Profile</h1>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-6">
				<h4>Name - <?php echo $name; ?></h4>
				<h4>Email - <?php echo $email; ?></h4>
				<h4>Phone No. - <?php echo $mobile; ?></h4>
				<h4>Gender - <?php echo $gender; ?></h4>
				<?php
					if(isset($address))
					{
						?>
							<h4>Address - <?php echo $address; ?></h4>
						<?php
					}
				?>
			</div>
			<div class="col-sm-6">
				
			</div>
		</div>

		<div class="row">
			<div class="col-sm-12">
				<span>
					<a href="userhome.php" class="btn btn-primary">Go Back</a>
					<a href="edit-profile.php" class="btn btn-secondary">Edit Profile</a>
				</span>
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