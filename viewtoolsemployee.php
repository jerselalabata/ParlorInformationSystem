<?php include('addtoolsemployee.php');
  
  $sql = "SELECT * FROM tools_employee ";
  $result = mysqli_query($db, $sql);
?>
<!DOCTYPE html>
<html>
<head>
  <title>Parlor de Bro</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="bootstrap-4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!--<link rel="stylesheet" type="text/css" href="style.css"> -->
</head>

<body>
<div class="container-fluid p-0">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar10">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="navbar10">
            <ul class="navbar-nav nav-fill w-100">
                <li class="nav-item">
                    <a class="nav-link" href="#">Welcome</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">News</a>
                </li>
                <li class="nav-item">
                    <a href="index.php?logout='1'" class="btn" type="button" style="color: white;">Log out</a>
                </li>
                <div class="dropdown">
                  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Employee
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="viewjob.php?username=<?php echo $_GET['username']; ?>">View Job</a>
                    <a class="dropdown-item" href="viewemployee.php?username=<?php echo $_GET['username']; ?>">View Employee</a>
                    <a class="dropdown-item" href="viewtoolsemployee.php?username=<?php echo $_GET['username']; ?>">View Tools Employee</a>
                    <a class="dropdown-item" href="viewsalary.php">View Salary</a>
                  </div>
                </div>&nbsp; &nbsp; &nbsp; &nbsp;
                <div class="dropdown">
                  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Customer
                  </button>

                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="viewcustomer.php">View Customer</a>
                    <a class="dropdown-item" href="viewservices.php">View Services</a>
                    <a class="dropdown-item" href="viewservicesitems.php">View Services Items</a>
                    <a class="dropdown-item" href="viewtools.php">View Tools</a>
                    <a class="dropdown-item" href="viewtoolsemployee.php">View Tools Employee</a>
                  </div>
                </div>
            </ul>
        </div>
    </div>
</nav>
</div>
<!-- table    -->
<div class="container">
<table class="table">
  <thead class="thead-dark">
      <ul>
      <th>Tools Employee</th>
      <th></th>
      <th></th>
      <th></th>
      <th><button type="button" class="btn btn-primary"  data-toggle="modal" data-target="#Modal-large-demo"><i class="fa fa-plus" aria-hidden="true"></i> Add Tools Employee</th>
      
    </ul>
    <tr>
      <th scope="col">Emp No</th>
      <th scope="col">Tools ID</th>
      <th scope="col">Quantity</th>
      <th scope="col">Time Stamp</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
<?php
        if(mysqli_num_rows($result)>0){
          while($row = mysqli_fetch_array($result)){
?>        
  <tbody>
    <tr>
      <td><?php echo $row['emp_id'];?></td>
      <td><?php echo $row['id_no'];?></td>
      <td><?php echo $row['quantity'];?></td>
      <td><?php echo $row['time_stamp'];?></td>
      <td>


        <a href='update_toolsemployee.php?id=<?php echo $row['toolemployee_id']; ?>' button type="button" class="btn btn-success"><i class="fa fa-edit" aria-hidden="true"></i> Edit</button></a>
        <a href='addtoolsemployee.php?delete=<?php echo $row['toolemployee_id']; ?>'" button type="button" class="btn btn-dark"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button></a>
      </td>
    </tr>
  </tbody>
      <?php 
          }
        }
      ?>
</table>
  </tbody>
</table>
<!--<a href="" class="btn btn-outline-primary" type="button" style="position: absolute;right: 2%;bottom: 3%">Add</a> -->
</body>
<script src="bootstrap-4.0.0/dist/js/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="bootstrap-4.0.0/dist/js/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="bootstrap-4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<div class="container">
<!-- Button trigger modal -->
<?php
  
  // $sql = "SELECT * FROM employee, tools_employee, tools_items WHERE employee.emp_id=tools_employee.emp_id AND tools_employee.id_no=tools_items.id_no";
  // $result = mysqli_query($db, $sql);
?>

<!-- large size Modal -->
<div class="modal fade" id="Modal-large-demo" tabindex="-1" role="dialog" aria-labelledby="Modal-large-demo-label" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="Modal-large-demo-label">Add Tools Employee</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container">
<!--<h3>Bootstrap 4 Form validation</h3> -->
<form method="post" action="addtoolsemployee.php">

    <label>Emp ID:</label>
    <select name="emp_id">
      <?php
         $sql = "SELECT * FROM employee";
         $result = mysqli_query($db, $sql);
        if(mysqli_num_rows($result)){
          while($row = mysqli_fetch_array($result)){
      ?>
      <option value="<?php echo $row['emp_id'];?>"><?php echo $row['emp_id'];?></option>
      <?php
          }
        }
      ?>
    </select>
    <label>ID No:</label>
    <select name="id_no">
      <?php 
         $sql1 = "SELECT * FROM tools_items";
         $result1 = mysqli_query($db, $sql1);
        if(mysqli_num_rows($result1)){
          while($row = mysqli_fetch_array($result1)){
      ?>
      <option value="<?php echo $row['id_no'];?>"><?php echo $row['id_no'];?></option>
      <?php
          }
        }
      ?>
    </select>
  <div class="form-group">
    <label for="NameDemo2">Quantity:</label>
    <input type="number" class="form-control col-md-12" id="quantity" name="quantity" placeholder="Quantity" required> 
  </div>
</div>

<script>
(function() {
  'use strict';

  window.addEventListener('load', function() {
    var form = document.getElementById('bs-validate-demo');
    form.addEventListener('submit', function(event) {
      if (form.checkValidity() === false) {
        event.preventDefault();
        event.stopPropagation();
      }
      form.classList.add('was-validated');
    }, false);
  }, false);
})();
</script>
      </div>
      <div class="modal-footer">
        <input type="submit" name="add" value="Save">
        <button type="button" class="btn btn-success" data-dismiss="modal" onclick="window.location.href='viewtools.php'">Back</button> 
      </div>
    </form>
    </div>
  </div>
</div>
</div>
</body>
</html>
