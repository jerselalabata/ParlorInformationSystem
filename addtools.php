<?php include('server.php');



	$username = $_SESSION['username'];
	
	if(isset($_POST['add'])){
		$id_no  	= mysqli_real_escape_string($db,$_POST['id_no']);
		$description   	= mysqli_real_escape_string($db,$_POST['description']);
		$amount = mysqli_real_escape_string($db,$_POST['amount']);
		$quantity   	= mysqli_real_escape_string($db,$_POST['quantity']);
 		$unit      	= mysqli_real_escape_string($db,$_POST['unit']);

 		$sql = "INSERT INTO `tools_items` (`id_no`, `time_stamp`, `description`, `amount`, `quantity`, `unit`) VALUES ('$id_no', CURRENT_TIMESTAMP, 'scisor', '$amount', '$quantity', '$unit')";
 				// "INSERT INTO `tools_items` (`id_no`, `time_stamp`, `description`, `amount`, `quantity`, `unit`) VALUES ('$id_no', CURRENT_TIMESTAMP, 'scisor', '$amount', '$quantity', '$unit'");
 		$result = mysqli_query($db, $sql);
		if($result == true){
			header('location: viewtools.php?username='.$username);
		}else{
			echo "Somthing went wrong";
		}
	}


	if(isset($_POST['update'])){
		$id_no = mysqli_real_escape_string($db,$_POST['id_no']);
		$description	= mysqli_real_escape_string($db,$_POST['description']);
		$amount 	= mysqli_real_escape_string($db,$_POST['amount']);
		$quantity = mysqli_real_escape_string($db,$_POST['quantity']);
		$unit 		= mysqli_real_escape_string($db,$_POST['unit']);

		$sql = "UPDATE `tools_items` SET `id_no` = '$id_no', `description` = '$description', `amount` = '$amount', `quantity` = '$quantity', `unit` = '$unit' WHERE `tools_items`.`id_no` = '$id_no'";


		mysqli_query($db, $sql);
		$_SESSION['message'] = "updated!"; 
		header('location: viewtools.php?username='.$username);
	}

	if (isset($_GET['delete'])) {
		$id = $_GET['delete'];
		mysqli_query($db, "DELETE FROM `tools_items` WHERE `tools_items`.`id_no` = '$id'" ); 
		header('location: viewtools.php');
	}

		$results = mysqli_query($db, "SELECT * FROM tools_items"); 
?>