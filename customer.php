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
                    <a class="dropdown-item" href="employee.php">View Eployee</a>
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
 <h1>Customer Table</h1>
<table class="table">
  <thead class="thead-dark">
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
<!-- Button trigger modal -->
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
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
.formcls { 
    padding: 9px; 
    border: solid 1px #408080; 
    outline: 0; 
    background: -webkit-gradient(linear, left top, left 25, from(#FFFFFF), color-stop(4%, #9DCECE), to(#FFFFFF)); 
    background: -moz-linear-gradient(top, #FFFFFF, #9DCECE 1px, #FFFFFF 25px); 
    box-shadow: rgba(0,0,0, 0.1) 0px 0px 8px; 
    -moz-box-shadow: rgba(0,0,0, 0.1) 0px 0px 8px; 
    -webkit-box-shadow: rgba(0,0,0, 0.1) 0px 0px 8px; 

    } 
#postdiv{
    margin-left: 50px;
    width:30%;
    background-color:#eee;
}   
</style>

</head>

<body>
<div class="container">
<h1>A demo of $_POST with Bootstrap</h1>
    <form class="form-horizontal" role="form" method="post" action="">
      <div class="form-group">
        <label for="name1" class="col-sm-2 control-label">Name:</label>
        <div class="col-sm-4">
          <input type="text" class="form-control formcls" name="postname" placeholder="Enter Your Full Name">
        </div>
      </div>
      <div class="form-group">
        <label for="gender1" class="col-sm-2 control-label">Gender:</label>
        <div class="col-sm-2">
        <select class="form-control formcls" name="postgender">
          <option>Male</option>
          <option>Female</option>
        </select>          
          
        </div>
      </div>      
      <div class="form-group">
        <label for="email1" class="col-sm-2 control-label">Email:</label>
        <div class="col-sm-5">
          <input type="email" class="form-control formcls" name="postemail" placeholder="Enter Email">
        </div>
      </div>
      <div class="form-group">
        <label for="password1" class="col-sm-2 control-label">Password:</label>
        <div class="col-sm-3">
          <input type="password" class="form-control formcls" name="postpassword" placeholder="Password here">
        </div>
      </div>
      <div class="form-group">
        <label for="address1" class="col-sm-2 control-label">Address:</label>
        <div class="col-sm-5">
          <input type="text" class="form-control formcls" name="postaddress" placeholder="Full Address">
        </div>
      </div>            
   </div> 
        <div class="col-sm-offset-2 col-sm-5">   
        <p><input type="submit" class="btn btn-lg btn-block btn-info" value="Submit"></p>
        </div><br /><br /><br />
        <div id="postdiv"><h3>You entered following data!</h3></div>
     </form>
     
< ?php
$post_name=$_POST["postname"];
$post_gender=$_POST["postgender"];
$post_email=$_POST["postemail"];
$post_password=$_POST["postpassword"];
$post_address=$_POST["postaddress"];

 
if( $post_name )
 
{
 
   echo "Name entered is: ". $post_name ."<br>";
   echo "Gender:" .$post_gender ."<br>";
   echo "Email:" .$post_email ."<br>";
   echo "Password:" .$post_password ."<br>";
   echo "Address:" .$post_address ."<br>";

 
}
?>
</body>
</html>

