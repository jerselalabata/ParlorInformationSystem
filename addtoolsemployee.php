<?php include('server.php');



	$username = $_SESSION['username'];
	
	if(isset($_POST['add'])){
		$emp_id   	= mysqli_real_escape_string($db,$_POST['emp_id']);
		$id_no = mysqli_real_escape_string($db,$_POST['id_no']);
		$quantity   	= mysqli_real_escape_string($db,$_POST['quantity']);

 		$sql = "INSERT INTO `tools_employee` (`emp_id`, `id_no`, `quantity`) VALUES ('$emp_id', '$id_no', '$quantity')";
 		$result = mysqli_query($db, $sql);
		if($result == true){
			header('location: viewtoolsemployee.php?username='.$username);
		}else{
			echo "Somthing went wrong";
		}
	}


	if(isset($_POST['update'])){
		$id = mysqli_real_escape_string($db,$_POST['id']);
		$quantity  = mysqli_real_escape_string($db,$_POST['quantity']);

		$sql = "UPDATE `tools_employee` SET `quantity` = '$quantity' WHERE `tools_employee`.`toolemployee_id` = '$id'";

		mysqli_query($db, $sql);
		$_SESSION['message'] = "updated!"; 
		header('location: viewtoolsemployee.php?username='.$username);
	}

	if (isset($_GET['delete'])) {
		$id = $_GET['delete'];
		mysqli_query($db, "DELETE FROM `tools_employee` WHERE `tools_employee`.`toolemployee_id` = $id"); 
		header('location: viewtoolsemployee.php?username='.$username);
	}

		$results = mysqli_query($db, "SELECT * FROM tools_employee"); 
?>