<?php 
include('server.php');

    if (!isset($_SESSION['username'])) {
      $_SESSION['msg'] = "You must log in first";
      header('location: login.php');
    }
    if (isset($_GET['logout'])) {
      session_destroy();
      unset($_SESSION['username']);
      header("location: login.php");
    }
?>
<!DOCTYPE html>
<html>
<title>Salon de Bro</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="bootstrap-4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
<body>
<style type="text/css">
.navbar-logo {
  width: 90px;
}
</style>

<!-- !PAGE CONTENT! -->
<!-- Header -->
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
                    <a class="dropdown-item" href="viewsalary.php">View Salary</a>
                  </div>
                </div>&nbsp; &nbsp; &nbsp; &nbsp;
                <div class="dropdown">
                  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Customer
                  </button>

                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="viewcustomer.php">View Customer</a>
                    <a class="dropdown-item" href="services.php">View Services</a>
                    <a class="dropdown-item" href="tools.php">View Tools</a>
                  </div>
                </div>
            </ul>
        </div>
    </div>
</nav>
</div>
<div class="container-fluid p-0">
  <img src="Shelton.png" class="img-fluid w-100" alt="Responsive image">
</div>
<!-- End Page Content -->
<!-- Footer -->
<footer class="w3-container w3-center w3-opacity w3-margin-bottom">
  <h5>Find Us On</h5>
  <div class="w3-xlarge w3-padding-16">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
</footer>
        <div class="col sm-6">
          <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank" class="w3-hover-text-green">Linux</a></p>
        </div>
      </footer>
<script src="bootstrap-4.0.0/dist/js/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="bootstrap-4.0.0/dist/js/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="bootstrap-4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      
</div>
</div>
</div>
</body>
</html>
