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
		$query = $this->con->query("SELECT `user_id`, `first_name`, `last_name`, `mobile`, `username` FROM `admin_panel_user`");
		$ar = [];
		if (@$query->num_rows > 0) {
			while ($row = $query->fetch_assoc()) {
				$ar[] = $row;
			}
			return ['status'=> 202, 'message'=> $ar];
		}
		return ['status'=> 303, 'message'=> 'no customer data'];
	}


	public function getCustomersOrder(){
		$query = $this->con->query("SELECT o.order_id, o.product_id, o.qty, o.trx_id, o.p_status, p.product_title, p.product_image FROM orders o JOIN products p ON o.product_id = p.product_id");
		$ar = [];
		if (@$query->num_rows > 0) {
			while ($row = $query->fetch_assoc()) {
				$ar[] = $row;
			}
			return ['status'=> 202, 'message'=> $ar];
		}
		return ['status'=> 303, 'message'=> 'no orders yet'];
	}

	public function deleteCustomers($uid = null){
		if ($uid != null) {
			$q = $this->con->query("DELETE FROM admin_panel_user WHERE user_id = '$uid'");
			if ($q) {
				return ['status'=> 202, 'message'=> 'User Details Removed'];
			}else{
				return ['status'=> 202, 'message'=> 'Failed to run query'];
			}
			
		}else{
			return ['status'=> 303, 'message'=>'Invalid User id'];
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
	if (!empty($_POST['uid'])) {
		$p = new Customers();
		echo json_encode($p->deleteCustomers($_POST['uid']));
		exit();
	}else{
		echo json_encode(['status'=> 303, 'message'=> 'Invalid details']);
		exit();
	}
}

if (isset($_POST["GET_CUSTOMER_ORDERS"])) {
	if (isset($_SESSION['admin_id'])) {
		$c = new Customers();
		echo json_encode($c->getCustomersOrder());
		exit();
	}
}


?>