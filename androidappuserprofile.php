<?php session_start(); 
if (!isset($_SESSION['admin_id'])) {
  header("location:adminlogin.php");
}
?>
<?php include('androidappuserprofileserver.php') ?>
<?php include_once("./templates/top.php"); ?>
<?php include_once("./templates/navbar.php"); ?>
<?php include_once("./templates/sidebar.php"); ?>
<?php include_once("./templates/footer.php"); ?>
<!DOCTYPE html>
<html>
<head>
  <title>E-KANBAN SYSTEM</title>
  <link rel="stylesheet" type="text/css" href="css/main2.css">
</head>
<body>
  <div class="container-contact100">

    <div class="wrap-contact100">
      <div class="contact100-form-title" style="background-image: url(img/bg-02.jpg);">
        <span class="contact100-form-title-1">
          Machine Operators Account
        </span>

        <span class="contact100-form-title-2">
          Create Account for Machine Operators
        </span>
      </div>

      <form class="contact100-form validate-form" action="androidappuserprofile.php" method="post">
        <?php include('errors.php'); ?>
        <div class="wrap-input100 validate-input">
          <span class="label-input100">First Name:</span>
          <input class="input100" type="text" name="first_name" placeholder="Enter First name" value="<?php echo $first_name; ?>" required>
          <span class="focus-input100"></span>
        </div>

        <div class="wrap-input100 validate-input">
          <span class="label-input100">Last Name:</span>
          <input class="input100" type="text" name="last_name" placeholder="Enter Last name" value="<?php echo $last_name; ?>">
          <span class="focus-input100"></span>
        </div>

        <div class="wrap-input100 validate-input">
          <span class="label-input100">Contact Number:</span>
          <input class="input100" type="text" name="mobile" placeholder="Enter Contact Number" value="<?php echo $mobile; ?>"required>
          <span class="focus-input100"></span>
        </div>

        <div class="wrap-input100 validate-input">
          <span class="label-input100">Username:</span>
          <input class="input100" type="text" name="username" placeholder="Enter Username" value="<?php echo $username; ?>"required>
          <span class="focus-input100"></span>
        </div>

        <div class="wrap-input100 validate-input">
          <span class="label-input100">E.P.F. Number:</span>
          <input class="input100" name="epfno" placeholder="Enter E.P.F. Number" value="<?php echo $epfno; ?>"required>
          <span class="focus-input100"></span>
        </div>

        <div class="container-contact100-form-btn">
          <button type="submit" class="contact100-form-btn" name="reg_user">
            <span>
              Register
              <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
            </span>
          </button>
        </div>
      </form>
    </div>
  </div>

  <h2 style="font-family: Montserrat-Light; text-align: center; font-weight: bold;">Machine Operators Accounts</h2><br>    
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th style="font-family:Montserrat-Light; font-size:24px;">Name</th>
              <th style="font-family:Montserrat-Light; font-size:24px;">Contact Number</th>
              <th style="font-family:Montserrat-Light; font-size:24px;">Username</th>
              <th style="font-family:Montserrat-Light; font-size:24px;">E.P.F. Number</th>
              <th style="font-family:Montserrat-Light; font-size:24px;">Action</th>
            </tr>
          </thead>
          <tbody id="customer_list" style="font-family: Montserrat-Light; font-size: 22px;">
          
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>




<script type="text/javascript" src="./js/androidappuserprofile.js"></script>

</body>
</html>
