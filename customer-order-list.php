<?php include('dbconnection.php');
session_start();
if(!isset($_SESSION['id']))
{
	header('location:login.php');
}



?>

<?php include 'header.php' ?>

<div class="conatiner">
	<div class="col-sm-12">
		<h2 class="text-center text-primary shadow">Your Orders</h2>
	</div>
</div>

	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/plugins/jquery-validation/lib/jquery.js"></script>
	<script src="assets/plugins/jquery-validation/dist/jquery.validate.min.js"></script>
	<script src="assets/plugins/jquery-validation/dist/additional.min.js"></script>
	<script src="assets/js/register.js"></script>
</body>
</html>