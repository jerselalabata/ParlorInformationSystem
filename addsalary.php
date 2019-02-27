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
			echo "Something went wrong";
		}
	}


	if(isset($_POST['update'])){
		$id = mysqli_real_escape_string($db,$_POST['id']);
		$salary	= mysqli_real_escape_string($db,$_POST['salary']);

		$sql = "UPDATE `salary` SET `salary` = '$salary', `time_stamp` = '$time_stamp' WHERE `salary`.`salary_id` = '$id'";

		mysqli_query($db, $sql);
		$_SESSION['message'] = "updated!"; 
		header('location: viewsalary.php?username='.$username);
	}

	if (isset($_GET['delete'])) {
		$id = $_GET['delete'];
		mysqli_query($db, "DELETE FROM `salary` WHERE `salary`.`salary_id` = $id");
		header('location: viewsalary.php?username='.$username);
	}

		$results = mysqli_query($db, "SELECT * FROM salary"); 


?>