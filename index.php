<?php include('dbconnection.php');
session_start();
?>

<?php include 'header.php'; ?>
<?php include 'navbar.php'; ?>
	<div class="container-fluid">
		<div class="row shadow">
			<div class="col-sm-6">
				<img src="assets/piks/pik2.jpg" class="img-fluid">
			</div>

			<div class="col-sm-6 mt-2" style="background-color: powderblue;">
				<h3 class="text-center">Medstore.in</h3>
				<a href="find-chemist.php" class="btn btn-success btn-sm">Find Chemist Shops</a>
				<a href="order-medicine.php" class="btn btn-secondary btn-sm">Order medicine Now</a>
			<form action="" method="post">
				<div class="form-group">
					<label for="searchMedicine">Search medicine</label>
					<input type="text" name="searchMedicine" placeholder="Search Medicine" id="searchMedicine" class="form-control">
				</div>
				<div class="form-f=group">
					<input type="submit" name="search" id="search" value="search" class="btn btn-primary">
				</div>
			</form>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-12">
				<h3 class="text-center mt-2 shadow">Our Services</h3>
			</div>
		</div>

		<div class="row shadow">
			<div class="col-sm-12">
				<div class="card-group">
					<div class="card" style="width: 18rem;">
					  <img class="card-img-top" src="assets/piks/fastdelivery.jpg" alt="Card image cap">
						  <div class="card-body text-center">
						    <h5 class="card-title">Fast Delivery</h5>
						    <p class="card-text">
						    	Get The Fastest Delivery Experience With Us
						    </p>
						  </div>
					</div>
					
					<div class="card" style="width: 18rem;">
					  <img class="card-img-top" src="assets/piks/lowprice.jpg" alt="Card image cap">
						  <div class="card-body text-center">
						    <h5 class="card-title">Low Price</h5>
						    <p class="card-text">
						    	Medicines At Very Low And Affordable Prices.
						    </p>
						  </div>
					</div>

					<div class="card" style="width: 18rem;">
					  <img class="card-img-top" src="assets/piks/happycustomer.jpg" alt="Card image cap">
						  <div class="card-body text-center">
						    <h5 class="card-title">Customer Satisfaction</h5>
						    <p class="card-text">
						    	Filling The Customer's Need is Always Be Our First Priority
						    </p>
						  </div>
					</div>

					<div class="card" style="width: 18rem;">
					  <img class="card-img-top" src="assets/piks/discount.jpg" alt="Card image cap">
						  <div class="card-body text-center">
						    <h5 class="card-title">Get Discounts</h5>
						    <p class="card-text">
						    	Discounts At Big Orders
						    </p>
						  </div>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-12">
				<h3 class="text-center mt-2 shadow">Get Stores At Your Point</h3>
			</div>
		</div>

		<div class="row shadow">
			<div class="col-sm-8" style="background-color: grey;">
			<form action="" method="post">
				<div class="form-group">
					<label for="searchMedicine" class="ml-3 mt-3"><h3 style="color: white">Search Your Area</h3></label>
					<input type="text" name="searchMedicine" placeholder="Search Area Here" id="searchMedicine" class="form-control">
				</div>
				<div class="form-f=group">
					<input type="submit" style="margin-left: 45%; " name="search" id="search" value="search" class="btn btn-success text-center">
				</div>
			</form>

			</div>

			<div class="col-sm-4">
				<img src="assets/piks/location.jpg" class="img-fluid">
			</div>
		</div>
		<?php include 'footer.php'; ?>
	</div>

	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/plugins/jquery-validation/lib/jquery.js"></script>
	<script src="assets/plugins/jquery-validation/dist/jquery.validate.min.js"></script>
	<script src="assets/plugins/jquery-validation/dist/additional.min.js"></script>
	<script src="assets/js/register.js"></script>
</body>
</html>