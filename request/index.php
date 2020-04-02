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
						Select Module Number
					</span>
				<div class="login100-pic js-tilt" data-tilt>
					<img src="img/img-01.png" alt="IMG">
				</div>

						<select class="btn btn-dark dropdown-toggle" id="select-id" required style="font-family: Montserrat-Light; font-size: 22px;">
						      <option value="" selected="">Select Module Number</option>
							  <option value="requestpanellogin.php">1</option>
							  <option value="requestpanellogin1.php">2</option>
							  <option value="requestpanellogin2.php">3</option>
							  <option value="requestpanellogin3.php">4</option>
							  <option value="requestpanellogin4.php">5</option>
							  <option value="requestpanellogin5.php">6</option>
							  <option value="requestpanellogin6.php">7</option>
							  <option value="requestpanellogin7.php">8</option>
							  <option value="requestpanellogin8.php">9</option>
							  <option value="requestpanellogin9.php">10</option>
							  <option value="requestpanellogin10.php">11</option>
							  <option value="requestpanellogin11.php">12</option>
						</select>
						<div class="container-login100-form-btn">
						<button onclick="siteRedirect()" class="login100-form-btn">
							Select
						</button>
					</div>

						</select>


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
    <script>
  function siteRedirect() {
    var selectbox = document.getElementById("select-id");
    var selectedValue = selectbox.options[selectbox.selectedIndex].value;
    window.location.href = selectedValue;
  }

</script>


</body>
</html>

