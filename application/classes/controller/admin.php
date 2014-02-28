<?php
ini_set("display_errors", true);
class Controller_Admin extends Controller {
	public $obj = array();
	public function __construct(Request $request, Response $response){
		parent::__construct($request, $response);
		
		// Misc. Classes
		$this->obj['webstructure'] = new Webstructure();
		
		// Core Models
		$this->obj['acc_logic'] = new Model_Account();
		$this->obj['ems_logic'] = new Model_Ems();
	}
	public function action_mis_homepage(){
		
		if(Session::instance()->get('mis_admin') == null){
			die("Please Login again.");
		}
		
		// Embuscado Update December 10
		// Calls presentation page file
		$presentation_tier = View::factory ( "mis_admin/dashboard" );

		// Calls webstructure
		$presentation_tier->head = $this->obj ['webstructure']->head ( "MIS - Super Admin" , true, true);
		$presentation_tier->page_header = $this->obj ['webstructure']->page_header ( $this->obj ['webstructure']->mis_admin_navigation () );
// 		$presentation_tier->verify_applicant_form = ($this->request->query('applicant_form') != null) ? $this->constructApplicantForm($this->request->query("applicant_no")) : null;
// 		$presentation_tier->verify_applicant_form_script = ($this->request->query('applicant_form') != null) ? "$('#hiringModal').reveal();$('#birthdateApplicant').datepicker({maxDate:'0',minDate: new Date(1882, 10 - 1, 25),changeMonth:true,changeYear:true,dateFormat:'yy-mm-dd'});" : null;
// 		$presentation_tier->ajax_validate_hiree = ($this->request->query('applicant_form') != null) ? $this->obj['webstructure']->ajax_validate_applicant():null;
		
		// Core Logics
		$presentation_tier->account_name = null;// $this->obj['acc_logic']->get_account_name(Session::instance()->get(md5('ems').'admin_sess'), "ems");
		$presentation_tier->admin_accounts = $this->obj['acc_logic']->get_admin_accounts(array("crm","ems"));
		$presentation_tier->audits = $this->obj['acc_logic']->getAllAudit();
		
// 		echo "<pre>";
// 		die(print_r($this->obj['acc_logic']->get_admin_accounts(array("tms","ems"))));
		// Renders Template
		$this->response->body($presentation_tier);
	}
	
	public function action_admin_login(){
		
	}
	
	public function action_add_admin($datas = array()){
		
	}
	
	public function action_delete_admin($datas = array()){
		
	}
	
	public function action_admin_logout(){
		Session::instance()->destroy();
		echo "<script>self.location='" . URL::site ( 'login', null, true ) . "';</script>";
	}
}

