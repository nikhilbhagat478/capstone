<?php include('dbconnection.php');
	$sql="SELECT * FROM `stores`";
	$run = $conn->query($sql);
?>

<?php include 'header.php' ?>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h1 class="text-center">Medical Stores List</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<a href="index.php" class="btn btn-success">Homepage</a>
			</div>
		</div>
		<table class="table table-hover">
			<tr>
				<th>Serial Number</th>
				<th>Store Name</th>
				<th>Contact Number</th>
				<th>Address</th>
				<th>Actions</th>
			</tr>
			<?php
				$i=1;
				while($data=$run->fetch_assoc())
				{
					?>
						<tr>
							<td><?php echo $i++ ?></td>
							<td><?php echo $data['store_name']; ?></td>
							<td><?php echo $data['store_contact']; ?></td>
							<td><?php echo $data['store_address']; ?></td>
							<td><a href="view-store.php?id=<?php echo $data['store_id']; ?>" class="btn btn-primary">View Store</a></td>
						</tr>
					<?php
				}
			?>
		</table>
	</div>


	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/plugins/jquery-validation/lib/jquery.js"></script>
	<script src="assets/plugins/jquery-validation/dist/jquery.validate.min.js"></script>
	<script src="assets/plugins/jquery-validation/dist/additional.min.js"></script>
	<script src="assets/js/register.js"></script>
</body>
</html>