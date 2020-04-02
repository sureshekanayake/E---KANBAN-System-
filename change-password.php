<?php
session_start();
if (!isset($_SESSION['admin_id'])) {
  header("location:adminlogin.php");
}
error_reporting(0);
include('includes/dbconnection.php');
error_reporting(0);
if(isset($_POST['submit']))
{
$adminusername=$_SESSION['admin_username'];
$cpassword=md5($_POST['currentpassword']);
$newpassword=md5($_POST['newpassword']);
$sql ="SELECT username FROM admin WHERE username=:adminusername and password=:cpassword";
$query= $dbh -> prepare($sql);
$query-> bindParam(':adminusername', $adminusername, PDO::PARAM_STR);
$query-> bindParam(':cpassword', $cpassword, PDO::PARAM_STR);
$query-> execute();
$results = $query -> fetchAll(PDO::FETCH_OBJ);

if($query -> rowCount() > 0)
{
$con="update admin set password=:newpassword where username=:adminusername";
$chngpwd1 = $dbh->prepare($con);
$chngpwd1-> bindParam(':adminusername', $adminusername, PDO::PARAM_STR);
$chngpwd1-> bindParam(':newpassword', $newpassword, PDO::PARAM_STR);
$chngpwd1->execute();

echo '<script>alert("Your password successully changed")</script>';
 echo "<script>window.location.href ='change-password.php'</script>";
} else {
echo '<script>alert("Your current password is wrong")</script>';

}



}

  
  ?>
<?php include_once("./templates/top.php"); ?>
<?php include_once("./templates/navbar.php"); ?>
<?php include_once("./templates/sidebar.php"); ?>
<!DOCTYPE html>
<html>
<head>
  <title>E-KANBAN SYSTEM</title>
  <link rel="stylesheet" type="text/css" href="css/main2.css">


    <script type="text/javascript">
function checkpass()
{
if(document.changepassword.newpassword.value!=document.changepassword.confirmpassword.value)
{
alert('New Password and Confirm Password field does not match');
document.changepassword.confirmpassword.focus();
return false;
}
return true;
}   

</script>
</head>

<body>
  <div class="container-contact100">

    <div class="wrap-contact100">
      <div class="contact100-form-title" style="background-image: url(img/bg-02.jpg);">
        <span class="contact100-form-title-1">
          Admin Panel Password Change
        </span>

        <span class="contact100-form-title-2">
          Change Your Current Password
        </span>
      </div>
                                                    
         <form class="contact100-form validate-form" method="post" onsubmit="return checkpass();" name="changepassword" method="post">
                                                      
            <div class="wrap-input100 validate-input">
              <span class="label-input100">Current Password:</span>
              <input class="input100" type="password" name="currentpassword" placeholder="Enter Current Password"  required>
              <span class="focus-input100"></span>
            </div>

            <div class="wrap-input100 validate-input">
              <span class="label-input100">New Password:</span>
              <input class="input100" type="password" name="newpassword" placeholder="Enter New Password" required>
              <span class="focus-input100"></span>
            </div>


            <div class="wrap-input100 validate-input">
              <span class="label-input100">Confirm Password:</span>
              <input class="input100" type="password" name="confirmpassword" placeholder="Confirm New Password" required>
              <span class="focus-input100"></span>
            </div>

                                                 
                                                 
            <div class="container-contact100-form-btn">
          <button type="submit" class="contact100-form-btn" name="submit">
            <span>
              Save Change
              <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
            </span>
          </button>
        </div>
    </form>

        </div>
    </div>
  
    <!-- jquery
		============================================ -->
    <script src="js/vendor/jquery-1.11.3.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="js/jquery.meanmenu.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- counterup JS
		============================================ -->
    <script src="js/counterup/jquery.counterup.min.js"></script>
    <script src="js/counterup/waypoints.min.js"></script>
    <!-- modal JS
		============================================ -->
    <script src="js/modal-active.js"></script>
    <!-- icheck JS
		============================================ -->
    <script src="js/icheck/icheck.min.js"></script>
    <script src="js/icheck/icheck-active.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>
</body>

</html><?php   ?>