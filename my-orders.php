<?php include('dbconnection.php');
session_start();
if(!isset($_SESSION['id']))
{
	header('location:login.php');
}
else
{
	$userId = $_SESSION['id'];
	$sql = "SELECT * FROM `orders` WHERE `user_id` = $userId";
	$run = $conn->query($sql);
}

?>

<?php include 'header.php' ?>
<?php include 'navbar.php'; ?>

<div class="conatiner">
	<div class="col-sm-12">
		<h2 class="text-center text-primary shadow">Your Orders</h2>
	</div>

	<div class="col-sm-12">
		<a href="index.php" class="btn btn-primary btn-sm">Homepage</a>
	</div>

	<br>

	<table class="table">
		<thead>
			<th>serial number</th>
			<th>Medicines</th>
			<th>Total Price</th>
			<th>Ordered Time</th>
			<th>Estimated Arrival Time</th>
			<th>Action</th>
		</thead>
		<tbody>
			<?php
				if($row = $run->num_rows > 0)
				{
					$i=1;
					while($data = $run->fetch_assoc())
					{
						?>
							<tr>
								<td><?php echo $i++ ?></td>
								<td><?php echo $data['medicines'] ?></td>
								<td>Total Price Here</td>
								<td><?php echo $data['ordered_date'] ?></td>
								<td><?php echo $data['arrival_date'] ?></td>
								<td><a href="cancel-order.php?order_id=<?php echo $data['order_id'] ?>" class="btn btn-danger btn-sm">Cancel Order</a></td>
							</tr>
						<?php
					}
				}
				else
				{
					$noOrder = "you don't have any orders yet";
				}
			?>
		</tbody>
	</table>
	<?php
		if(isset($noOrder))
		{
			?>
				<div class="row">
					<div class="col-sm-12">
						<p class="text-center text-secondary"><?php echo $noOrder; ?></p>
					</div>
				</div>
			<?php
		}
	?>
</div>

	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/plugins/jquery-validation/lib/jquery.js"></script>
	<script src="assets/plugins/jquery-validation/dist/jquery.validate.min.js"></script>
	<script src="assets/plugins/jquery-validation/dist/additional.min.js"></script>
	<script src="assets/js/register.js"></script>
</body>
</html>