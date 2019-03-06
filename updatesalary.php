<?php 
  include("server.php");
  
  $id = $_GET['id'];
  $employee = "SELECT * FROM salary,employee WHERE salary.salary_id='$id' AND salary.emp_id = employee.emp_id";
  $result = mysqli_query($db, $employee);
  $row = mysqli_fetch_array($result);
/*  $sql = "SELECT * FROM salary WHERE emp_id = '$id'";
  $result1 = mysqli_query($db, $sql);
  $row = mysqli_fetch_array($result1);*/
?>
<!DOCTYPE html>
<html>
<head>
	<title>Salon De Bro</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="bootstrap-4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
<form method="post" action="addsalary.php">
    <div class="form-group">
	    <label for="NameDemo1">Name:</label>
	    <input type="text" class="form-control col-md-12" id="emp_id" name="emp_id" value="<?php echo $row['first_name'];?>" placeholder="Amount" required>
  	</div>

    <div class="form-group">
	    <label for="NameDemo1">Salary:</label>
	    <input type="number" class="form-control col-md-12" id="salary" name="salary" value="<?php echo $row['salary'];?>" placeholder="Amount" required>
  	</div>
 <!--  	    <div class="form-group">
	    <label for="NameDemo1">Time Stamp:</label>
	    <input type="now" class="form-control col-md-12" id="time_stamp" name="time_stamp" value="<?php echo $row['time_stamp'];?>" placeholder="time_stamp" required>
  	</div>
 -->  	<input type="hidden" name="id" value="<?php echo $row['time_stamp'];?>">
  	<input type="hidden" name="id" value="<?php echo $row['salary_id'];?>">
	<input type="submit" name="update" value="Save">
    <button type="button" class="btn btn-success" data-dismiss="modal" onclick="window.location.href='viewsalary.php'">Back</button> 
 </form> 
</body>
  <script src="bootstrap-4.0.0/dist/js/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="bootstrap-4.0.0/dist/js/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="bootstrap-4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
  </script>
</html>