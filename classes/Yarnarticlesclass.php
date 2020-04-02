<?php 
session_start();
/**
 * ALTER TABLE products ADD product_qty INT(11) NOT NULL AFTER `product_price`;
 	UPDATE `products` SET product_qty = 1000 WHERE 1;

	CREATE TABLE `products` (
 `product_id` int(100) NOT NULL AUTO_INCREMENT,
 `product_cat` int(11) NOT NULL,
 `product_brand` int(100) NOT NULL,
 `product_title` varchar(255) NOT NULL,
 `product_price` int(100) NOT NULL,
 `product_qty` int(11) NOT NULL,
 `product_desc` text NOT NULL,
 `product_image` text NOT NULL,
 `product_keywords` text NOT NULL,
  CONSTRAINT fk_product_cat FOREIGN KEY fk_product_cat (product_cat) REFERENCES categories(cat_id),
    CONSTRAINT fk_product_brand FOREIGN KEY fk_product_brand (product_brand) REFERENCES brands(brand_id),
 PRIMARY KEY (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1
 	
 */
class Products
{
	
	private $con;

	function __construct()
	{
		include_once("Database.php");
		$db = new Database();
		$this->con = $db->connect();
	}

	public function addCategory($name){
		$q = $this->con->query("SELECT * FROM articles WHERE article_name = '$name' LIMIT 1");
		if ($q->num_rows > 0) {
			return ['status'=> 303, 'message'=> 'Yarn Article Already Exists'];
		}else{
			$q = $this->con->query("INSERT INTO articles (article_name) VALUES ('$name')");
			if ($q) {
				return ['status'=> 202, 'message'=> 'New Yarn Article added Successfully'];
			}else{
				return ['status'=> 303, 'message'=> 'Failed to run query'];
			}
		}
	}

	public function getCategories(){
		$q = $this->con->query("SELECT * FROM articles");
		$ar = [];
		if ($q->num_rows > 0) {
			while ($row = $q->fetch_assoc()) {
				$ar[] = $row;
			}
		}
		return ['status'=> 202, 'message'=> $ar];
	}


	public function deleteCategory($cid = null){
		if ($cid != null) {
			$q = $this->con->query("DELETE FROM articles WHERE cat_id = '$cid'");
			if ($q) {
				return ['status'=> 202, 'message'=> 'Yarn Article removed'];
			}else{
				return ['status'=> 202, 'message'=> 'Failed to run query'];
			}
			
		}else{
			return ['status'=> 303, 'message'=>'Invalid Yarn Article id'];
		}

	}
	
	

	public function updateCategory($post = null){
		extract($post);
		if (!empty($cat_id) && !empty($e_cat_title)) {
			$q = $this->con->query("UPDATE articles SET article_name = '$e_cat_title' WHERE cat_id = '$cat_id'");
			if ($q) {
				return ['status'=> 202, 'message'=> 'Yarn Article updated'];
			}else{
				return ['status'=> 202, 'message'=> 'Failed to run query'];
			}
			
		}else{
			return ['status'=> 303, 'message'=>'Invalid Yarn Article id'];
		}

	}	

}


if (isset($_POST['add_category'])) {
	if (isset($_SESSION['admin_id'])) {
		$article_name = $_POST['article_name'];
		if (!empty($article_name)) {
			$p = new Products();
			echo json_encode($p->addCategory($article_name));
		}else{
			echo json_encode(['status'=> 303, 'message'=> 'Empty fields']);
		}
	}else{
		echo json_encode(['status'=> 303, 'message'=> 'Session Error']);
	}
}

if (isset($_POST['GET_CATEGORIES'])) {
	$p = new Products();
	echo json_encode($p->getCategories());
	exit();
	
}

if (isset($_POST['DELETE_CATEGORY'])) {
	if (!empty($_POST['cid'])) {
		$p = new Products();
		echo json_encode($p->deleteCategory($_POST['cid']));
		exit();
	}else{
		echo json_encode(['status'=> 303, 'message'=> 'Invalid details']);
		exit();
	}
}

if (isset($_POST['edit_category'])) {
	if (!empty($_POST['cat_id'])) {
		$p = new Products();
		echo json_encode($p->updateCategory($_POST));
		exit();
	}else{
		echo json_encode(['status'=> 303, 'message'=> 'Invalid details']);
		exit();
	}
}


?>