<?php

session_start();

if (isset($_SESSION["admin_id"])) {
	session_destroy();
	header("location:androidapplogin.php");
}else{
	header("location:androidapplogin.php");
}


?>