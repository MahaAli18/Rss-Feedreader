<?php
session_start();

if(isset($_POST["register"])){
  $fullname=$_POST['fullname'];
  $email=$_POST['email'];
  $password_1=$_POST['password_1'];
  $password_2=$_POST['password_2'];
  $errors= array();//for storing all errors
  $_SESSION['msg1']="";
  $_SESSION['msg2']="";
  
}

//database connection
$database= new mysqli("127.0.0.1", "root" ,'pass', "feedreader",5000);

if($database->connect_error===TRUE){
  die("connection failed!");
}

//check for email ids that alredy exists

$check_query="SELECT * FROM users where email='$email'";
$result=mysqli_query($database,$check_query);
$users=mysqli_fetch_assoc($result);

if($users){
  if($users['email']===$email)
  array_push($errors,"email alredy exists");
}

///check that both passwords are same
  if($password_1!=$password_2){
  array_push($errors,"the  two password doesnt match");
}

 //print_r($errors) print errors if any


//insertion of farm into data base

if(count($errors)==0){
  $reg_query="INSERT INTO users (id,fullname, email, password_1)
  VALUES('1','".$fullname."','".$email."','".$password_1."')";
  if($database->query($reg_query)){
    echo "You are Successfully registered";
    $_SESSION['fullname']=$fullname;
    $_SESSION['email']=$email;
    $_SESSION['password_1']=$password_1;
    

    header("location: /login");
  }
  else{
    echo "EROR WHILE REGISTERING:" .$database->error;
  }


}

else{
  print_r($errors);
}






?>