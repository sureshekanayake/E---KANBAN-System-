<?php session_start(); 
if (!isset($_SESSION['admin_id'])) {
  header("location:adminlogin.php");
}
?>
<?php include('adminpaneluserprofileserver.php') ?>
<?php include_once("./templates/top.php"); ?>
<?php include_once("./templates/navbar.php"); ?>
<?php include_once("./templates/sidebar.php"); ?>
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
          Monitor Panel Operators Account
        </span>

        <span class="contact100-form-title-2">
          Create Account for Monitor Panel
        </span>
      </div>

      <form class="contact100-form validate-form" action="adminpaneluserprofile.php" method="post">
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
          <span class="label-input100">Password:</span>
          <input class="input100" type="password" name="password" placeholder="Enter Password" value="<?php echo $password; ?>"required>
          <span class="focus-input100"></span>
        </div>

        <div class="wrap-input100 validate-input">
          <span class="label-input100">Confirm Password:</span>
          <input class="input100" type="password" name="password_2" placeholder="Enter Password Again" value="<?php echo $password_2; ?>"required>
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
  <br>
    <h2 style="font-family: Montserrat-Light; text-align: center; font-weight: bold;">Monitor Panel Operators Accounts</h2><br>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th style="font-family:Montserrat-Light; font-size:24px;">Name</th>
              <th style="font-family:Montserrat-Light; font-size:24px;">Mobile</th>
              <th style="font-family:Montserrat-Light; font-size:24px;">Username</th>
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


<?php include_once("./templates/footer.php"); ?>


<script type="text/javascript" src="./js/adminpaneluserprofile.js"></script>

</body>
</html>
