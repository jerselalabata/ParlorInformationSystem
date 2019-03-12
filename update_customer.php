<?php 
include('addcustomer.php');
  
  $id = $_GET['id'];
  $sql = "SELECT * FROM customer_table WHERE customer_id = '$id'";
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
  <form method="post" action="update_customer.php"> 
   <?php 
    if(mysqli_num_rows($result)>0){
      while($row = mysqli_fetch_array($result)){

    ?>
  <div class="form-group">
    <label for="NameDemo1">Customer No:</label>
    <input type="number" class="form-control col-md-12" name="customer_id" value="<?php echo $row['customer_id'];?>" name="" placeholder="Customer No" required>
    <input type="hidden" name="id" value="<?php echo $row['customer_id'];?>">
  </div>
  <div class="form-group">
    <label for="NameDemo2">First xName:</label>
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
    <label for="NameDemo2">Contact No:</label>
    <input type="number" class="form-control col-md-12" name="contact_no" value="<?php echo $row['contact_no'];?>" placeholder="Contact No" required> 
  </div> 
    <div class="form-group">
    <label for="NameDemo2">Purok:</label>
    <input type="text" class="form-control col-md-12" name="purok" value="<?php echo $row['purok'];?>" placeholder="Purok" required> 
  </div> 
    <div class="form-group">
    <label for="NameDemo2">Barangay:</label>
    <input type="text" class="form-control col-md-12" name="barangay" value="<?php echo $row['barangay'];?>" placeholder="Barangay" required> 
  </div>    
    <div class="form-group">
    <label for="NameDemo2">City:</label>
    <input type="text" class="form-control col-md-12" name="city" value="<?php echo $row['city'];?>" placeholder="City" required> 
  </div> 
    <div class="form-group">
    <label for="NameDemo2">Zip Code:</label>
    <input type="number" class="form-control col-md-12" name="zip_code" value="<?php echo $row['zip_code'];?>" placeholder="Zip Code" required> 
  </div> 

  <input type="submit" name="update" value="Save">
  <button type="button" onclick="window.location.href='viewcustomer.php'">Back</button>
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

