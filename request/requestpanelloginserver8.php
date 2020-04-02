<?php
session_start();  

$username = "";
$epfno = "";
$errors = array(); 

$db = mysqli_connect('localhost', 'root', '', 'E_KANBAN');


if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $epfno = mysqli_real_escape_string($db, $_POST['epfno']);


  if (count($errors) == 0) {
    $query = "SELECT * FROM android_app_users WHERE username='$username' AND epfno='$epfno'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['username'] = $username;
      $_SESSION['appuser_epf_no'] = $epfno;
      $_SESSION['success'] = "You are now logged in";
      header('location: requestpanel8.php');
    }else {
      echo '<script>alert("E.P.F. Number Incorrect.")</script>';
    }
  }
}

?>