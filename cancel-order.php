<?php include('dbconnection.php');
session_start();
if(!isset($_SESSION['id']))
{
	header('location:login.php');
}
else
{
	$orderId = $_GET['order_id'];
	$sql = "DELETE FROM`orders` WHERE `order_id` = $orderId";
	$run = $conn->query($sql);
	if($run = true)
		{
			header('location:my-orders.php');
		}

}

?>