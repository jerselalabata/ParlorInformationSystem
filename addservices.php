<?php include('server.php');



  $username = $_SESSION['username'];
  
  if(isset($_POST['add'])){
    $services_code    = mysqli_real_escape_string($db,$_POST['services_code']);
    $description    = mysqli_real_escape_string($db,$_POST['description']);
    $amount = mysqli_real_escape_string($db,$_POST['amount']);

    $sql = "INSERT INTO `services` (`services_code`, `description`, `amount`) VALUES ('$services_code', '$description', '$amount')";
    $result = mysqli_query($db, $sql);
    if($result == true){
      header('location: viewservices.php?username='.$username);
    }else{
      echo "Something went wrong";
    }
  }


  if(isset($_POST['update'])){
    $services_code = mysqli_real_escape_string($db,$_POST['services_code']);
    $description  = mysqli_real_escape_string($db,$_POST['description']);
    $amount   = mysqli_real_escape_string($db,$_POST['amount']);

    $sql = "UPDATE `services` SET `services_code` = '$services_code', `description` = '$description', `amount` = '$amount' WHERE `services`.`services_code` = '$services_code'";


    mysqli_query($db, $sql);
    $_SESSION['message'] = "updated!"; 
    header('location: viewservices.php?username='.$username);
  }

  if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    mysqli_query($db, "DELETE FROM `services` WHERE `services`.`services_code` = '$id'" ); 
    header('location: viewservices.php');
  }

    $results = mysqli_query($db, "SELECT * FROM sevices"); 
?>
