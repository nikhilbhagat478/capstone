<?php include('dbconnection.php');
session_start();
if(!isset($_SESSION['admin_id']))
{
	header('location:index.php');
}
else
{
	if(isset($_POST['add_store']))
	{
		$storeName = $_POST['store_name'];
		$storeContact = $_POST['store_contact'];
		$storeStock = implode(',', $_POST['medicines']);
		$priceList 	=	 implode(',', $_POST['price_list']);
		$storeAddress = $_POST['store_address'];

		$sql = "INSERT INTO `stores`(`store_name`, `store_contact`, `store_stock`, `price_list` , `store_address`) VALUES ('$storeName','$storeContact','$storeStock', '$priceList' , '$storeAddress')";
		$run = $conn->query($sql);
		if($run)
		{
			echo "data inserted successfully";
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
				Add Store
			</h1>
		</div>
	</div>
	<form action="adminhome.php" method="post">
		<div class="form-grouo">
			<label for="store_name">Store Name:</label>
				<input type="text" name="store_name" value="<?php if(isset($_POST['store_name'])) { echo $_POST['store_name'] ; } ?>" id="store_name" class="form-control">
		</div>

		<div class="form-grouo">
			<label for="store_contact">Store Contact:</label>
				<input type="tel" value="<?php if(isset($_POST['store_contact'])) { echo $_POST['store_contact'] ; } ?>" name="store_contact" id="store_contact" class="form-control">
		</div>

		<div class="form-grouo">
			<label for="store_stock">Store Stock(enter quantity in numbers):</label>
				<input type="integer" name="stock_limit" id="stock_limit" value="<?php if(isset($_POST['stock_limit'])) { echo $_POST['stock_limit'] ; } ?>" class="form-control">
				<input type="submit" name="stock_limit_click" value="Enter" class="btn btn-warning"><br>
				<?php if(isset($_POST['stock_limit_click']))
					{
						?>
						<table class="table table-hover">
							<tr>
								<th>Serial Number</th>
								<th>Medicine Name</th>
								<th>Price</th>
							</tr>
						<?php
						$stockLimit = $_POST['stock_limit'];
						for($i=1 ; $i <= $stockLimit; $i++)
						{
							?>
								<tr>
									<td><?php echo $i ?></td>
									<td><input type="text" name="medicines[]" class="form-control"></td>
									<td><input type="integer" name="price_list[]" class="form-control"></td>
								</tr>
							<?php
						}?>
					</table>
					<?php
					}
				?>
		</div>

		<div class="form-grouo">
			<label for="store_address">store Address:</label>
				<input type="text" name="store_address" value="<?php if(isset($_POST['store_address'])) { echo $_POST['store_address'] ; } ?>" id="store_address" class="form-control">
		</div>

		<div class="form-grouo">
				<input type="submit" name="add_store" value="Add Store" class="btn btn-primary">
		</div>
		<br>
		<div class="form-grouo">
				<input type="submit" name="admin_logout" value="Logout" class="btn btn-danger">
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
<?php
if(isset($_POST['admin_logout']))
{
	session_destroy();
	header('location:admin.php');
}
?>