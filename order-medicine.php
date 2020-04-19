<?php include('dbconnection.php');
session_start();
if(!isset($_SESSION['id']))
{
	?>
		<script>
			alert('please register or login first');
			window.open('login.php' , '_self');
		</script>
	<?php
}
else
{
	$userId = $_SESSION['id'];

	$userSql = "SELECT * FROM `users` WHERE `id` = $userId";
	$userRun = $conn->query($userSql);
	$userData = $userRun->fetch_assoc();

	if(isset($_POST['order']))
	{

		$customerName= $_POST['customer_name'];
		$userContact = $_POST['userContact'];
		$customerAddress = $_POST['customer_address'];
		$medicines = $_POST['medicines'];
		$orderStore = $_POST['order_store'];
		$orderedDate = date('Y-m-d');
		$arrivalDate = date('Y-m-d' , strtotime('+3 day'));

		$sql = "INSERT INTO `orders`(`customer_name`, `customer_contact`, `customer_address`, `medicines`, `order_store` , `user_id` , `ordered_date` , `arrival_date`) VALUES ('$customerName','$userContact','$customerAddress','$medicines','$orderStore' , '$userId' , '$orderedDate' , '$arrivalDate')";
		$run = $conn->query($sql);
		if($run=true)
		{
			?>
				<script>
					alert('order has been placed successful');
					window.open('index.php' , '_self');
				</script>
			<?php
		}
		else
		{
			echo "wrong";
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
				Order Medicine
			</h1>
		</div>
	</div>
	<form id="orderMedicineForm" action="order-medicine.php" method="post" enctype="multipart/form-data">

		<div class="form-group">
			<label for="name">Name</label>
			<input type="text" name="customer_name" value="<?php echo $userData['name'] ?>" class="form-control" id="customer_name">
		</div>

		<div class="form-group">
			<label for="contact">Contact Number</label>
			<input type="text" name="userContact" value="<?php echo $userData['mobile'] ?>" class="form-control" id="userContact">	
		</div>

		<div class="form-group">
			<label for="orderAddress">Address To Deliver</label>
			<input type="text" name="customer_address" value="<?php echo $userData['address'] ?>" id="customer_address" class="form-control">
		</div>

		<div class="form-group">
			<label for="searchMedicine">Medicine</label>
			<input type="text" name="medicines" id="medicines" class="form-control">
		</div>
		<p>or</p>
		<div class="form-group">
			<label for="searchPrescription">Upload Prescription</label>
			<input type="file" name="searchPrescription" id="searchPrescription" class="form-control">
		</div>

		<div class="form-group">
			<label for="orderAddress">Address of Store</label>
			<input type="text" name="order_store" id="order_store" class="form-control">
		</div>

		<div class="form-group">
			<input type="submit" name="order" value="Place Order" class="btn btn-primary">
			<a href="index.php" class="btn btn-warning">Homepage</a>
		</div>
	</form>
</div>


	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/plugins/jquery-validation/lib/jquery.js"></script>
	<script src="assets/plugins/jquery-validation/dist/jquery.validate.min.js"></script>
	<script src="assets/plugins/jquery-validation/dist/additional.min.js"></script>
	<script src="assets/js/order-medicine-form.js"></script>
</body>
</html>