<?php 
include('addjob.php');
  
  $id = $_GET['id'];
  $sql = "SELECT * FROM job WHERE job_id = '$id'";
  $result = mysqli_query($db, $sql);

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
  <form method="post" action="addjob.php">
   <?php 
    if(mysqli_num_rows($result)>0){
      while($row = mysqli_fetch_array($result)){
    ?>
  <div class="form-group">
    <label for="NameDemo2">Job ID:</label>
    <input type="number" class="form-control col-md-12" name="job_id" value="<?php echo $row['job_id'];?>" placeholder="Job ID" required> 
    
  </div>   
  <div class="form-group">
    <label for="NameDemo1">Employee Job:</label>
    <input type="text" class="form-control col-md-12" name="emp_job" value="<?php echo $row['emp_job'];?>" name="" placeholder="Employee Job" required>
  </div> 
  <input type="hidden" name="id" value="<?php echo $row['job_id'];?>">
  <input type="submit" name="update" value="Save">
  <button type="button" onclick="window.location.href='viewjob.php'">Back</button>
    <?php 
      }
    }
    ?>
  </form>

</body>
  <script src="bootstrap-4.0.0/dist/js/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="bootstrap-4.0.0/dist/js/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="bootstrap-4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>

