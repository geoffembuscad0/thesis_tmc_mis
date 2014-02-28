<?php
ini_set ( "display_errors", true );
defined ( 'SYSPATH' ) or die ( "No direct script is allowed." );
class Controller_Crm extends Controller {
	public $titlePage = "Customer Relationship Management System - Admin | Teresa Marble Inc.";
	public function __construct(Request $request, Response $response) {
		parent::__construct ( $request, $response );
		// Other classes
		$this->obj ['forms'] = new Forms ();
		$this->obj ['messages'] = new Messages ();
		$this->obj ['webstructure'] = new Webstructure ();
		$this->obj['response'] = Response::factory();
		// Models
		$this->obj ['crm_logic'] = new Model_Crm ();
		$this->obj ['acc_logic'] = new Model_Account ();
	}
	// START - Admin Side
	public function action_export_scores() {
		// Upodate Embuscado December 3
		$this->obj['crm_logic']->get_audit(
				Session::instance()->get(md5('crm') . 'admin_sess'),
				$this->audit_trail['export_scores']
		);
		$presentation_tier = View_PDF::factory ( 'CRM/admin/product_average_scores', array (
				'title' => 'Average Products Scores',
				'name' => 'average_scores.pdf'
		) )
		->set ( 'ProductScores', $this->obj['crm_logic']->get_avg_scores())
		->render ();
		exit ();
	}
	public function action_export_survey() {
		
		// Update Embuscado December 3
		$this->obj['crm_logic']->get_audit(
			Session::instance()->get(md5('crm') . 'admin_sess'),
			$this->audit_trail['export_surveys']
		);
		
		// Calls presentation page file
		$presentation_tier = View::factory ( "CRM/admin/feedbackreports" );
		// Time Stamp of report
		$presentation_tier->time = date ( "l, " . ucfirst ( "F" ) . " d Y - g:i A" );
		
		// Head Of HTML file
		$presentation_tier->head = '<style type="text/css">@import url("' . URL::site ( "assets/css/pure/purecss.css", true, false ) . '");</style>
		<style type="text/css">.jqplot-data-label{ color:#fff; font-size: 22px; font-weight: bold; } .wrapper{ width:900px; }</style>
		<style type="text/css">@import url("' . URL::site ( "assets/js/jqplot/jquery.jqplot.css", true, false ) . '")</style>
		<script type="text/javascript" src="' . URL::site ( "assets/js/jquery1102.js", true, false ) . '"></script>
		<script type="text/javascript" src="' . URL::site ( "assets/js/jqplot/jquery.jqplot.js" , true, false) . '"></script>
		<script type="text/javascript" src="' . URL::site ( "assets/js/jqplot/plugins/jqplot.dateAxisRenderer.min.js", true, false ) . '"></script>
		<script type="text/javascript" src="' . URL::site ( "assets/js/jqplot/plugins/jqplot.canvasTextRenderer.min.js", true, false ) . '"></script>
		<script type="text/javascript" src="' . URL::site ( "assets/js/jqplot/plugins/jqplot.canvasAxisTickRenderer.min.js", true, false ) . '"></script>
		<script type="text/javascript" src="' . URL::site ( "assets/js/jqplot/plugins/jqplot.categoryAxisRenderer.min.js", true, false ) . '"></script>
		<script type="text/javascript" src="' . URL::site ( "assets/js/jqplot/plugins/jqplot.barRenderer.min.js", true, false ) . '"></script>
		<script type="text/javascript" src="' . URL::site ( "assets/js/jqplot/plugins/jqplot.pieRenderer.min.js", true, false ) . '"></script>
		<script type="text/javascript" src="' . URL::site ( "assets/js/jqplot/plugins/jqplot.donutRenderer.min.js", true, false ) . '"></script>
		';
		
		// fetch statistics for the chart
		$presentation_tier->statistics = array ();
		$presentation_tier->statistics ['rate_bussiness'] = $this->get_statistics_business_rate ();
		$presentation_tier->statistics ['rate_satisfaction'] = $this->get_statistics_satisfaction ();
		$presentation_tier->statistics ['rate_ordered'] = $this->get_statistics_orderedproducts ();
		$presentation_ties->statistics ['rate_recommends'] = $this->get_statistics_recommendations ();
		
		// Renders Page
		$this->response->body ( $presentation_tier );
	}
	public function action_admin_dashboard() {
		$this->obj['response']->headers(array(
				'Cache-Control' => 'no-store, no-cache, must-revalidate, max-age=0',
				'Pragma'		=> 'no-cache',
				'Expires'		=>'Sat, 26 Jul 1997 05:00:00 GMT'));
		// validate session
		if(Session::instance()->get(md5('crm') . 'admin_id') == null && Session::instance()->get(md5('crm') . 'admin_sess') == null){
			echo "<script>self.location='" . URL::site ( 'login', true, true ) . "';</script>";
		}
		
		// Calls presentation page file
		$presentation_tier = View::factory ( "CRM/admin/dashboard" );
		
		// Calls webstructure
		$presentation_tier->head = $this->obj ['webstructure']->head ( $this->titlePage);
		$presentation_tier->page_header = $this->obj ['webstructure']->page_header ( $this->obj ['webstructure']->crm_admin_navigation () );
		
		// Calls logic of model of CRM
		$presentation_tier->product_scores = $this->obj ['crm_logic']->select_product_scores ();
		$presentation_tier->sales_assistants = $this->obj ['crm_logic']->select_sales_assistants ();
		$presentation_tier->account_name = $this->obj ['acc_logic']->get_account_name ( Session::instance ()->get ( md5 ( 'crm' ) . 'admin_sess' ), "crm" );
		$presentation_tier->update_sales = ($this->request->query ( 'update' ) != null) ? "alert('Data has successfully updated.');" : null;
		
		// fetch statistics for the chart
		$presentation_tier->statistics = array ();
		$presentation_tier->statistics ['rate_bussiness'] = $this->get_statistics_business_rate ();
		$presentation_tier->statistics ['rate_satisfaction'] = $this->get_statistics_satisfaction ();
		$presentation_tier->statistics ['rate_ordered'] = $this->get_statistics_orderedproducts ();
		$presentation_ties->statistics ['rate_recommends'] = $this->get_statistics_recommendations ();
		
		// Forms
		$presentation_tier->add_sales_assistant_form = $this->obj ['forms']->admin_add_sales_assistant ();
		
		// Renders view presentaionpage
		$this->response->body ( $presentation_tier );
	}
	public function get_statistics_business_rate() {
		
		$businessRates = $this->obj ['crm_logic']->select_businessrates ();
		$scores = array ();
		$scores ['one'] = 0;
		$scores ['two'] = 0;
		$scores ['three'] = 0;
		$scores ['four'] = 0;
		$scores ['five'] = 0;
		for($countRec = 0; $countRec < count ( $businessRates ); $countRec ++) {
			if ($businessRates [$countRec] ['rate_business'] == 1) {
				$scores ['one'] = $scores ['one'] + 1;
			} else if ($businessRates [$countRec] ['rate_business'] == 2) {
				$scores ['two'] = $scores ['two'] + 1;
			} else if ($businessRates [$countRec] ['rate_business'] == 3) {
				$scores ['three'] = $scores ['three'] + 1;
			} else if ($businessRates [$countRec] ['rate_business'] == 4) {
				$scores ['four'] = $scores ['four'] + 1;
			} else if ($businessRates [$countRec] ['rate_business'] == 5) {
				$scores ['five'] = $scores ['five'] + 1;
			}
		}
		$scores ['absolution'] = $scores ['one'] + $scores ['two'] + $scores ['three'] + $scores ['four'] + $scores ['five'];
		$scores ['one'] = round ( ($scores ['one'] / $scores ['absolution']) * 100 );
		$scores ['two'] = round ( ($scores ['two'] / $scores ['absolution']) * 100 );
		$scores ['three'] = round ( ($scores ['three'] / $scores ['absolution']) * 100 );
		$scores ['four'] = round ( ($scores ['four'] / $scores ['absolution']) * 100 );
		$scores ['five'] = round ( ($scores ['five'] / $scores ['absolution']) * 100 );
		return $scores;
	}
	public function get_statistics_satisfaction() {
		$businessRates = $this->obj ['crm_logic']->select_satisfaction ();
		$scores = array ();
		$scores ['one'] = 0;
		$scores ['two'] = 0;
		$scores ['three'] = 0;
		$scores ['four'] = 0;
		$scores ['five'] = 0;
		for($countRec = 0; $countRec < count ( $businessRates ); $countRec ++) {
			if ($businessRates [$countRec] ['rate_satisfaction'] == 1) {
				$scores ['one'] = $scores ['one'] + 1;
			} else if ($businessRates [$countRec] ['rate_satisfaction'] == 2) {
				$scores ['two'] = $scores ['two'] + 1;
			} else if ($businessRates [$countRec] ['rate_satisfaction'] == 3) {
				$scores ['three'] = $scores ['three'] + 1;
			} else if ($businessRates [$countRec] ['rate_satisfaction'] == 4) {
				$scores ['four'] = $scores ['four'] + 1;
			} else if ($businessRates [$countRec] ['rate_satisfaction'] == 5) {
				$scores ['five'] = $scores ['five'] + 1;
			}
		}
		$scores ['absolution'] = $scores ['one'] + $scores ['two'] + $scores ['three'] + $scores ['four'] + $scores ['five'];
		$scores ['one'] = round ( ($scores ['one'] / $scores ['absolution']) * 100 );
		$scores ['two'] = round ( ($scores ['two'] / $scores ['absolution']) * 100 );
		$scores ['three'] = round ( ($scores ['three'] / $scores ['absolution']) * 100 );
		$scores ['four'] = round ( ($scores ['four'] / $scores ['absolution']) * 100 );
		$scores ['five'] = round ( ($scores ['five'] / $scores ['absolution']) * 100 );
		return $scores;
	}
	public function get_statistics_orderedproducts() {
		$ordered_product = $this->obj ['crm_logic']->select_ordered_products ();
		$ordered_products = array ();
		$ordered_products ['Y'] = 0;
		$ordered_products ['N'] = 0;
		for($countRec = 0; $countRec < count ( $ordered_product ); $countRec ++) {
			if ($ordered_product [$countRec] ['order_product'] == 1) {
				$ordered_products ['Y'] = $ordered_products ['Y'] + 1;
			} else if ($ordered_product [$countRec] ['order_product'] == 2) {
				$ordered_products ['N'] = $ordered_products ['N'] + 1;
			}
		}
		$absolute_rates = $ordered_products ['Y'] + $ordered_products ['N'];
		$percent_bsr_y = round ( ($ordered_products ['Y'] / $absolute_rates) * 100 );
		$percent_bsr_n = round ( ($ordered_products ['N'] / $absolute_rates) * 100 );
		return array (
				'AnsweredYes' => $percent_bsr_y,
				'AnsweredNo' => $percent_bsr_n,
				'AbsoluteValues' => $absolute_rates 
		);
	}
	public function get_statistics_recommendations() {
		$recommend = $this->obj ['crm_logic']->select_recommends ();
		$recommends = array ();
		$recommends ['Y'] = 0;
		$recommends ['N'] = 0;
		for($countRec = 0; $countRec < count ( $recommend ); $countRec ++) {
			if ($recommend [$countRec] ['recommend'] == 1) {
				$recommends ['Y'] = $recommends ['Y'] + 1;
			} else if ($recommend [$countRec] ['recommend'] == 2) {
				$recommends ['N'] = $recommends ['N'] + 1;
			}
		}
		$absolute_recommendations = $recommends ['Y'] + $recommends ['N'];
		$percent_rec_y = round ( ($recommends ['Y'] / $absolute_recommendations) * 100 );
		$percent_rec_n = round ( ($recommends ['N'] / $absolute_recommendations) * 100 );
		return array (
				'AnsweredYes' => $percent_rec_y,
				'AnsweredNo' => $percent_rec_n,
				'AbsoluteValues' => $absolute_recommendations 
		);
	}
	public function action_fetch_email(){
		$this->obj['crm_logic']->fetch_email($this->request->post('email_rater'));
	}
	public function action_view_feedbacks() {
		// Update Embuscado December 3
		$this->obj['crm_logic']->get_audit(
				Session::instance()->get(md5('crm') . 'admin_sess'),
				$this->audit_trail['export_stats']
		);
		$presentation_tier = View::factory ( "CRM/admin/feedbackreports" );
		$this->response->body ( $presentation_tier );
	}
	public function action_delete_salesassist() {
		// username
		$this->obj ['crm_logic']->delete_sales_assistant ( $this->request->post ( 'username' ) );
		// echo "Sales Assistant has been successfully deleted.";
	}
	public function action_login_sales() { // Admin logs an sales assistant account
		Session::instance ()->set ( 'sales_id', 1 );
		Session::instance ()->set ( 'sales_sess', $this->request->query ( 'sales_acc' ) );
		$this->request->redirect ( URL::site ( 'crm/inquiries_dashboard' ) );
	}
	public function action_update_salesass() { // updates sales assistant's data
		$this->obj ['crm_logic']->update_sales_assistant ( array (
				'id' => $this->request->post ( 'account_id' ),
				'firstname' => $this->request->post ( "firstname" ),
				'middlename' => $this->request->post ( "middlename" ),
				'lastname' => $this->request->post ( "lastname" ),
				'username' => $this->request->post ( "email" ),
				'password' => $this->request->post ( "password" ) 
		) );
		$this->request->redirect ( "crm/admin_dashboard?update=true" );
	}
	public function action_admin_add_sales() {
		if (Valid::alpha ( $this->request->post ( 'firstname' ) )) {
			if (Valid::alpha ( $this->request->post ( 'middlename' ) ) ||  $this->request->post ( 'middlename' ) == null ) {
				if (Valid::alpha ( $this->request->post ( 'lastname' ) )) {
					if (Valid::email ( $this->request->post ( 'email' ) )) {
						$this->obj ['crm_logic']->add_sales_assistant ( array (
								$this->request->post ( 'firstname' ),
								$this->request->post ( 'middlename' ),
								$this->request->post ( 'lastname' ),
								$this->request->post ( 'email' ) 
						) );
						echo "Added Sales Assistant Successfully!";
						echo "\nUsername: crm_" . $this->request->post('email') . "\n";
						echo "Password: " . $this->request->post('lastname');
					} else {
						echo "Email is not valid.";
					}
				} else {
					echo "Fail Lastname";
				}
			} else {
				echo "Fail Middlename";
			}
		} else {
			echo "Fail Firstname";
		}
	}
	public function action_admin_logout() {
		Session::instance ()->destroy ( md5('crm') . 'admin_id' );
		Session::instance ()->destroy ( md5('crm') . 'admin_sess' );
		echo "<script>self.location='" . URL::site ( 'login', true, true ) . "';</script>";
	}
	// END - Admin Side
	// START - Inquiry of Customers and clients - Parts on Controller
	public function action_validate_inquiry() {
		$inquiry_code = $this->request->post ( 'inquiry_code' );
		
		$data_entries = array (
				'client_type' => ( $this->request->post ( 'client_type' ) == null ) ? "<b>Type of client:</b> Please select what type of client are you. " : $this->request->post ( 'client_type' ),
				'client_businessname' => $this->validate_businessname ( array (
						'client_type' => $this->request->post ( "client_type" ),'business_name' => $this->request->post ( 'businessName' ) 
				) ),
				'client_firstname' => (! Valid::alpha ( $this->request->post ( 'firstname' ), true )) ? "<b>Firstname:</b> Invalid entry of firstname. " : $this->request->post ( 'firstname' ),
				'client_middlename' => (! Valid::alpha ( $this->request->post ( 'middlename' ), true )) ? "<b>Middlename:</b> Invalid entry of middlename. " : $this->request->post ( 'middlename' ),
				'client_lastname' => (! Valid::alpha ( $this->request->post ( 'lastname' ), true )) ? "<b>Lastname:</b> Invalid entry of lastname. " : $this->request->post ( 'lastname' ),
				'client_address' => $this->request->post ( 'address' ) /*$this->validate_address ( explode ( ",", $this->request->post ( 'address' ) ) )*/ ,
				'client_email' => (! Valid::email ( $this->request->post ( 'email' ) )) ? "<b>Email:</b> Invalid email address. " : $this->request->post ( 'email' ),
				'client_cellphone' => $this->validate_cellphone ( str_split ( ( string ) $this->request->post ( 'celphone' ) ) ),
				'client_tellphone' => $this->validate_telephone ( str_split ( ( string ) $this->request->post ( 'telphone' ) ) ) 
		);
				
		if (strpos ( implode ( "", $data_entries ), "Invalid" ) || strpos ( implode ( "", $data_entries ), "Please" )) {
			echo "<td style='background: #FF9999;color: #990000;' colspan='6'>";
			echo implode ( " ", $data_entries );
			echo "</td>";
		} else {
			echo "<td style='background:#66ff66;color:#009900;' colspan='6'><b>Your inquiries was successfuly submited.</b>";
			echo "</td>";
			$this->obj ['crm_logic']->get_inquiry_informations ( $data_entries, $inquiry_code );
			$this->obj ['crm_logic']->get_products_inquiry ( explode ( ",", $this->request->post ( 'products_inqu' ) ), $this->request->post('inquiry_code'));
		}
	}
	public function validate_address($address) {
// 		if(is_Array($address)){
// 		if (count ( $address ) >= 2) {
// 			return implode ( ",", $address );
// 		} else {
// 			return "<b>Address:</b> Invalid entry of address location. ";
// 		}
// 	}
		if($address == null){
			return "<b>Address:</b> Address is required.";
		} else {
			return $address;
		}
	}
	public function validate_businessname($datas = array()) {
		if ($datas ['client_type'] == "Business") {
			if (empty ( $datas ['business_name'] ) == true) {
				return "<b>Business Name:</b> Invalid entry business name is required. ";
			} else if (strlen ( $datas ['business_name'] ) <= 3) {
				return "<b>Business Name:</b> Invalid entry, this is not a valid name for a business.";
			} else {
				return $datas ['business_name'];
			}
		} elseif ($datas ['client_type'] == "Consumer") {
			return null;
		}
	}
	public function validate_cellphone($cell = array()) {
		$count_size = count ( $cell );
		if ($count_size == 11) {
			if (Valid::numeric ( implode ( "", $cell ) )) {
				return implode ( "", $cell );
			} else {
				return "<b>Cellphone Number:</b> Invalid entry should only contain numbers. ";
			}
		} else {
			return "<b>Cellphone Number:</b> Invalid entry of should be 11 digits only. ";
		}
	}
	public function validate_telephone($telephone = array()) {
		if (count ( $telephone ) == 7) {
			if (Valid::numeric ( implode ( "", $telephone ) )) {
				return implode ( "", $telephone );
			} else {
				return "<b>Telephone Number:</b> Invalid entry, should only contain numbers only. ";
			}
		} else {
			return "<b>Telephone Number:</b> Invalid entry, should be 7 digits only. ";
		}
	}
	// END - Inquiry of Customers and clients - Parts on Controller
	// START employee side
	public function action_inquiries_dashboard() {
		$this->obj['response']->headers(array(
				'Cache-Control' => 'no-store, no-cache, must-revalidate, max-age=0',
				'Pragma'		=> 'no-cache',
				'Expires'		=>'Sat, 26 Jul 1997 05:00:00 GMT'
		));
		// validate session
		if(Session::instance()->get('sales_id') == null && Session::instance()->get('sales_sess') == null){
			echo "<script>self.location='" . URL::site ( 'login', true, true ) . "';</script>";
		}
		
		// Builds presentation tier
		$presentation_tier = View::factory ( "CRM/sales/dashboard" );
		$presentation_tier->head = $this->obj ['webstructure']->head ( $this->titlePage);
		$presentation_tier->page_header = $this->obj ['webstructure']->page_header ( $this->obj ['webstructure']->crm_sales_navigation () );

		// Core Models
		$presentation_tier->account_name = $this->obj ['acc_logic']->get_account_name ( Session::instance ()->get ( 'sales_sess' ), "crm" );
		$presentation_tier->inquiry_docs = $this->obj ['crm_logic']->select_inquiry_informations();
		
		// approved/denied inquiries
		$presentation_tier->approved_inquiries = $this->obj['crm_logic']->select_inquiries_by_status(1);
		
		// pendings status
		$presentation_tier->pending_inquiries = $this->obj['crm_logic']->select_inquiries_by_status(0);
		// echo "<pre>";print_r($presentation_tier->pending_inquiries);die();
		$this->response->body ( $presentation_tier );
	}
	public function action_approve_inquiry() {
		// Approve backend processing
		$this->obj ['crm_logic']->approve_selected_inquiry ( $this->request->post ( 'inquiry_code' ) );
		
		// Mail Body Reconstruct
		$subject = "Teresa Marble Incorporated - Approval of Inquiry Document";
		
		$message = 'From: teresamarble@info.com' . "\r\n";
		$message .= 'Reply-To: ' . $this->obj ['crm_logic']->select_inquiry_informations ( $this->request->post ( 'inquiry_code' ) )[0]['email'] . "\r\n";
		$message .= 'Date: ' . date ( 'm d, Y' ) . "\r\n";
		
		$message .= "Hi Sir/Mam " . $this->obj ['crm_logic']->select_inquiry_informations ( $this->request->post ( 'inquiry_code' ) )[0]['client_name'] . "\n\n";
		$message .= "Hello your inquiry of products has been approved success fully. Theses are the details about your product inquiry documents.\n";
		$message .= "List of products that you've inquired.\n\n";
		
		foreach ( $this->obj ['crm_logic']->select_inquiry_products ( $this->request->post ( 'inquiry_code' ) ) as $inq_infos ) {
			$message .= "Product Name: " . $inq_infos ['product_name'] . "\nProduct Price: PHP " . $inq_infos ['price'] . "\n\n";
		}
		
		$message .= "Total Price of the inquired products: PHP " . $this->obj ['crm_logic']->select_inquiry_price ( $this->request->post ( 'inquiry_code' ) )[0]['total_price'];
		// Sends email approval
		mail ( $this->obj ['crm_logic']->select_inquiry_informations ( $this->request->post ( 'inquiry_code' ) )[0]['email'], $subject, $message );
	}
	public function action_deny_inquiry() {
		$this->obj ['crm_logic']->deny_selected_inquiry ( $this->request->post ( 'inquiry_code' ) );
		die("denied successfully");
		$subject = "Teresa Marble Incorporated - Denial of inquiry documents";
		
		$message = 'From: teresamarble@info.com' . "\r\n";
		$message .= 'Reply-To: ' . $this->obj ['crm_logic']->select_inquiry_informations ( $this->request->post ( 'inquiry_code' ) )[0]['email'] . "\r\n";
		$message .= 'Date: ' . date ( 'm d, Y' ) . "\r\n";
		$message .= "Hi Sir/Mam " . $this->obj ['crm_logic']->select_inquiry_informations ( $this->request->post ( 'inquiry_code' ) )[0]['client_name'] . "\n\n";
		$message .= "Hello your inquiry of products has been rejected due to encounters of problems from your transacting your products and documents.\n";
		
		// Sends email of the rejected inquiry informations
		mail ( $this->obj ['crm_logic']->selected_inquiry_informations ( $this->request->post ( 'inquiry_code' ) )[0]['email'], $subject, $message );
	}
	public function action_inquiry_report() {
		$presentation_tier = View_PDF::factory ( 'CRM/sales/inquiry_report', array (
				'title' => 'Inquiry Report',
				'name' => 'report.pdf' 
		) )->set ( 'inquiry_docs', $this->obj ['crm_logic']->select_inquiry_informations ( $this->request->query ( 'inq_code' ) ) )->set ( 'inquiry_products', $this->obj ['crm_logic']->select_inquiry_products ( $this->request->query ( 'inq_code' ) ) )->render ();
		exit ();
	}
	public function action_sales_logout() {
		Session::instance()->delete('sales_id');
		Session::instance()->delete('sales_sess');
		echo "<script>self.location='" . URL::site ( 'login', true, true ) . "';</script>";
	}
}
// Geoffrey updated nov 22