<?php
ini_set ( "display_errors", true );
defined ( 'SYSPATH' ) or die ( 'No direct script access.' );
class Model_Crm extends Model_Database {
	public function __construct() {
	}
	public function get_inquiry_informations($datas = array(), $inquiry_code) {
		if ($datas ['client_type'] == "Business") {
			$datas ['client_type'] = 1;
		} else if ($datas ['client_type'] == "Consumer") {
			$datas ['client_type'] = 2;
		}
		DB::query ( DATABASE::INSERT, "INSERT INTO crm_inq_docs VALUES('" . $inquiry_code . "',now(),null,null, '0')" )->execute ();
		DB::query ( DATABASE::INSERT, "INSERT INTO crm_inq_clients VALUES(
				'" . $inquiry_code . "',
				'" . $datas ['client_type'] . "',
				'" . $datas ['client_businessname'] . "',
				'" . $datas ['client_firstname'] . "',
				'" . $datas ['client_middlename'] . "',
				'" . $datas ['client_lastname'] . "',
				'" . $datas ['client_address'] . "',
				'" . $datas ['client_email'] . "',
				'" . $datas ['client_cellphone'] . "',
				'" . $datas ['client_tellphone'] . "');" )->execute ();
	}
	public function get_products_inquiry($products = array(), $inquiry_code) {
		$product_numbers = array ();
		for($counter = 0; $counter < count ( $products ); $counter ++) {
			$products [$counter] = explode ( " - ", $products [$counter] );
		}
		for($counting = 0; $counting < count ( $products ); $counting ++) {
			$product_numbers [$counting] = DB::query ( DATABASE::SELECT, "SELECT product_no FROM crm_products WHERE product_name LIKE '%" . $products [$counting] [0] . "%'" )->execute ()->as_array ()[0]['product_no'];
		}
		for($xyz = 0; $xyz < ( string ) count ( $product_numbers ); $xyz ++) {
			DB::query ( DATABASE::INSERT, "INSERT INTO crm_inq_products VALUES('" . $inquiry_code . "','$product_numbers[$xyz]')" )->execute ();
		}
	}
	public function insert_feedback($data = array()) {
		DB::query ( DATABASE::INSERT, "INSERT INTO crm_feedback VALUES(SHA1(NOW()),
				'" . $data['users_ip'] . "',
				'" . $data['recommendation'] . "',
				'" . $data['no_statement'] . "',
				'" . $data['comment'] . "',
				'" . $data['satisfaction'] . "',
				'" . $data['business_rate'] . "',
				'" . $data['order_product'] . "',
				'".$data['email_feedback']."');")->execute();
	}
	public function select_businessrates() {
		return DB::query ( DATABASE::SELECT, "SELECT crm_feedback.rate_business FROM crm_feedback ORDER BY crm_feedback.rate_business ASC" )->execute ()->as_array ();
	}
	public function select_satisfaction() {
		return DB::query ( DATABASE::SELECT, "SELECT crm_feedback.`rate_satisfaction` FROM crm_feedback ORDER BY crm_feedback.`rate_satisfaction` ASC" )->execute ()->as_array ();
	}
	public function select_recommends() {
		return DB::query ( DATABASE::SELECT, "SELECT crm_feedback.recommend FROM crm_feedback" )->execute ()->as_array ();
	}
	public function select_ordered_products() {
		return DB::query ( DATABASE::SELECT, "SELECT crm_feedback.order_product FROM crm_feedback" )->execute ()->as_array ();
	}
	public function select_product_avg_score($product_no = 0) {
		return DB::query ( DATABASE::SELECT, "SELECT AVG(score) AS average FROM crm_product_scores WHERE product_no = '" . $product_no . "'" )->execute ()->as_array ();
	}
	public function get_avg_scores() {
		$data = array ();
		$count = 0;
		$result = DB::query ( DATABASE::SELECT, "SELECT product_no,product_name,description,price FROM crm_products order by product_no" )->execute ()->as_array ();
		foreach ( $result as $results ) {
			$data [$count] = array (
					'product_no' => $results ['product_no'],
					'product_name' => $results ['product_name'],
					'product_price' => $results ['price'],
					'average_score' => round ( $this->select_product_avg_score ( $results ['product_no'] )[0]['average'] ),
					'rank' => $this->get_score_rank ( round ( $this->select_product_avg_score ( $results ['product_no'] )[0]['average'] ) ) 
			);
			$count ++;
		}
		return $data;
	}
	public function get_score_rank($score = 0) {
		if ($score == 1) {
			return "<font color='red'>Worst Product</font>";
		} else if ($score == 2) {
			return "<font color='red'>Poor Product</font>";
		} else if ($score == 3) {
			return "Good Product";
		} else if ($score == 4) {
			return "Great Product";
		} else if ($score == 5) {
			return "Best Product";
		} else {
			return "N/A";
		}
	}
	public function select_product_scores() {
		return DB::query ( DATABASE::SELECT, "SELECT crm_product_scores.*,crm_products.* 
				FROM crm_product_scores 
				JOIN crm_products ON crm_products.`product_no` = crm_product_scores.`product_no` 
				ORDER BY crm_product_scores.score_code DESC" )->execute ()->as_array ();
	}
	public function delete_sales_assistant($username = null) {
		DB::query ( DATABASE::DELETE, "DELETE FROM crm_accounts WHERE username = '" . $username . "'" )->execute ();
	}
	public function select_inquiry_informations($inq_no = null) {
		// clears other trash datas
		// DB::query(DATABASE::SELECT, "DELETE FROM crm_inq_products WHERE inq_no NOT IN (SELECT DISTINCT inq_no FROM crm_inq_docs)")->execute();
		if ($inq_no == null) {
			return DB::query ( DATABASE::SELECT, "SELECT CONCAT(crm_inq_clients.`firstname`, ' ', crm_inq_clients.`middlename`, ' ', crm_inq_clients.`lastname`) AS client_name, crm_inq_clients.*, crm_inq_docs.*, crm_client_type.`type_name` FROM crm_inq_clients JOIN crm_inq_docs ON crm_inq_clients.`inq_no` = crm_inq_docs.`inq_no` JOIN crm_client_type ON crm_client_type.`client_type` = crm_inq_clients.`client_type` ORDER BY crm_inq_docs.date_issued DESC" )->execute ()->as_array ();
		} else {
			return DB::query ( DATABASE::SELECT, "SELECT CONCAT(crm_inq_clients.`firstname`, ' ', crm_inq_clients.`middlename`, ' ', crm_inq_clients.`lastname`) AS client_name, crm_inq_clients.*, crm_inq_docs.*, crm_client_type.`type_name` FROM crm_inq_clients JOIN crm_inq_docs ON crm_inq_clients.`inq_no` = crm_inq_docs.`inq_no` JOIN crm_client_type ON crm_client_type.`client_type` = crm_inq_clients.`client_type` WHERE crm_inq_docs.`inq_no` = '" . $inq_no . "' ORDER BY crm_inq_docs.date_issued DESC" )->execute ()->as_array ();
		}
	}
	public function select_inquiries_by_status($status = 0) {
		$concat = null;
		if ($status >= 1) {
			$concat = " WHERE crm_inq_docs.`inq_status` = 1 OR crm_inq_docs.inq_status = 2 ";
		} elseif ($status == 0) {
			$concat = " WHERE crm_inq_docs.inq_status is null ";
		}
		return DB::query ( DATABASE::SELECT, "SELECT CONCAT(crm_inq_clients.`firstname`, ' ', crm_inq_clients.`middlename`, ' ', crm_inq_clients.`lastname`) AS client_name, crm_inq_clients.*, crm_inq_docs.*, crm_client_type.`type_name` FROM crm_inq_clients JOIN crm_inq_docs ON crm_inq_clients.`inq_no` = crm_inq_docs.`inq_no` JOIN crm_client_type ON crm_client_type.`client_type` = crm_inq_clients.`client_type` " . $concat . " ORDER BY crm_inq_docs.date_issued DESC" )->execute ()->as_array ();
	}
	public function approve_selected_inquiry($inquiry_no = null) {
		DB::query ( DATABASE::UPDATE, "UPDATE crm_inq_docs SET inq_status = 1, date_approved = now() WHERE inq_no = '" . $inquiry_no . "'" )->execute ();
	}
	public function deny_selected_inquiry($inquiry_no = null) {
		DB::query ( DATABASE::UPDATE, "UPDATE crm_inq_docs SET inq_status = 2, date_denied = now() WHERE inq_no = '" . $inquiry_no . "'" )->execute ();
	}
	public function select_inquiry_products($inquiry_code = null) {
		return DB::query ( DATABASE::SELECT, "SELECT crm_inq_products.`inq_no`,crm_products.`product_no`,crm_products.`product_name`,crm_products.`description`,crm_products.`filename`,crm_products.`price` FROM crm_inq_products JOIN crm_products ON crm_inq_products.`product_no` = crm_products.`product_no` WHERE crm_inq_products.`inq_no` = '" . $inquiry_code . "'" )->execute ()->as_array ();
	}
	public function select_inquiry_price($inquiry_code = null) {
		// Gets total price of the inquiry products in the documents
		return DB::query ( DATABASE::SELECT, "SELECT SUM(crm_products.`price`) AS total_price FROM crm_inq_products JOIN crm_products ON crm_inq_products.`product_no` = crm_products.`product_no` WHERE crm_inq_products.`inq_no` ='" . $inquiry_code . "'" )->execute ()->as_array ();
	}
	public function select_sales_assistants(){
		return DB::query ( DATABASE::SELECT, "SELECT * FROM crm_accounts WHERE user_lvl = '2'" )->execute ()->as_array ();
	}
	public function login($data = array()){
	}
	public function add_sales_assistant($data = array()) {
		$sql = "INSERT INTO crm_accounts VALUES(null,'" . $data [3]/*strtolower ( $data [0] . "." . $data [2] )*/ . "',sha1('" . $data [2] . "'),'" . $data [2] . "','" . $data [0] . "','" . $data [1] . "','" . $data [2] . "','2')";
		
		DB::query ( DATABASE::INSERT, $sql )->execute ();
	}
	public function update_sales_assistant($data = array()) {
		DB::query ( DATABASE::UPDATE, "UPDATE crm_accounts SET firstname='" . $data ['firstname'] . "',middlename='" . $data ['middlename'] . "',lastname='" . $data ['lastname'] . "',username='" . $data ['username'] . "',user_password = sha1('" . $data ['password'] . "'), origpassword = '" . $data ['password'] . "' WHERE account_id = '" . $data ['id'] . "'" )->execute ();
	}
	public function fetch_email($email){
		DB::query(DATABASE::INSERT, "INSERT INTO crm_email_rater values(null,'".$email."')")->execute();
	}
	public function __destruct() {
	}
}
