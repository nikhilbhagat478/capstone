<?php
$host     =	'localhost';
$user     =	'root';
$password =	'Craft@2017';
$db       =	'capstone';

$conn	=	new mysqli($host,$user,$password,$db);
if(!$conn) {
	die('connection error');
}

?>