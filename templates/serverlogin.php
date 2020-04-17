<?php

session_start();


if (isset($_POST['login'])) {
  $fullname = $_POST['fullname'];
  $password_1 = $_POST['password_1'];
  $errors= array();
  $_SESSION['password_1']="$password_1";
 
  
//   $_SESSION['e']="incorrect ID or Password";
}

 //database connection
$database= new mysqli("127.0.0.1", "root" ,'pass', "feedreader", 5000);

if($database->connect_error===TRUE){
  die("connection failed!");
}

  if (count($errors) == 0) {
  	$query = "SELECT * FROM users WHERE fullname='$fullname' AND password_1='$password_1'";
  	$results = mysqli_query($database, $query);
  	if (mysqli_num_rows($results) == 1) {
        $_SESSION['fullname']=$fullname;
        $_SESSION['password_1']=$password_1;

  	  header('location: /sources');
      }
      else {
          array_push($errors, "Wrong username/password combination");
          $_SESSION['e']="Wrong username/password combination";
          header('location: loginsign.php');
  	}
  }


?>