<?php include('server.php');


	$username = $_SESSION['username'];
	
	if(isset($_POST['add'])){
		$emp_id  	= mysqli_real_escape_string($db,$_POST['emp_id']);
		$salary   	= mysqli_real_escape_string($db,$_POST['salary']);

 		$sql = "INSERT INTO `salary` (`emp_id`, `salary`) VALUES ('$emp_id', '$salary')";
 		$result = mysqli_query($db, $sql);
		if($result == true){
			header('location: viewsalary.php?username='.$username);
		}else{
			echo "Somthing went wrong";
		}
	}


	if(isset($_POST['update'])){
		$id = mysqli_real_escape_string($db,$_POST['id']);
		$emp_id	= mysqli_real_escape_string($db,$_POST['emp_id']);
		$salary	= mysqli_real_escape_string($db,$_POST['salary']);

		$sql = "UPDATE `employee` SET `emp_id` = '$emp_id', `first_name` = '$first_name', `middle_initial` = '$middle_initial', `last_name` = '$last_name', `job_id` = '$job_id' WHERE `employee`.`emp_id` = '$emp_id'";


		mysqli_query($db, $sql);
		$_SESSION['message'] = "updated!"; 
		header('location: viewemployee.php?username='.$username);
	}

	if (isset($_GET['delete'])) {
		$id = $_GET['delete'];
		mysqli_query($db, "DELETE FROM `salary` WHERE `salary`.`salary_id` = $id");
		header('location: viewsalary.php?username='.$username);
	}

		$results = mysqli_query($db, "SELECT * FROM salary"); 