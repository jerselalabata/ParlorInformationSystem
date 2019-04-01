<?php include('addcustomer.php');
  
  $sql = "SELECT * FROM customer_table";
  $result = mysqli_query($db, $sql);
?>
<!DOCTYPE html>
<html>
<head>
  <title>Parlor de Bro</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="bootstrap-4.0.0/dist/css/bootstrap.min.css">
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
                    <a class="nav-link" href="index.php">Welcome</a>
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
      <th>Customer</th>
      <th></th>
      <th></th>
      <th></th>
      <th></th>
      <th></th>
      <th></th>
      <th></th>
      <th></th>
      <th><button type="button" class="btn btn-primary"  data-toggle="modal" data-target="#Modal-large-demo"><i class="fa fa-plus" aria-hidden="true"></i> Add Customer</th>
      
    </ul>
    <tr>
      <th scope="col">Cus#</th>
      <th scope="col">First</th>
      <th scope="col">Middle</th>
      <th scope="col">Last</th>
      <th scope="col">Phone</th>
      <th scope="col">Purok</th>
      <th scope="col">Barangay</th>
      <th scope="col">City</th>
      <th scope="col">Zip Code</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
<?php
        if(mysqli_num_rows($result)>0){
          while($row = mysqli_fetch_array($result)){
?>            
  <tbody>
    <tr>
      <td><?php echo $row['customer_id'];?></td>
      <td><?php echo $row['first_name'];?></td>
      <td><?php echo $row['middle_initial'];?></td>
      <td><?php echo $row['last_name'];?></td>
      <td><?php echo $row['contact_no'];?></td>
      <td><?php echo $row['purok'];?></td>
      <td><?php echo $row['barangay'];?></td>
      <td><?php echo $row['city'];?></td>
      <td><?php echo $row['zip_code'];?></td>
      <td>


        <a href='update_customer.php?id=<?php echo $row['customer_id']; ?>' button type="button" class="btn btn-success"><i class="fa fa-edit" aria-hidden="true"></i> Edit</button></a>
        <a href='addcustomer.php?delete=<?php echo $row['customer_id']; ?>'" button type="button" class="btn btn-dark"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button></a>
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
<script src="bootstrap-4.0.0/dist/js/jquery-3.2.1.slim.min.js"></script>
<script src="bootstrap-4.0.0/dist/js/popper.min.js"></script>
<script src="bootstrap-4.0.0/dist/js/bootstrap.min.js"></script>

<div class="container">
<!-- Button trigger modal -->

<!-- large size Modal -->
<div class="modal fade" id="Modal-large-demo" tabindex="-1" role="dialog" aria-labelledby="Modal-large-demo-label" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="Modal-large-demo-label">Add Customer</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container">
<!--<h3>Bootstrap 4 Form validation</h3> -->
<form method="post" action="addcustomer.php">

  <div class="form-group">
    <label for="NameDemo1">Customer No:</label>
    <input type="number" class="form-control col-md-12" id="customer_id" name="customer_id" placeholder="Customer No:" required>
  </div>
  <div class="form-group">
    <label for="NameDemo2">First Name:</label>
    <input type="text" class="form-control col-md-12" id="first_name" name="first_name" placeholder="Enter First Name" required> 
  </div>  
  <div class="form-group">
    <label for="NameDemo2">Middle Initial:</label>
    <input type="text" class="form-control col-md-12" id="middle_initial" name="middle_initial" placeholder="Enter Middle Name" required> 
  </div>  
  <div class="form-group">
    <label for="NameDemo2">Last Name:</label>
    <input type="text" class="form-control col-md-12" id="last_name" name="last_name" placeholder="Enter Last Name" required> 
  </div>
  <div class="form-group">
    <label for="NameDemo2">Contact No:</label>
    <input type="number" class="form-control col-md-12" id="contact_no" name="contact_no" placeholder="Enter Contact Number:" required> 
  </div>
  <div class="form-group">
    <label for="NameDemo2">Purok:</label>
    <input type="text" class="form-control col-md-12" id="purok" name="purok" placeholder="Your Purok:" required> 
  </div>
    <div class="form-group">
    <label for="NameDemo2">Barangay:</label>
    <input type="text" class="form-control col-md-12" id="barangay" name="barangay" placeholder="Enter your Barangay" required> 
  </div>
    <div class="form-group">
    <label for="NameDemo2">City:</label>
    <input type="text" class="form-control col-md-12" id="city" name="city" placeholder="Enter your City" required> 
  </div>
    <div class="form-group">
    <label for="NameDemo2">Zip Code:</label>
    <input type="number" class="form-control col-md-12" id="zip_code" name="zip_code" placeholder="Your Zip Code:" required> 
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
        <button type="button" class="btn btn-success" data-dismiss="modal" onclick="window.location.href='viewemployee.php'">Back</button> 
      </div>
    </form>
    </div>
  </div>
</div>
</div>
</body>
</html>
