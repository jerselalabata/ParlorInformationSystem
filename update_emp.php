<?php include('server.php');
  
  $id = isset($_GET['id']) ? $_GET['id'] : '';
  /*$sql = "SELECT * FROM employee WHERE employee_no = '$employee_no', first_name = '$first_name', middle_initial = '$middle_initial', last_name = '$last_name', job_no = '$job_no'";*/
  $sql = "SELECT * FROM employee WHERE employee_id = '$id'";
  $result = mysqli_query($db, $sql);
  if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_array($result)){

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
  <form method="post" action="viewemployee.php">

  <div class="form-group">
    <label for="NameDemo1">Employee No:</label>
    <input type="number" class="form-control col-md-12" name="employee_id" value="<?php echo $row['employee_id'];?>" name="" placeholder="Employee No" required>
  </div>
  <div class="form-group">
    <label for="NameDemo2">First Name:</label>
    <input type="text" class="form-control col-md-12" name="first_name" value="<?php echo $row['first_name'];?>" placeholder="Enter First Name" required> 
  </div>  
    <div class="form-group">
    <label for="NameDemo2">Middle Initial:</label>
    <input type="text" class="form-control col-md-12" name="middle_initial" value="<?php echo $row['middle_initial'];?>" placeholder="Enter Middle Name" required> 
  </div>  
    <div class="form-group">
    <label for="NameDemo2">Last Name:</label>
    <input type="text" class="form-control col-md-12" name="last_name" value="<?php echo $row['last_name'];?>" placeholder="Enter Last Name" required> 
  </div>
    <div class="form-group">
    <label for="NameDemo2">Job No:</label>
    <input type="number" class="form-control col-md-12" name="job_id" value="<?php echo $row['job_id'];?>" placeholder="Job No" required> 
  </div>    

  <input type="submit" name="update" value="Save">
  <button type="button" onclick="window.location.href='viewemployee.php'">Back</button>
</form>
  <?php 
      }
    }
  ?>
</body>
  <script src="bootstrap-4.0.0/dist/js/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="bootstrap-4.0.0/dist/js/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="bootstrap-4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>