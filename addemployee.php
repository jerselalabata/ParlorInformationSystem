<?php include('server.php');
	
	if(isset($_POST['add'])){
		$employee_id = mysqli_real_escape_string($db,$_POST['employee_id']);
		$first_name  = mysqli_real_escape_string($db,$_POST['first_name']);
		$middle_initial = mysqli_real_escape_string($db,$_POST['middle_initial']);
		$last_name   = mysqli_real_escape_string($db,$_POST['last_name']);
 		$job_id      = mysqli_real_escape_string($db,$_POST['job_id']);

 		$query = "INSERT INTO `employee` (`employee_id`, `first_name`, `middle_initial`, `last_name`, `job_id`) VALUES ('$employee_id', '$first_name', '$middle_initial', '$last_name', '$job_id')";

 		$result = mysqli_query($db, $query);
		if($result == true){
			header('Location: viewemployee.php');
		}else{
			echo "Somthing went wrong";
		}
	}


	if(isset($_POST['update'])){
		$employee_id	= mysqli_real_escape_string($db,$_POST['employee_id']);
		$first_name 	= mysqli_real_escape_string($db,$_POST['first_name']);
		$middle_initial 	= mysqli_real_escape_string($db,$_POST['middle_initial']);
		$last_name 	= mysqli_real_escape_string($db,$_POST['last_name']);
		$job_id = mysqli_real_escape_string($db,$_POST['job_id']);

		$query 	= "UPDATE Instructor SET first_name='$fname',last_name='$lname',middle_name='$mname',status='$status',department='$dept' WHERE instructor_id = $ins_id";
		mysqli_query($db, $query);
		header('Location: viewemployee.php');
	}
