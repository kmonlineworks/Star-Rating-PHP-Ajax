<?php 
include 'config.php';
session_start();

if (isset($_POST['rating'])) {
	
	$sql = "UPDATE user SET rating_no = rating_no+1, rating_avg = rating_avg+'".$_POST['rating']."' WHERE id = '".$_POST['userId']."'";
	mysqli_query($conn, $sql);
}

