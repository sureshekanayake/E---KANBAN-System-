<?php


$first_name = "";
$last_name    = "";
$mobile    = "";
$username    = "";
$password    = "";
$password_2    = "";
$number = "/^[0-9]+$/";
$errors = array(); 


$db = mysqli_connect('localhost', 'root', '', 'E_KANBAN');


if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $first_name = mysqli_real_escape_string($db, $_POST['first_name']);
  $last_name = mysqli_real_escape_string($db, $_POST['last_name']);
  $mobile = mysqli_real_escape_string($db, $_POST['mobile']);
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);


  if ($password != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  if(!preg_match($number,$mobile)){
     array_push($errors, "Contact Number is not Valid.");}
  


  $user_check_query = "SELECT * FROM admin_panel_user WHERE username='$username' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { 
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['mobile'] === $mobile) {
      array_push($errors, "Contact Number already exists");
    }
  }

 
  if (count($errors) == 0) {
    $password = md5($password);


  	$query = "INSERT INTO admin_panel_user (first_name, last_name, mobile, username, password) 
  			  VALUES('$first_name', '$last_name', '$mobile', '$username', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['success'] = "Registered Successfully";
  	header('location: adminpaneluserprofile.php');
    
  }
}



?>