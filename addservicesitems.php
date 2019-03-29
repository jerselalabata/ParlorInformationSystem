<?php 
$username = "";
$email    = "";
$errors = array(); 
$name = "";
$numbers = "";
$user_id ="";
$id = 0;
$update = false;
// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'Parlordatabase');
  

  if (isset($_POST['add'])){
    $customer_id = mysqli_real_escape_string($db, $_POST['customer_id']);
    $reciept_no = mysqli_real_escape_string($db, $_POST['reciept_no']);

    $receit = array();
    $Reciept = '';
    $Services = $_POST['services_list'];

    $Customer = "INSERT INTO services_availed (customer_id, reciept_no) VALUES ($customer_id, '$reciept_no')";
    mysqli_query($db, $Customer);

    for($i = 0; $i < count($_POST['services_list']); $i++){
      $receit[] = $reciept_no;
    }

    for($num = 0; $num < count($_POST['services_list']); $num++){
      $services_1 = mysqli_real_escape_string($db, $Services[$num]);
      $receipt_1 = mysqli_real_escape_string($db, $receit[$num]);
      $Reciept.= "INSERT INTO services_items (services_code, reciept_no) VALUES ('$services_1', '$receipt_1');";

    }

    if($Reciept != ''){
      if(mysqli_multi_query($db, $Reciept) == true){
        echo "<script> alert('Successfuly Added!'); window.location.href='viewservicesitems.php' </script>";
      }
      else{
        echo "<script> alert('Error!'')</script>";
      }
    }

  }

?>