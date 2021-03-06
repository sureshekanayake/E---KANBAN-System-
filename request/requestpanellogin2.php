<?php include('requestpanelloginserver2.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>E-KANBAN SYSTEM</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="img/png" href="img/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->

</head>
<body>

	<div class="limiter">
		<div class="container-login100" style="background-image: url('img/hero_1.jpg');">
			<div class="heading1"><label><span class="typed-words"></span></label><br>
			<div class="wrap-login100">
				<span class="login100-form-title">
						User Login
					</span>
				<div class="login100-pic js-tilt" data-tilt>
					<img src="img/img-01.png" alt="IMG">
				</div>
				<br>

			<form id="admin-login-form" class="login100-form validate-form" method="POST" action="requestpanellogin2.php">
				<?php include('errors.php'); ?>
				

			  <?php
						$mysqli = NEW MySQLi ('localhost','root','','E_KANBAN');

						$resultset = $mysqli->query("SELECT username FROM android_app_users");
						?>           

						<select name="username" class="btn btn-dark dropdown-toggle" required style="font-family: Montserrat-Light; font-size: 22px;">
						    <option value="">Please Select Your Username</option>
						  
						      <?php
						            while ($rows = $resultset->fetch_assoc())
						            {
						              $username = $rows['username'];                
						              echo "<option value='$username'>$username</option>";
						            }


						      ?>

						</select>

			  <div class="wrap-input100 validate-input" data-validate = "E.P.F. No is required">
			    <input class="input100" type="text" name="epfno" placeholder="Enter E.P.F. Number">
			    <span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-address-card-o" aria-hidden="true"></i>
						</span>
			  </div>



			  <div class="container-login100-form-btn">
						<button type="submit" name="login_user" class="login100-form-btn">
							Login
						</button>
					</div>

			</form>

		</div>
	</div>
</div>
</div>


<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js1/main.js"></script>

	<script src="js/typed.js"></script>
            <script>
            var typed = new Typed('.typed-words', {
            strings: ["Welcome to E-KANBAN System"],
            typeSpeed: 80,           
            startDelay: 800,          
            });
            </script>


</body>
</html>

