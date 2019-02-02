<!DOCTYPE html>
<html>
<head>
  <title>Parlor de Bro</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="bootstrap-4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
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
                    <a class="nav-link" href="welcome.php">Welcome</a>
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
                    Menu
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="viewemployee.php">View Eployee</a>
                    <a class="dropdown-item" href="customer.php">View Customer</a>
                    <a class="dropdown-item" href="services.php">View Services</a>
                    <a class="dropdown-item" href="tools.php">View Tools</a>
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
      <th>Customer Table</th>
      <th></th>
      <th></th>
      <th></th>
      <th><button type="button" class="btn btn-primary"  data-toggle="modal" data-target="#Modal-large-demo"><i class="fa fa-plus" aria-hidden="true"></i> Add Customer</th>
      
    </ul>

    <tr>
      <th scope="col">ID #</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Middle</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1</td>
      <td>Mark</td>
      <td>Otto</td>
      <td>M.</td>
      <td>
        <a href="#" button type="button" class="btn btn-success"><i class="fa fa-edit" aria-hidden="true"></i> Edit</button></a>
        <a href="#" button type="button" class="btn btn-dark"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button></a>
      </td>
    </tr>
    <tr>
      <td>2</td>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>N.</td>
      <td>
        <a href="#" button type="button" class="btn btn-success"><i class="fa fa-edit" aria-hidden="true"></i> Edit</button></a>
        <a href="#" button type="button" class="btn btn-dark"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button></a>
      </td>
    </tr>
    <tr>
      <td>3</td>
      <td>Larry</td>
      <td>the Bird</td>
      <td>O.</td>
      <td>        
        <button type="button" class="btn btn-success"><i class="fa fa-edit" aria-hidden="true"></i> Edit</button>
        <button type="button" class="btn btn-dark"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
      </td>
    </tr>
  </tbody>
</table>
  </tbody>
</table>
<!--<a href="" class="btn btn-outline-primary" type="button" style="position: absolute;right: 2%;bottom: 3%">Add</a> -->
</body>
<script src="bootstrap-4.0.0/dist/js/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="bootstrap-4.0.0/dist/js/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="bootstrap-4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<div class="container">
<!-- Button trigger modal 
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modal-large-demo">
  Add Customer
</button>


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
<form id="bs-validate-demo" novalidate>

  <div class="form-group">
    <label for="NameDemo1">First Name:</label>
    <input type="text" class="form-control col-md-12" id="NameDemo1" aria-describedby="nameHelp" placeholder="Enter First Name" required>
        <div class="invalid-feedback">
          Please enter your first name.
        </div>
  </div>
  <div class="form-group">
    <label for="NameDemo2">Last Name:</label>
    <input type="text" class="form-control col-md-12" id="NameDemo2" aria-describedby="nameHelp" placeholder="Enter Last Name" required>
    <small id="nameHelp" class="form-text text-muted">Please enter your last name</small>
      <div class="invalid-feedback">
        Last name is also required!
      </div>    
  </div>  
  <div class="form-group">
    <label for="EmailDemo">Your Email:</label>
    <input type="email" class="form-control col-md-12" id="EmailDemo" placeholder="Enter email" required>
      <div class="invalid-feedback">
        Please Enter a valid email address!
      </div>  
  </div>
  <div class="form-group">
    <label for="passDemo">Enter Password:</label>
    <input type="password" class="form-control col-md-12" id="passDemo" aria-describedby="passHelp" placeholder="Password" required>
      <div class="invalid-feedback">
        Enter the correct password!
      </div>  
  </div>
  
  <div class="form-group col-md-2">
    <label for="selectDemo">Select Year</label>
    <select class="form-control" id="selectDemo">
      <option>1980</option>
      <option>1981</option>
      <option>1982</option>
      <option>1982</option>
      <option>....</option>
    </select>
  </div>
 
  <button type="submit" class="btn btn-dark">Create My Account</button>
</form>
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
        <button type="button" class="btn btn-danger" data-dismiss="modal">OK</button>
        <button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>
</div>
</body>
</html>
