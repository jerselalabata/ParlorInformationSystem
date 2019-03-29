<?php include('server.php');



	$username = $_SESSION['username'];
	
	if(isset($_POST['add'])){
		// $emp_id  	= mysqli_real_escape_string($db,$_POST['emp_id']);
		$first_name   	= mysqli_real_escape_string($db,$_POST['first_name']);
		$middle_initial = mysqli_real_escape_string($db,$_POST['middle_initial']);
		$last_name   	= mysqli_real_escape_string($db,$_POST['last_name']);
 		$job_id      	= mysqli_real_escape_string($db,$_POST['job_id']);

 		$sql = "INSERT INTO `employee` (`first_name`, `middle_initial`, `last_name`, `job_id`) VALUES ('$first_name', '$middle_initial', '$last_name', '$job_id')";
 		$result = mysqli_query($db, $sql);
		if($result == true){
			header('location: viewemployee.php?username='.$username);
		}else{
			echo "Somthing went wrong";
		}
	}


	if(isset($_POST['update'])){

		$id = mysqli_real_escape_string($db,$_POST['id']);
		// $emp_id	= mysqli_real_escape_string($db,$_POST['emp_id']);
		$first_name 	= mysqli_real_escape_string($db,$_POST['first_name']);
		$middle_initial = mysqli_real_escape_string($db,$_POST['middle_initial']);
		$last_name 		= mysqli_real_escape_string($db,$_POST['last_name']);
		$job_id 		= mysqli_real_escape_string($db,$_POST['job_id']);

		$sql = "UPDATE `employee` SET `first_name` = '$first_name', `middle_initial` = '$middle_initial', `last_name` = '$last_name', `job_id` = '$job_id' WHERE `employee`.`emp_id` = '$id'";


		mysqli_query($db, $sql);
		$_SESSION['message'] = "updated!"; 
		header('location: viewemployee.php?username='.$username);
	}

	if (isset($_GET['delete'])) {
		$id = $_GET['delete'];
		mysqli_query($db, "DELETE FROM `employee` WHERE `employee`.`emp_id` = $id"); 
		header('location: viewemployee.php?username='.$username);
	}

		$results = mysqli_query($db, "SELECT * FROM employee"); 
?>