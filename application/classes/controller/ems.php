<?php ini_set ( "display_errors", true );
defined ( 'SYSPATH' ) or die ( "No direct script is allowed." );
class Controller_Ems extends Controller {
	public $obj = array();
	public function __construct(Request $request, Response $response){
		parent::__construct($request, $response);
		// Misc. Classes
		$this->obj['webstructure'] = new Webstructure();
		$this->obj['response'] = Response::factory();
		
		// Core Models
		$this->obj['acc_logic'] = new Model_Account();
		$this->obj['ems_logic'] = new Model_Ems();
	}
	// START - VAlidation of Applicant's entry
	public function action_validate_applicant(){
		$popup_message = array();
		$datas = array(
			'Firstname'		=> $this->validate_applicant_name(array($this->request->post("Firstname"), "Firstname")),
			'Middlename'	=> $this->validate_applicant_name(array($this->request->post("Middlename"),"Middlename")),
			'Lastname'		=> $this->validate_applicant_name(array($this->request->post("Lastname"),"Lastname")),
			'Address'		=> $this->request->post("address"),
			'marital_status' => $this->validate_marital_stat($this->request->post('marital_status')),
			'mobile'		=> $this->validate_mobile($this->request->post("mobile_contact")),
			'email'			=> Valid::email($this->request->post("Email")) ? $this->request->post("Email") : "Invalid <b>Email</b> Entry. ",
			'time_reach'	=> $this->validate_time_reach($this->request->post("time_reach")),
			'position'		=> $this->validate_position($this->request->post("position")),
			'date_start'	=> $this->validate_date( $this->request->post("datestart")),
			'file_resume'	=> (empty($_FILES['resume']['name'])) ? "Please upload your <b>File Resume</b>. " : $this->validate_file_resume($_FILES)
		);
		
		if(strpos(implode(" ", $datas), "Invalid") !== false){			
			$popup_message['Firstname']		= (strpos($datas['Firstname'], "<b>") !== false) ? $datas['Firstname'] : null;
			$popup_message['Middlename']	= (strpos($datas['Middlename'], "<b>") !== false) ? $datas['Middlename'] : null;
			$popup_message['Lastname'] 		= (strpos($datas['Lastname'], "<b>") !== false) ? $datas['Lastname'] : null;
			$popup_message['Address']		= (strpos($datas['Address'], "<b>") !== false) ? $datas['Address'] : null;
			$popup_message['mobile']		= (strpos($datas['mobile'], "<b>") !== false) ? $datas['mobile'] : null;
			$popup_message['marital_status']= (strpos($datas['marital_status'], "<b>") !== false) ? $datas['marital_status'] : null;
			$popup_message['email']			= (strpos($datas['email'], "<b>") !== false) ? $datas['email'] : null;
			$popup_message['time_reach']	= (strpos($datas['time_reach'], "<b>") !== false) ? $datas['time_reach'] : null;
			$popup_message['position']		= (strpos($datas['position'], "<b>") !== false) ? $datas['position'] : null ;
			$popup_message['date_start']	= (strpos($datas['date_start'], "<b>") !== false) ? $datas['date_start'] : null;
			$popup_message['file_resume']	= (strpos($datas['file_resume'], "<b>") !== false) ? $datas['file_resume'] : null;
			
			Session::instance()->set('applicant_msg', "<tr><td class='label' style='background:#FF4C4C;color:#B30000;' colspan='6'>". implode($popup_message) . "</td></tr>");
			$this->request->redirect('careers?invalid_inputs=true&code='.sha1('false'.date('Y-m-j;H;i;s')));
		} else {
			$resume = Validation::factory($_FILES);

			$this->obj['ems_logic']->save_applicant($datas, $resume['resume']['name']);
			Upload::save($resume['resume'], $resume['resume']['name'], "resumes");
			Session::instance()->set('applicant_msg', "<tr><td class='label' style='background:#98ff98;color:#0C6E23;text-align:center;' colspan='6'><b>Your application entry has been submitted.</b></td></tr>");
			$this->request->redirect('careers?valid_inputs=true&code='.sha1('true'.date('Y-m-j;H;i;s')));
		}
	}
	public function validate_applicant_name($datas = array()){
		$name = str_replace(" ","",$datas[0]);
		return (Valid::alpha($name)) ? $name : "Invalid Entry of <b>" . $datas[1] . "</b>. ";
	}
	public function validate_address($address = null){
		return (count(explode(",", $address)) >= 2) ? $address : "Invalid <b>Address</b> input. ";
	}
	public function validate_date($date = null){
		return (count(explode("-",$date)) >= 3) ? $date : "Invalid <b>Date input</b>. " ;
	}
	public function validate_marital_stat($marital_status = null){
		return ($marital_status != null) ? $marital_status : "Invalid <b>Marital Status</b>. ";
	}
	public function validate_mobile($mobile = null){
		if(strlen($mobile) == 11){
			if(Valid::numeric($mobile)){
				return $mobile;
			} else {
				return "Invalid <b>mobile number</b> input. ";
			}
		} else {
			return "Invalid <b>Mobile Number</b> input. ";
		}
	}
	public function validate_position($position = null){
		if($position == null){
			return "Please enter your <b>Position</b>. "; 
		} else if($position != null){
			if(count(explode(" ", $position)) > 0){
				foreach(explode(" ", $position) AS $position_pieces){
					if(!Valid::alpha($position_pieces)){
						return "Invalid entry of <b>Position</b>. "; break;
					}
				}
				return $position;
			} else if(count(explode(" ", $position)) == 0){
				if(Valid::alpha($position)){
					return $position;
				}
				return "Invalid entry of <b>Position</b>. ";
			}
		}
	}
	public function validate_file_resume($FILES = array()){
		$resume = Validation::factory($FILES);
		if(in_array(explode(".",$resume['resume']['name'])[1], array("doc","docx","odt","pdf"))){
 			//Upload::save($resume['resume'], $resume['resume']['name'], "resumes");
			return $resume['resume']['name'];
		} else {
			return "Invalid <b>File Format</b> of your resume. ";
		}
	}
	public function validate_time_reach($time_reach = null){
		return (in_array($time_reach, array("morning","afternoon","evening","night")) == true) ? $time_reach : "Invalid selection of <b>Time of Reach</b>, Please select a valid time of reach. ";
	}
	// ENd of validation of Appplicant entry
	public function action_leaves_history(){
		// Calls webstructure
		$presentation_tier = View::factory ( "ems/hr/leaves_history" );
		$presentation_tier->head = $this->obj ['webstructure']->head ( "HR Dashboard" );
		$presentation_tier->page_header = $this->obj ['webstructure']->page_header ( $this->obj ['webstructure']->ems_hr_navigation () );
		$presentation_tier->date_leave = array(""=>"","ASC"=>"Ascending", "DESC"=>"Descending");
		
		$filter_datas = array(
			"date_leave"=>$this->request->query('date_leave'),
			"leave_type"=>$this->request->query('leave_type'),
			"leave_status"=>($this->request->query('leave_status')==0)?null:$this->request->query('leave_status')
		);
		
		$presentation_tier->filter_datas = array(
			"date_leave"=>$this->request->query('date_leave'),
			"leave_type"=>$this->request->query('leave_type'),
			"leave_status"=>($this->request->query('leave_status')==0)?null:$this->request->query('leave_status')
		);
		
		// Model Core Logics
		$presentation_tier->account_name = $this->obj['acc_logic']->get_account_name(Session::instance()->get('hr_sess'), "ems");
		$presentation_tier->leaves = $this->obj['ems_logic']->select_leaves($filter_datas);
		$presentation_tier->leave_types = array("", "maternity leave","paternity leave","filial leave", "emergency leave");
		$presentation_tier->leave_statuses = array(0=>"",1=>"Approved",2=>"Rejected");
		$this->response->body($presentation_tier);
	}
	public function action_hr_add(){
		$this->obj['response']->headers(array(
				'Cache-Control' => 'no-store, no-cache, must-revalidate, max-age=0',
				'Pragma'		=> 'no-cache',
				'Expires'		=>'Sat, 26 Jul 1997 05:00:00 GMT'));
		// validates session
		if(Session::instance()->get('hr_id') == null && Session::instance()->get('hr_sess') == null){
			echo "<script>self.location='" . URL::site ( 'login', null, true ) . "';</script>";
		}
		// Calls presentation page file
		$presentation_tier = View::factory ( "ems/HR/add_employee" );
		
		// Calls webstructure
		$presentation_tier->head = $this->obj ['webstructure']->head ( "Add Employee - HR Head");
		$presentation_tier->page_header = $this->obj ['webstructure']->page_header ( $this->obj ['webstructure']->ems_hr_navigation () );
		$presentation_tier->account_name = $this->obj['acc_logic']->get_account_name(Session::instance()->get(md5('ems').'admin_sess'), "ems");
		$presentation_tier->employee_types = array(1=>"Fulltime", 2=>"Part-Time");
		$presentation_tier->civil_status = array(1=>"Single",2=>"Married");
		
		// Core Model
		$presentation_tier->job_positions = $this->obj['ems_logic']->get_position();
		$presentation_tier->departments = $this->obj['ems_logic']->get_departments();
		
		$this->response->body($presentation_tier);
	}
	public function action_hr_dashboard(){ //Current work
		$this->obj['response']->headers(array(
				'Cache-Control' => 'no-store, no-cache, must-revalidate, max-age=0',
				'Pragma'		=> 'no-cache',
				'Expires'		=>'Sat, 26 Jul 1997 05:00:00 GMT'));
		// validates session
		if(Session::instance()->get('hr_id') == null && Session::instance()->get('hr_sess') == null){
			echo "<script>self.location='" . URL::site ( 'login', null, true ) . "';</script>";
		}
		
		// Calls presentation page file
		$presentation_tier = View::factory ( "ems/hr/dashboard" );
		
		// Calls webstructure
		$presentation_tier->head = $this->obj ['webstructure']->head ( "HR Dashboard" );
		$presentation_tier->page_header = $this->obj ['webstructure']->page_header ( $this->obj ['webstructure']->ems_hr_navigation () );
		
		// Model Core Logics
		$presentation_tier->account_name = $this->obj['acc_logic']->get_account_name(Session::instance()->get('hr_sess'), "ems");
		$presentation_tier->applicants = $this->obj['ems_logic']->get_applicants();
		$presentation_tier->positions = $this->obj['ems_logic']->get_position();
		$presentation_tier->job_positions = $this->obj['ems_logic']->get_position();
		$presentation_tier->departments = $this->obj['ems_logic']->get_departments();
		$presentation_tier->marital_statuses = array(1=>"Single", 2=>"Married");
		$presentation_tier->working_statuses = array(1=>"Active", 2=>"Resigned");
		$presentation_tier->genders = array('male'=>'m','female'=>'f');
		$presentation_tier->sort_queries = array(
				"name" => array("","Firstname - ASC","Firstname - DESC","Lastname - ASC","Lastname - DESC"),
				"position"=>array("","ASC","DESC"),
				"department"=>$this->obj['ems_logic']->get_departments(),
				"type"=>array("",2=>"Part-Time",1=>"Fulltime"),
				"date"=>array("","ASC","DESC"));
		
		$filter_datas = array(
			"working_status"=>null,
			"firstname"=>null,"middlename"=>null,"lastname"=>null,"department_name"=>null,
			"marital_status"=>null,
			"date_start_work_from"=>null,
			"date_start_work_to"=>null,
			"name"=>($this->request->query('name')==0)?null:$this->request->query('name'),
			"position"=>($this->request->query('position')==0)?null:$this->request->query('position'),
			"department"=>($this->request->query('department')==0)?null:$this->request->post('department'),
			"type"=>($this->request->query('type')==0)?null:$this->request->query('type'),
			"date"=>($this->request->query('date')==0)?null:$this->request->query('date'),
			"date_modified"=>$this->request->query('date_modified'),
			"search_query"=>$this->request->query('search_query'),
				"resign_employees"=>false
		);

		$presentation_tier->filter_data = $filter_datas;
		$presentation_tier->employees = $this->obj['ems_logic']->get_employees($filter_datas);
// 		echo "<pre>";print_r($presentation_tier->employees);die();
		$this->response->body($presentation_tier);
	}
	public function action_set_applicant_schedule(){
            if($this->request->post('schedule') == null){
                echo 0;
            } else {
		$data = array();
		$data['applicant'] = $this->request->post('applicant');
		$data['schedule_date'] = date_format(date_create($this->request->post('schedule')), "Y-m-d");
		$data['schedule_time'] = date("H:i",strtotime($this->request->post('schedule')));//date_format(date_create($this->request->post('schedule')),"YYY-MM");
		$this->obj['ems_logic']->set_applicant_schedule($data);
                echo 1;
            }
	}
	public function action_update_employee(){
		$datas = array();
		$msg = null;
		$datas['previous_id'] = $this->request->post('previous_id');
		if($this->request->post('emp_id')!=null){
			if(Valid::numeric($this->request->post('emp_id'))){
				$datas['employee_id'] = $this->request->post('emp_id');
			} else {
				$msg .= "Employee ID should be numeric.";
			}
		} else {
			$msg .= "Invalid Employee number.";
		}
		
		if(Valid::alpha($this->request->post('fname'), true)){
			$datas['firstname'] = $this->request->post('fname');
		} else {
			$msg .= "Firstname entry is not valid. " ;
		}
		
		if(Valid::alpha($this->request->post('mname'), true)){
			$datas['middlename'] = $this->request->post('mname');
		} else {
			$msg .= "Middlename entry is not valid. ";
		}
		
		if(Valid::alpha($this->request->post('lname'), true)){
			$datas['lastname'] = $this->request->post('lname');
		} else {
			$msg.="Lastname entry is not valid. ";
		}
		
		$datas['position'] = $this->request->post('position');
		
		if($this->request->post('address') != null){
			$datas['address'] = $this->request->post('address');
		} else {
			$msg.="Address entry is not valid. ";
		}
		
		if($this->request->post('sex') != null){
			$datas['sex'] = $this->request->post('sex');
		} else {
			$msg.="Sex entry is not valid.";
		}
		if($this->request->post('civil_status') != null){
			$datas['civil_status'] = $this->request->post('civil_status');
		} else {
			$msg.="Civil Status entry is not valid. ";
		}
		$datas['working_status'] = $this->request->post('working_status');
	
		if($this->request->post('employee_rate') !=null ){
			$datas['employee_rate'] = $this->request->post('employee_rate');
		} else {
			$datas['employee_rate'] = "Employee rate is not valid.";
		}//embuscado added function
		
		if(!Valid::numeric($this->request->post('mobile'))){
			$datas['mobile'] = "Mobile number should be numeric.";
		} else {
			$datas['mobile'] = $this->request->post('mobile');
		}
		
		if(!Valid::numeric(str_replace("-", "", $this->request->post('telephone')))){
			$datas['telephone'] = "Telephone number should be numeric.";
		} else {
			$datas['telephone'] = $this->request->post('telephone');
		}
		
		if(Valid::email($this->request->post('email'))){
			$datas['email'] = $this->request->post('email');
		} else {
			$datas['email'] = "Invalid Email.";
		}
		
		$datas['other_address'] = $this->request->post('other_address');
		
		if($msg == null){
			echo $this->obj['ems_logic']->update_employee($datas);
		} else {
			echo $msg;
		}
	}
	public function action_employee_leaves(){
		
		$employee_id = $this->request->query('employee');
		
		$leave_types = array("maternity leave","sick leave","paternity leave","filial leave", "emergency leave");
		sort($leave_types);
		$presentation_tier = View::factory('EMS/HR/employee_leaves');
		$presentation_tier->head = $this->obj ['webstructure']->head ( "HR Dashboard" );
		$presentation_tier->page_header = $this->obj ['webstructure']->page_header ( $this->obj ['webstructure']->ems_hr_navigation () );
		
		//  Core models
		$presentation_tier->employee_info = $this->obj['ems_logic']->get_employee($employee_id);
		$presentation_tier->leave_types = $leave_types;
		$this->response->body($presentation_tier);
	}
	public function action_admin_leave_request(){
		$presentation_tier = View::factory ( "ems/admin/leaves" );
		
		// Calls webstructure
		$presentation_tier->head = $this->obj ['webstructure']->head ( "General Manager");
		$presentation_tier->page_header = $this->obj ['webstructure']->page_header ( $this->obj ['webstructure']->ems_admin_navigation () );

		// Core Logics
		$presentation_tier->account_name = $this->obj['acc_logic']->get_account_name(Session::instance()->get(md5('ems').'admin_sess'), "ems");
		$presentation_tier->leaves = $this->obj['ems_logic']->select_leaves();
		
		$this->response->body($presentation_tier);
	}
	public function action_approve_leave(){
		$this->obj['ems_logic']->approve_leave($this->request->post('leave_no'));
	}
	public function action_deny_leave(){
		$this->obj['ems_logic']->deny_leave($this->request->post('leave_no'));
	}
	public function action_print_leave(){
		$presentation_tier = View_PDF::factory ( 'EMS/admin/print_leave', array (
				'title' => 'Print Leave',
				'name' => 'print_leave.pdf'
		) )->set ( 'leave_info', $this->obj['ems_logic']->get_leave_info($this->request->query('leave_no')))->render ();
		exit ();
	}
	public function action_submit_leave(){
		$data = array(
			"employee_id"=>$this->request->post('employee_id'),
			"address"=>$this->request->post('address'),
			"leave_type"=>$this->request->post('leave_type'),
			"date_leave"=>$this->request->post('date_leave'),
			"no_of_days"=>$this->request->post('no_of_days'),
			"reason"=>$this->request->post('reason')
		);
		$this->obj['ems_logic']->get_leave_request($data);
		echo "<td colspan='4' style='font-weight:bold; text-align:center; background:#8eec6a; color:#268e00;'>Leave Request has been successfully sent.</td>";
	}
	public function action_update_employee_clerk(){
		$msg = "";
		
		if(!Valid::alpha($this->request->post('firstname'))){
			$msg .= "Invalid <b>Firstname</b>. ";
		}
		
		if(!Valid::alpha($this->request->post('lastname'))){
			$msg .= "Invalid <b>Lastname</b>. ";
		}
		
		if(strpos($msg, 'Invalid') !== false){
			echo "<td style='background:#ff4940; color:#a60800;' colspan='2'>".$msg."</td>";
		} else {
			$datas = array(
				"employee_id"=>$this->request->post('employee_id'),
				"firstname"=>$this->request->post('firstname'),
				"middlename"=>$this->request->post('middlename'),
				"lastname"=>$this->request->post('lastname'),
				"position"=>$this->request->post('position'),
				"marital_status"=>$this->request->post('marital_status')
			);
			$this->obj['ems_logic']->update_employee_clerk($datas);
			echo "<td colspan='2' style='background:#85eb6a;color:#1d8c00;font-weight:bold;'>Employee Information successfully updated.</td>";
		}
	}
	public function action_export_employees(){
		$filter_datas = array(
			"working_status"=>null,
			"firstname"=>null,"middlename"=>null,"lastname"=>null,"department_name"=>null,
			"marital_status"=>null,
			"date_start_work_from"=>null,
			"date_start_work_to"=>null,
			"name"=>$this->request->query('name'),
			"position"=>$this->request->query('position'),
			"department"=>$this->request->query('department'),
			"type"=>$this->request->query('type'),
			"date"=>$this->request->query('date'),
			"date_modified"=>$this->request->query('date_modified'),
			"search_query"=>$this->request->query('search_query'),
				"resign_employees"=>false
		);
		
		$this->obj['ems_logic']->get_audit(Session::instance()->get( md5('ems') . 'admin_sess'), $this->audit_trail['export_emps']);
		$presentation_tier = View_PDF::factory ( 'EMS/admin/employee_list_export', array (
				'title' => 'Export Employee Lists',
				'name' => 'employee_list_report.pdf'
		) )->set ( 'employees', $this->obj['ems_logic']->get_employees($filter_datas))->render ();
		exit ();
	}
	public function action_hr_logout(){
		$this->obj['ems_logic']->get_audit(
				Session::instance()->get('hr_sess'),
				$this->audit_trail['logout']
		);
		Session::instance ()->delete ( 'hr_id' );
		Session::instance ()->delete ( 'hr_sess' );
		echo "<script>self.location='" . URL::site ( 'login', null, true ) . "';</script>";
	}
        public function action_admin_archives(){
            		$this->obj['response']->headers(array(
				'Cache-Control' => 'no-store, no-cache, must-revalidate, max-age=0',
				'Pragma'		=> 'no-cache',
				'Expires'		=>'Sat, 26 Jul 1997 05:00:00 GMT'));
		// validates session
		if(Session::instance()->get(md5('ems') . 'admin_id') == null && Session::instance()->get(md5('ems') . 'admin_sess') == null){
			echo "<script>self.location='" . URL::site ( 'login', null, true ) . "';</script>";
		}
		
		// Calls presentation page file
		$presentation_tier = View::factory ( "ems/admin/archives" );
		
		// Calls webstructure
		$presentation_tier->head = $this->obj ['webstructure']->head ( "HR Dashboard");
		$presentation_tier->page_header = $this->obj ['webstructure']->page_header ( $this->obj ['webstructure']->ems_admin_navigation () );
		
        // filter datas
        $data_filter = array(
        		"working_status"=>$this->request->query('working_status'),
                "name"=>($this->request->query('name')!=null) ? $this->request->query('name') : null,
                "firstname"=>($this->request->query('firstname')!=null)?$this->request->query('firstname') : null,
                "middlename"=>($this->request->query('middlename')!=null)?$this->request->query('middlename'):null,
                "lastname"=>($this->request->query('lastname')!=null)?$this->request->query('lastname'):null,
                "position"=>($this->request->query('position') != null)?$this->request->query('position') : null,
                "department"=>($this->request->query('department') != null)? $this->request->query('departname') : null,
                "department_name"=>($this->request->query('dept')!=null)?$this->request->query('dept'):null,
                "date_start_work_from"=>($this->request->query('date_start_work_from')!=null)?$this->request->query('date_start_work_from'):null,
                "date_start_work_to"=>($this->request->query('date_start_work_from')!=null)?$this->request->query('date_start_work_from'):null,
                "marital_status"=>($this->request->query('marital_stat')!=null)?$this->request->query('marital_stat'):null,
                "type"=>($this->request->query('type')!=null) ? $this->request->query('type') : null,
                "date"=>($this->request->query('date')!=null) ? $this->request->query('date') : null,
                "date_modified"=>($this->request->query('date_modified')!=null) ? $this->request->query('date_modified') : null,
                "search_query"=>($this->request->query('search_query')!=null) ? $this->request->query('search_query') : null,
                "resign_employees"=>true
		);

        // Core Logics
		$presentation_tier->account_name = $this->obj['acc_logic']->get_account_name(Session::instance()->get(md5('ems').'admin_sess'), "ems");
		$presentation_tier->employee_status = array(1=>"Active", 0=>"Resigned");
		$presentation_tier->marital_status = array(""=>"",1=>"Single",2=>"Married");
        $presentation_tier->departments = $this->obj['ems_logic']->get_departments();
        $presentation_tier->employees = $this->obj['ems_logic']->get_employees_archives($data_filter,0);
                
		// Renders Template
		$this->response->body($presentation_tier);
       }
       public function action_export_archives(){
       	// exports as excel file
       	                $data_filter = array(
                    "firstname"=>($this->request->query('firstname')!=null)?$this->request->query('firstname') : null,
                    "middlename"=>($this->request->query('middlename')!=null)?$this->request->query('middlename'):null,
                    "lastname"=>($this->request->query('lastname')!=null)?$this->request->query('lastname'):null,
                    "position"=>($this->request->query('position') != null)?$this->request->query('position') : null,                    "department_name"=>($this->request->query('dept')!=null)?$this->request->query('dept'):null,
                    "date_start_work_from"=>($this->request->query('date_start_work_from')!=null)?$this->request->query('date_start_work_from'):null,
                    "date_start_work_to"=>($this->request->query('date_start_work_from')!=null)?$this->request->query('date_start_work_from'):null,
                    "marital_status"=>($this->request->query('marital_stat')!=null)?$this->request->query('marital_stat'):null,
                    "resign_employees"=>false
                    );
			$presentation_tier = View::factory("ems/admin/export_archives");
			$presentation_tier->employees = $this->obj['ems_logic']->get_employees($data_filter,2);
			$this->response->body($presentation_tier);
       }
	public function action_admin_dashboard(){
		$this->obj['response']->headers(array(
				'Cache-Control' => 'no-store, no-cache, must-revalidate, max-age=0',
				'Pragma'		=> 'no-cache',
				'Expires'		=>'Sat, 26 Jul 1997 05:00:00 GMT'));
		// validates session
		if(Session::instance()->get(md5('ems') . 'admin_id') == null && Session::instance()->get(md5('ems') . 'admin_sess') == null){
			echo "<script>self.location='" . URL::site ( 'login', null, true ) . "';</script>";
		}
		
		// Calls presentation page file
		$presentation_tier = View::factory ( "ems/admin/dashboard" );
		
		// Calls webstructure
		$presentation_tier->head = $this->obj ['webstructure']->head ( "General Manager");
		$presentation_tier->page_header = $this->obj ['webstructure']->page_header ( $this->obj ['webstructure']->ems_admin_navigation () );
		$presentation_tier->verify_applicant_form = ($this->request->query('applicant_form') != null) ? $this->constructApplicantForm($this->request->query("applicant_no")) : null;
		$presentation_tier->verify_applicant_form_script = ($this->request->query('applicant_form') != null) ? "$('#hiringModal').reveal();$('#birthdateApplicant').datepicker({maxDate:'0',minDate: new Date(1882, 10 - 1, 25),changeMonth:true,changeYear:true,dateFormat:'yy-mm-dd'});" : null;
		$presentation_tier->ajax_validate_hiree = ($this->request->query('applicant_form') != null) ? $this->obj['webstructure']->ajax_validate_applicant():null;
		
		// Core Logics
		$presentation_tier->account_name = $this->obj['acc_logic']->get_account_name(Session::instance()->get(md5('ems').'admin_sess'), "ems");
		$presentation_tier->schduled_applicants = $this->obj['ems_logic']->get_applicants(1);
		
		$presentation_tier->sort_queries = array(
				"name" => array("","Firstname - ASC","Firstname - DESC","Lastname - ASC","Lastname - DESC"),
				"position"=>array("","ASC","DESC"),
				"department"=>$this->obj['ems_logic']->get_departments(),
				"type"=>array("",1=>"Fulltime",2=>"Part-Time"),
				"date"=>array("","ASC","DESC"),
				"date_modified"=>array("","ASC","DESC")
		);
		
		$filter_datas = array(
				"working_status"=>null,
				"firstname"=>null,"middlename"=>null,"lastname"=>null,
				"department_name"=>null,"date_start_work_from"=>null,"date_start_work_to"=>null,
				"marital_status"=>null,
				"name"=>$this->request->query('name'),
				"position"=>$this->request->query('position'),
				"department"=>$this->request->query('department'),
				"type"=>$this->request->query('type'),
				"date"=>$this->request->query('date'),
				"date_modified"=>$this->request->query('date_modified'),
				"search_query"=>$this->request->query('search_query'),
				"resign_employees"=>0
		);
// 		echo "<pre>";print_r($filter_datas);die();
		$presentation_tier->filter_data = $filter_datas;
		$presentation_tier->employees = $this->obj['ems_logic']->get_employees($filter_datas);
		$presentation_tier->job_positions = $this->obj['ems_logic']->get_position_department();
		$presentation_tier->marital_statuses = array(1=>"Single", 2=>"Married");
		$this->response->body($presentation_tier);
	}
	public function action_add_employee(){
		$this->obj['response']->headers(array(
				'Cache-Control' => 'no-store, no-cache, must-revalidate, max-age=0',
				'Pragma'		=> 'no-cache',
				'Expires'		=>'Sat, 26 Jul 1997 05:00:00 GMT'));
		// validates session
		if(Session::instance()->get(md5('ems') . 'admin_id') == null && Session::instance()->get(md5('ems') . 'admin_sess') == null){
			echo "<script>self.location='" . URL::site ( 'login', null, true ) . "';</script>";
		}
		
		// Calls presentation page file
		$presentation_tier = View::factory ( "ems/admin/add_employee" );
		
		// Calls webstructure
		$presentation_tier->head = $this->obj ['webstructure']->head ( "Add Employee - General Manager");
		$presentation_tier->page_header = $this->obj ['webstructure']->page_header ( $this->obj ['webstructure']->ems_admin_navigation () );
		$presentation_tier->account_name = $this->obj['acc_logic']->get_account_name(Session::instance()->get(md5('ems').'admin_sess'), "ems");
		$presentation_tier->employee_types = array(1=>"Fulltime", 2=>"Part-Time");
		$presentation_tier->civil_status = array(1=>"Single",2=>"Married");
		
		// Core Model
		$presentation_tier->job_positions = $this->obj['ems_logic']->get_position();
		$presentation_tier->departments = $this->obj['ems_logic']->get_departments();
		
		$this->response->body($presentation_tier);
	}
	public function action_get_position_by_dept(){
		$positions = $this->obj['ems_logic']->get_position_by_dept($this->request->post('department'));
		$html = null;
		$html .= "<select name='position' style='width:98%;'>";
		foreach($positions AS $position){
			$html .= "<option value='".$position['position_no']."'>" . $position['pos_name'] . "</option>" ;
		}
		$html .= "</select>";
		echo $html;
	}
	public function action_compute_age(){ // computes Employee's Age
		$birth_date = $this->request->post('birthdate');
		$age = floor((time() - strtotime($birth_date))/31556926);
		echo $age;
	}
	public function action_delete_applicant(){
		$this->obj['ems_logic']->delete_applicant($this->request->post('applicant_id'));
		// Embuscado Update December 3
		$this->obj['ems_logic']->get_audit(
				Session::instance()->get( md5('ems') . 'admin_sess'),
				$this->audit_trail['delete_app']
		);
	}        
	public function action_admin_logout(){
		// Embuscado update December 3
		$this->obj['ems_logic']->get_audit(
				Session::instance()->get(md5('ems').'admin_sess'),
				$this->audit_trail['logout']
		);
		Session::instance ()->delete ( md5('ems') . 'admin_id');
		Session::instance ()->delete ( md5('ems') . 'admin_sess' );
		echo "<script>self.location='" . URL::site ( 'login', null, true ) . "';</script>";
	}
	public function constructApplicantForm($applicant_no = 0){
		$data = array();
		$data = $this->obj['ems_logic']->get_applicant($applicant_no);
		$data['positions'] = $this->obj['ems_logic']->get_position();

		return $this->obj['webstructure']->applicantHiringForm($data);
	}
	public function action_delete_employee(){
		$employee_id = $this->request->post('employee_id');
		$this->obj['ems_logic']->delete_employee($employee_id);
		// Embuscado Update December 3
		$this->obj['ems_logic']->get_audit(
				Session::instance()->get(md5('ems').'admin_sess'),
				$this->audit_trail['remove_emp']
		);
	}
	public function action_adding_employee(){
		$data = array(
			'employee_code'=>$this->request->post('barcode_val'),
			'firstname'=>$this->request->post('firstname'),
			'middlename'=>$this->request->post('middlename'),
			'lastname'=>$this->request->post('lastname'),			
			'address'=>$this->request->post('address'),
			'email'=>$this->request->post('email'),
			'birthdate'=>$this->request->post('birthdate'),
			'job_position'=>$this->request->post('job_position'),
			'employee_type'=>$this->request->post('employee_type'),
			'civil_status'=>$this->request->post('civil_status'),
			'pob'=>$this->request->post('place_of_birth'),
			'religion'=>$this->request->post('religion'),
			'gender'=>$this->request->post('gender'),
			'citizenship'=>$this->request->post('citizenship'),
			'emg_name'=>$this->request->post('emg_name_one'),
			'emg_contact'=>$this->request->post('emg_contact_one'),
			'emg_sec_contact'=>$this->request->post('emg_sec_contact_one'),
			'emg_name_two'=>$this->request->post('emg_name_two'),
			'emg_contact_two'=>$this->request->post('emg_contact_two'),
			'emg_sec_contact_two'=>$this->request->post('emg_sec_contact_two')
		);
		
		
		$error = array();

		if($data['employee_code'] == null){
			$error[] = "Employee ID not valid.";
		} else if(!Valid::numeric($data['employee_code'])){
			$error[] = "Employee ID should be numeric.";
		}
		
		if(!Valid::alpha(str_replace(" ", "", $data['firstname']))){
			$error[] = "Firstname is not valid, should be all alphabetical.";
		}
		
		if(!Valid::alpha(str_replace(" ", "", $data['middlename']))){
			$error[] = "Middlename is not valid, should be all alphabetical.";
		}
		
		if(!Valid::alpha(str_replace(" ", "", $data['lastname']))){
			$error[] = "Lastname is not valid, should be all alphabetical.";
		}
		
		if($data['address'] == null){
			$error[] = "Address should not be empty.";
		}
		
		if(!Valid::email($data['email'])){
			$error[] = "Email is not valid.";
		}
		
		if($data['birthdate'] == null){
			$error[] = "Birthdate is not valid.";
		}
		
		if(!Valid::alpha(str_replace(" ", "", $data['pob']))){
			$error[] = "Place of Birth is not valid, should be all alphabetical.";
		}
		
		if(!Valid::alpha(str_replace(" ", "", $data['religion']))){
			$error[] = "Religion is not valid, should be all alphabetical.";
		}
		
		if($data['gender'] == null){
			$error[] = "Gender is required.";
		}
		if(!Valid::alpha(str_replace(" ", "", $data['citizenship']))){
			$error[] = "Citizenship is not valid, should be all alphabetical.";
		}
		
		if($data['emg_name'] == null || $data['emg_contact'] == null || $data['emg_sec_contact'] == null ||
		$data['emg_name_two'] == null || $data['emg_contact_two'] == null || $data['emg_sec_contact_two'] == null){
			$error[] = "Informations in the emergency should not be empty.";
		}

		
		if(count($error)>0){
			$error_msg = implode(" ",$error);
			echo "<td colspan='4'><div style='background:#ff7373;color:#a60000;font-weight:bold;'>";
			echo $error_msg;
			echo "</div></td>";
		} else {
			$this->obj['ems_logic']->insert_employee($data);
			echo "<td colspan='4'><div style='background:#95ee6b;color:#2f8f00;font-weight:bold;'>";
			echo "Employee has successfully added.";
			echo "</div></td>";
		}		
	}
	public function action_validate_hiree(){
		$data = array(
				'applicant_no' => $this->request->post('applicant_no'),
				'employee_code'=>$this->request->post('barcode_val'),
				'firstname'=>$this->request->post('firstname'),
				'middlename'=>$this->request->post('middlename'),
				'lastname'=>$this->request->post('lastname'),
				'address'=>$this->request->post('address'),
				'marital_status'=>$this->request->post('marital_status'),
				'employee_type'=>$this->request->post('employee_type'),
				'position'=>$this->request->post('position'),
				'birthday'=>$this->request->post('birthday'),
				'mobile'=>$this->request->post('mobile'),
				'email'=>$this->request->post('email')
		);
		
		$error_msg = null;
		
		if(!Valid::alpha($data['firstname'])){
			$error_msg .= "Invalid Firstname. ";
		}
		
		if(!Valid::alpha($data['middlename'])){
			$error_msg .= "Invalid Middlename. ";
		}
		
		if(!Valid::alpha($data['lastname'])){
			$error_msg .= "Invalid Lastname. ";
		}
		
		if($data['address'] == null){
			$error_msg .= "Invalid Address. ";
		}
		
		if($data['birthday'] == null){
			$error_msg .= "Invalid Birthdate input. ";
		} else {
			$data_pieces = explode("-", $data['birthday']);
			$applicants_age = date("Y") - $data_pieces[0];
			if($applicants_age < 18){
				$error_msg .= "This applicant is to young. ";
			}
		}
		
		if($error_msg != null){
			$error_sub_msg = $error_msg;
			$error_msg = null;
			echo "<td colspan='2' style='background:#FF7373;color:#B30000;font-weight:bold;'>" . $error_sub_msg . "</td>";
			$error_sub_msg = null;
		} else {
			$this->add_employee($data);
			echo "<td colspan='2' style='background:#73FF73;color:#008C00;font-weight:bold;'>";
			echo "Successfully Added to Employees Lists.";
			echo "</td>";
			echo "<script>self.location='".URL::site('ems/admin_dashboard',null,true)."';</script>";
		}
	}
	public function add_employee($data = array()){
		$this->obj['ems_logic']->add_employee($data);
		// Embuscado Update December 3
		$this->obj['ems_logic']->get_audit(Session::instance()->get(md5('ems') . 'admin_sess'), $this->audit_trail['hire_emp']);
	}
}
