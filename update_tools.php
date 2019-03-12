<?php 
include('addtools.php');
  
  $id = $_GET['id'];
  $sql = "SELECT * FROM tools_items WHERE id_no = '$id'";
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
  <form method="post" action="update_tools.php"> 
   <?php 
    if(mysqli_num_rows($result)>0){
      while($row = mysqli_fetch_array($result)){
    ?>
  <div class="form-group">
    <label for="NameDemo1">ID No:</label>
    <input type="number" class="form-control col-md-12" name="id_no" value="<?php echo $row['id_no'];?>" required>
    <input type="hidden" name="id" value="<?php echo $row['id_no'];?>">
  </div>
  <div class="form-group">
    <label for="NameDemo2">Description:</label>
    <input type="text" class="form-control col-md-12" name="description" value="<?php echo $row['description'];?>"  required> 
  </div>  
    <div class="form-group">
    <label for="NameDemo2">Amount:</label>
    <input type="number" class="form-control col-md-12" name="amount" value="<?php echo $row['amount'];?>" required> 
  </div>  
    <div class="form-group">
    <label for="NameDemo2">Quantity:</label>
    <input type="number" class="form-control col-md-12" name="quantity" value="<?php echo $row['quantity'];?>" required> 
  </div>
    <div class="form-group">
    <label for="NameDemo2">Unit:</label>
    <input type="number" class="form-control col-md-12" name="unit" value="<?php echo $row['unit'];?>" required> 
  </div> 
  <input type="submit" name="update" value="Save">
  <button type="button" onclick="window.location.href='viewtools.php'">Back</button>
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

