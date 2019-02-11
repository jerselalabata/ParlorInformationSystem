<?php include('server.php');
	
	if(isset($_POST['add'])){
		$customer_id  	= mysqli_real_escape_string($db,$_POST['customer_id']);
		$first_name   	= mysqli_real_escape_string($db,$_POST['first_name']);
		$middle_initial = mysqli_real_escape_string($db,$_POST['middle_initial']);
		$last_name   	= mysqli_real_escape_string($db,$_POST['last_name']);
 		$contact_no      	= mysqli_real_escape_string($db,$_POST['contact_no']);
 		$purok      	= mysqli_real_escape_string($db,$_POST['purok']);
 		$barangay      	= mysqli_real_escape_string($db,$_POST['barangay']);
 		$city      	= mysqli_real_escape_string($db,$_POST['city']);
 		$zip_code      	= mysqli_real_escape_string($db,$_POST['zip_code']);


 		$sql = "INSERT INTO `customer_table` (`customer_id`, `first_name`, `middle_initial`, `last_name`, `contact_no`, `purok`, `barangay`, `city`, `zip_code`) VALUES ('$customer_id', '$first_name', '$middle_initial', '$last_name', '$contact_no', '$purok', '$barangay', '$city', '$zip_code')";
 		$result = mysqli_query($db, $sql);
		if($result == true){
			header('Location: viewcustomer.php');
		}else{
			echo "Somthing went wrong";
		}
	}


	if(isset($_POST['update'])){
		$id = mysqli_real_escape_string($db,$_POST['id']);
		$customer_id	= mysqli_real_escape_string($db,$_POST['customer_id']);
		$first_name 	= mysqli_real_escape_string($db,$_POST['first_name']);
		$middle_initial = mysqli_real_escape_string($db,$_POST['middle_initial']);
		$last_name 		= mysqli_real_escape_string($db,$_POST['last_name']);
		$contact_no 		= mysqli_real_escape_string($db,$_POST['contact_no']);
		$purok 		= mysqli_real_escape_string($db,$_POST['purok']);
		$barangay 		= mysqli_real_escape_string($db,$_POST['barangay']);
		$city 		= mysqli_real_escape_string($db,$_POST['city']);
		$zip_code 		= mysqli_real_escape_string($db,$_POST['zip_code']);

		$sql = "UPDATE `customer_table` SET `customer_id` = '$customer_id', `first_name` = '$first_name', `middle_initial` = '$middle_initial', `last_name` = '$last_name', `contact_no` = '$contact_no', `purok` = '$purok', `barangay` = '$barangay', `city` = '$city', `zip_code` = '$zip_code' WHERE `customer_table`.`customer_id` = '$id'";
		mysqli_query($db, $sql);
		$_SESSION['message'] = "updated!"; 
		header('location: viewcustomer.php');
	}

	if (isset($_GET['delete'])) {
		$id = $_GET['delete'];
		mysqli_query($db, "DELETE FROM customer_table WHERE customer_id=$id"); 
		header('location: viewcustomer.php');
	}

		$results = mysqli_query($db, "SELECT * FROM customer_table"); 

