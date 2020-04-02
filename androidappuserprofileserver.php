<?php


$first_name = "";
$last_name    = "";
$mobile    = "";
$username    = "";
$epfno ="";
$number = "/^[0-9]+$/";
$errors = array(); 


$db = mysqli_connect('localhost', 'root', '', 'E_KANBAN');


if (isset($_POST['reg_user'])) {

  $first_name = mysqli_real_escape_string($db, $_POST['first_name']);
  $last_name = mysqli_real_escape_string($db, $_POST['last_name']);
  $mobile = mysqli_real_escape_string($db, $_POST['mobile']);
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $epfno = mysqli_real_escape_string($db, $_POST['epfno']);


  if(!preg_match($number,$mobile)){
     array_push($errors, "Contact Number is not Valid.");}


  $user_check_query = "SELECT * FROM android_app_users WHERE username='$username' OR epfno='$epfno' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { 
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['epfno'] === $epfno) {
      array_push($errors, "E.P.F. Number already exists");
    }
  }
  if (count($errors) == 0) {
 
  	$query = "INSERT INTO android_app_users (first_name, last_name, mobile, username, epfno) 
  			  VALUES('$first_name', '$last_name', '$mobile', '$username', '$epfno')";
  	mysqli_query($db, $query);
  	$_SESSION['first_name'] = $first_name;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: androidappuserprofile.php');
  }
}




?>