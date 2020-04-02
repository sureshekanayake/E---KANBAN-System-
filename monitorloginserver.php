<?php
session_start();

$user_id ="";
$first_name ="";
$username = "";
$mobile = "";
$password = "";
$errors = array(); 

$db = mysqli_connect('localhost', 'root', '', 'E_KANBAN');


if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);


  if (count($errors) == 0) {
    $password = md5($password);
    $query = "SELECT * FROM admin_panel_user WHERE username='$username' AND password='$password'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['monitor_username'] =$username;
      $_SESSION['user_id'] =$user_id;
      $_SESSION['success'] = "You are now logged in";
      header('location: androidapppanelhome.php');
    }else {
      echo '<script>alert("Password Incorrect.")</script>';
    }
  }
}

?>