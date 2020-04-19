<?php include('dbconnection.php');
	$storeId = $_GET['id'];
	$sql="SELECT * FROM `stores` WHERE store_id = '$storeId'";
	$run = $conn->query($sql);
	if($run) {
		$data = $run->fetch_assoc();
	}
?>

<?php include 'header.php' ?>
<?php include 'navbar.php'; ?>
	
	<div class="conatiner">
		<div class="row">
			<div class="col-sm-12">
				<h1 class="text-center">
					Store Information
				</h1>
			</div>
		</div>

		<h4>Store Name - <?php echo $data['store_name'] ?></h4>
		<h4>Contact Number - <?php echo $data['store_contact'] ?></h4>
		<h4>Address - <?php echo $data['store_address'] ?></h4>
		<table class="table">
			<tr>
				<th>Medicines Available</th>
				<th>Price</th>
			</tr>
			<?php
				$medicineArray = explode(',', $data['store_stock']);
				$priceListArray = explode(',', $data['price_list']);
				$i=1;
				?>
					<tr>
					 	<td>
							<?php foreach ($medicineArray as $medicines) { echo $medicines."<br>"; } ?>
						</td>
						<td>
							<?php foreach ($priceListArray as $price) { echo $price."<br>"; } ?>
						</td>
					</tr><br>
				<?php
			?>
		</table>
		<br>
		<div class="row">
			<a href="order-medicine.php" class="col-sm-12 btn btn-primary">Order Now</a>
		</div>

	</div>

	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/plugins/jquery-validation/lib/jquery.js"></script>
	<script src="assets/plugins/jquery-validation/dist/jquery.validate.min.js"></script>
	<script src="assets/plugins/jquery-validation/dist/additional.min.js"></script>
	<script src="assets/js/register.js"></script>
</body>
</html>