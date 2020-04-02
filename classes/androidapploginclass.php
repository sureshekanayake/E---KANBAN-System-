<?php 
session_start();
/**
 * 
 */
class Credentials
{
	
	private $con;

	function __construct()
	{
		include_once("Database.php");
		$db = new Database();
		$this->con = $db->connect();
	}

	


	public function loginAdmin($username, $epfno){
		$q = $this->con->query("SELECT * FROM android_app_users WHERE username = '$username' && epfno ='$epfno'");
		if ($q->num_rows > 0) {
			$row = $q->fetch_assoc();					
				$_SESSION['android_app_user_name'] = $row['username'];
				$_SESSION['user_epf_no'] = $row['epfno'];
				$_SESSION['user_phone'] = $row['mobile'];
				return ['status'=> 202, 'message'=> 'Login Successful'];
		else{
				return ['status'=> 303, 'message'=> 'Login Fail'];
			}
		}else{
			return ['status'=> 303, 'message'=> 'Account not created yet with this username'];
		}
	}

}


if (isset($_POST['admin_login'])) {
	extract($_POST);
	if (!empty($username) && !empty($epfno)) {
		$c = new Credentials();
		$result = $c->loginAdmin($username, $epfno);
		echo json_encode($result);
		exit();
	}else{
		echo json_encode(['status'=> 303, 'message'=> 'Empty fields']);
		exit();
	}
}


?>