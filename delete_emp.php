<?php include('server.php');	

	$id 	= $_GET['id'];
	$query 	= "DELETE FROM employee WHERE employee_id = '$id'";
	mysqli_query($db, $query);

	header('Location: viewemployee.php');