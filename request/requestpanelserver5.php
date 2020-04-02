<?php


$username ="";
$appuser_epf_no ="";
$module_no ="";
$shift ="";
$article_name = "";
$quantity    = "";
$article_name1 = "";
$quantity1    = "";
$article_name2 = "";
$quantity2    = "";
$article_name3 = "";
$quantity3    = "";
$article_name4 = "";
$quantity4    = "";
$article_name5 = "";
$quantity5    = "";
$article_name6 = "";
$quantity6    = "";
$article_name7 = "";
$quantity7    = "";
$article_name8 = "";
$quantity8    = "";
$article_name9 = "";
$quantity9    = "";
$article_name10 = "";
$quantity10    = "";
$article_name11 = "";
$quantity11    = "";
$article_name12 = "";
$quantity12    = "";
$article_name13 = "";
$quantity13    = "";
$article_name14 = "";
$quantity14    = "";
$article_name15 = "";
$quantity15    = "";
$errors = array(); 


$db = mysqli_connect('localhost', 'root', '', 'E_KANBAN');


if (isset($_POST['submit'])) {

  $username = mysqli_real_escape_string($db, $_SESSION["username"]);
  $appuser_epf_no = mysqli_real_escape_string($db, $_SESSION["appuser_epf_no"]);
  $module_no = mysqli_real_escape_string($db, $_POST['module']);
  $shift = mysqli_real_escape_string($db, $_POST["shift"]);
  $article_name = mysqli_real_escape_string($db, $_POST['article']);
  $quantity = mysqli_real_escape_string($db, $_POST['quantity']);
  $article_name1 = mysqli_real_escape_string($db, $_POST['article1']);
  $quantity1 = mysqli_real_escape_string($db, $_POST['quantity1']);
  $article_name2 = mysqli_real_escape_string($db, $_POST['article2']);
  $quantity2 = mysqli_real_escape_string($db, $_POST['quantity2']);
  $article_name3 = mysqli_real_escape_string($db, $_POST['article3']);
  $quantity3 = mysqli_real_escape_string($db, $_POST['quantity3']);
  $article_name4 = mysqli_real_escape_string($db, $_POST['article4']);
  $quantity4 = mysqli_real_escape_string($db, $_POST['quantity4']);
  $article_name5 = mysqli_real_escape_string($db, $_POST['article5']);
  $quantity5 = mysqli_real_escape_string($db, $_POST['quantity5']);
  $article_name6 = mysqli_real_escape_string($db, $_POST['article6']);
  $quantity6 = mysqli_real_escape_string($db, $_POST['quantity6']);
  $article_name7 = mysqli_real_escape_string($db, $_POST['article7']);
  $quantity7 = mysqli_real_escape_string($db, $_POST['quantity7']);
  $article_name8 = mysqli_real_escape_string($db, $_POST['article8']);
  $quantity8 = mysqli_real_escape_string($db, $_POST['quantity8']);
  $article_name9 = mysqli_real_escape_string($db, $_POST['article9']);
  $quantity9 = mysqli_real_escape_string($db, $_POST['quantity9']);
  $article_name10 = mysqli_real_escape_string($db, $_POST['article10']);
  $quantity10 = mysqli_real_escape_string($db, $_POST['quantity10']);
  $article_name11 = mysqli_real_escape_string($db, $_POST['article11']);
  $quantity11 = mysqli_real_escape_string($db, $_POST['quantity11']);
  $article_name12 = mysqli_real_escape_string($db, $_POST['article12']);
  $quantity12 = mysqli_real_escape_string($db, $_POST['quantity12']);
  $article_name13 = mysqli_real_escape_string($db, $_POST['article13']);
  $quantity13 = mysqli_real_escape_string($db, $_POST['quantity13']);
  $article_name14 = mysqli_real_escape_string($db, $_POST['article14']);
  $quantity14 = mysqli_real_escape_string($db, $_POST['quantity14']);
  $article_name15 = mysqli_real_escape_string($db, $_POST['article15']);
  $quantity15 = mysqli_real_escape_string($db, $_POST['quantity15']);

  

  if (count($errors) == 0) {
  	

  	$query = "INSERT INTO temporary_orders (admin_name,epf_no,module_no,shift,article_name, quantity,article_name1,quantity1,article_name2,quantity2,article_name3,quantity3,article_name4,quantity4,article_name5,quantity5,article_name6,quantity6,article_name7,quantity7,article_name8,quantity8,article_name9,quantity9,article_name10,quantity10,article_name11,quantity11,article_name12,quantity12,article_name13,quantity13,article_name14,quantity14,article_name15,quantity15,request_date) 
  			  VALUES('$username','$appuser_epf_no','6','$shift','$article_name', '$quantity','$article_name1','$quantity1','$article_name2','$quantity2','$article_name3','$quantity3','$article_name4','$quantity4','$article_name5','$quantity5','$article_name6','$quantity6','$article_name7','$quantity7','$article_name8','$quantity8','$article_name9','$quantity9','$article_name10','$quantity10','$article_name11','$quantity11','$article_name12','$quantity12','$article_name13','$quantity13','$article_name14','$quantity14','$article_name15','$quantity15', CURRENT_TIMESTAMP)";
  	mysqli_query($db, $query);
    header('location: http://192.168.1.6/14/off');


  }
}



?>