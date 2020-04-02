<?php 
session_start();
/**
 * 
 */
class Customers
{
	
	private $con;

	function __construct()
	{
		include_once("Database.php");
		$db = new Database();
		$this->con = $db->connect();
	}

	public function getCustomers(){
		$query = $this->con->query("SELECT `id`, `first_name`, `last_name` ,`username`, `mobile` FROM `admin`");
		$ar = [];
		if (@$query->num_rows > 0) {
			while ($row = $query->fetch_assoc()) {
				$ar[] = $row;
			}
			return ['status'=> 202, 'message'=> $ar];
		}
		return ['status'=> 303, 'message'=> 'no customer data'];
	}


	public function deleteCustomers($aid = null){
		if ($aid != null) {
			$q = $this->con->query("DELETE FROM admin WHERE id = '$aid'");
			if ($q) {
				return ['status'=> 202, 'message'=> 'User Details Removed'];
			}else{
				return ['status'=> 202, 'message'=> 'Failed to run query'];
			}
			
		}else{
			return ['status'=> 303, 'message'=>'Invalid User admin_id'];
		}

	}
	

}


if (isset($_POST["GET_CUSTOMERS"])) {
	if (isset($_SESSION['admin_id'])) {
		$c = new Customers();
		echo json_encode($c->getCustomers());
		exit();
	}
}

if (isset($_POST['DELETE_CUSTOMER'])) {
	if (!empty($_POST['aid'])) {
		$p = new Customers();
		echo json_encode($p->deleteCustomers($_POST['aid']));
		exit();
	}else{
		echo json_encode(['status'=> 303, 'message'=> 'Invalid details']);
		exit();
	}
}



?>