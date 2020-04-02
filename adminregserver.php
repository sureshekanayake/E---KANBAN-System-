<?php


$first_name = "";
$last_name = "";
$username    = "";
$mobile    = "";
$password ="";
$cpassword ="";
$number = "/^[0-9]+$/";
$errors = array(); 


$db = mysqli_connect('localhost', 'root', '', 'E_KANBAN');


if (isset($_POST['reg_user'])) {

  $first_name = mysqli_real_escape_string($db, $_POST['first_name']);
  $last_name = mysqli_real_escape_string($db, $_POST['last_name']);
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $mobile = mysqli_real_escape_string($db, $_POST['mobile']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  $cpassword = mysqli_real_escape_string($db, $_POST['cpassword']);
  
  if ($password != $cpassword) {
  array_push($errors, "The two passwords do not match");
  }

  if(!preg_match($number,$mobile)){
     array_push($errors, "Contact Number is not Valid.");}

  $user_check_query = "SELECT * FROM admin WHERE username='$username' OR password='$password' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { 
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }
  }

  if (count($errors) == 0) {
    $password = md5($password);
 
  	$query = "INSERT INTO admin (first_name, last_name, username, mobile, password) 
  			  VALUES('$first_name','$last_name', '$username','$mobile', '$password')";
  	mysqli_query($db, $query);
    header('location: adminprofilehome.php');
  }
}


?>