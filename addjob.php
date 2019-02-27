<?php include('server.php');


  $username = $_SESSION['username'];

  if(isset($_POST['add'])){
    $job_id    = mysqli_real_escape_string($db,$_POST['job_id']);
    $emp_job     = mysqli_real_escape_string($db,$_POST['emp_job']);
    $sql = "INSERT INTO `job` (`job_id`, `emp_job`) VALUES ('$job_id', '$emp_job')";
    $result = mysqli_query($db, $sql);
    if($result == true){
      header('location: viewjob.php?username='.$username);
    }else{
      echo "Something went wrong";
    }
  }


  if(isset($_POST['update'])){
    $id = mysqli_real_escape_string($db,$_POST['id']);
    $job_id  = mysqli_real_escape_string($db,$_POST['job_id']);
    $emp_job   = mysqli_real_escape_string($db,$_POST['emp_job']);

    $sql = "UPDATE `job` SET `job_id` = '$job_id', `emp_job` = '$emp_job' WHERE `job`.`job_id` = '$id'";

    mysqli_query($db, $sql);
    $_SESSION['message'] = "updated!"; 
    header('location: viewjob.php?username='.$username);
  }

  if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    mysqli_query($db, "DELETE FROM `job` WHERE `job`.`job_id` = $id"); 

    header('location: viewjob.php?username='.$username);
  }

    $results = mysqli_query($db, "SELECT * FROM job"); 

