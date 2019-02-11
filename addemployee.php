<?php include('server.php');
	
	if(isset($_POST['add'])){
		$employee_id  	= mysqli_real_escape_string($db,$_POST['employee_id']);
		$first_name   	= mysqli_real_escape_string($db,$_POST['first_name']);
		$middle_initial = mysqli_real_escape_string($db,$_POST['middle_initial']);
		$last_name   	= mysqli_real_escape_string($db,$_POST['last_name']);
 		$job_id      	= mysqli_real_escape_string($db,$_POST['job_id']);

 		$sql = "INSERT INTO `employee` (`employee_id`, `first_name`, `middle_initial`, `last_name`, `job_id`) VALUES ('$employee_id', '$first_name', '$middle_initial', '$last_name', '$job_id')";
 		$result = mysqli_query($db, $sql);
		if($result == true){
			header('Location: viewemployee.php');
		}else{
			echo "Somthing went wrong";
		}
	}


	if(isset($_POST['update'])){
		$id = mysqli_real_escape_string($db,$_POST['id']);
		$employee_id	= mysqli_real_escape_string($db,$_POST['employee_id']);
		$first_name 	= mysqli_real_escape_string($db,$_POST['first_name']);
		$middle_initial = mysqli_real_escape_string($db,$_POST['middle_initial']);
		$last_name 		= mysqli_real_escape_string($db,$_POST['last_name']);
		$job_id 		= mysqli_real_escape_string($db,$_POST['job_id']);

		$sql = "UPDATE `employee` SET `employee_id` = '$employee_id', `first_name` = '$first_name', `middle_initial` = '$middle_initial', `last_name` = '$last_name', `job_id` = '$job_id' WHERE `employee`.`employee_id` = '$id'";
		mysqli_query($db, $sql);
		$_SESSION['message'] = "updated!"; 
		header('location: viewemployee.php');
	}

	if (isset($_GET['delete'])) {
		$id = $_GET['delete'];
		mysqli_query($db, "DELETE FROM employee WHERE employee_id=$id"); 
		header('location: viewemployee.php');
	}

		$results = mysqli_query($db, "SELECT * FROM employee"); 

<<<<<<< HEAD
=======
		$query 	= "UPDATE Instructor SET first_name='$fname',last_name='$lname',middle_name='$mname',status='$status',department='$dept' WHERE instructor_id = $ins_id";
		mysqli_query($db, $query);
		header('Location: viewemployee.php');
	}
>>>>>>> 31bc5dbed664aba66eba0ffa5fc546c842491f82
