<?php ini_set("display_errors", true);
class Controller_Pms extends Controller {
	public $obj = array();
	public function __construct(Request $request, Response $response){
		parent::__construct($request, $response);
		// Misc. Classes
		$this->obj['webstructure'] = new Webstructure();
		$this->obj['response'] = Response::factory();
		// Core Models
		$this->obj['acc_logic'] = new Model_Account();
		$this->obj['ems_logic'] = new Model_Ems();
		$this->obj['pms_logic'] = new Model_Pms();
	}
	public function action_index(){
		$this->request->redirect("PMS/personnel_dashboard");
	}
	public function action_attendance_monitoring(){
		$presentation_tier = View::factory("PMS/attendance_monitoring");
		$presentation_tier->head = $this->obj ['webstructure']->head ( "Attendance Monitoring" );
		$presentation_tier->page_header = $this->obj ['webstructure']->page_header ();
		$this->response->body($presentation_tier);
	}
	public function action_get_employee_log(){
		$employee_id = $this->request->post('employee_id');
		if($this->request->post('login') != null){
			if($this->obj['pms_logic']->validate_logged_employee($employee_id) == 0){
				if($this->obj['pms_logic']->validate_employee_log($employee_id) > 0){
					$this->login_msg("It Seems that you're already logged in.");
				} else {
					$this->obj['pms_logic']->login_employee($employee_id);
					$this->obj['pms_logic']->attendance_login($employee_id);
					$this->login_msg("Employee logged in successfully");
				}
			} else {
				$this->logout_msg("You've already logged in this day.");
			}
		}
	
		if($this->request->post('logout') != null){
			if($this->obj['pms_logic']->validate_employee_log($employee_id) > 0){
				$this->obj['pms_logic']->logout_employee($employee_id);
				$this->obj['pms_logic']->attendance_logout($employee_id);
				$this->logout_msg("Employee Logged out successfully.");
			} else {
				$this->logout_msg("You're already logged out.");
			}
		}
	}
	public function action_deduction_table(){
		$this->request->headers('CACHE-CONTROL','NO-CACHE');
		$this->request->headers('EXPIRES', date('Y-m-d H:i:s'));
		$this->request->headers('PRAGMA', 'NO-CACHE');
		if(Session::instance()->get('pms_id') == null && Session::instance()->get('pms_sess') == null){
			echo "<script>self.location='" . URL::site ( 'login', true, false ) . "';</script>";
		}
		$presentation_tier = View::factory("PMS/timekeeper/edit_deduction");
		$presentation_tier->head = $this->obj ['webstructure']->head ( "Payroll Personnel Dashboard");
		$presentation_tier->page_header = $this->obj ['webstructure']->page_header ( $this->obj ['webstructure']->pms_personnel_navigation () );
		
		$presentation_tier->account_name = array();//$this->obj['acc_logic']->get_account_name(Session::instance()->get('pms_id'), "pms");

		$presentation_tier->sss_deductions = $this->obj['pms_logic']->get_sss_deductions();
		$presentation_tier->philhealth_deductions = $this->obj['pms_logic']->get_philhealth_deductions();
		$presentation_tier->pagibig_deduction = $this->obj['pms_logic']->get_pagibig_deduction();
				
		$this->response->body($presentation_tier);
	}
	public function action_save_deduction_ph(){
		$data = array('ded_no'=>$this->request->post('ded_no'), 'deduction'=>$this->request->post('deduction'));
		$this->obj['pms_logic']->update_ph_deduction($data);
		echo "Deduction has been changed";
	}
	public function action_save_deduction_sss(){
		$data = array('ded_no'=>$this->request->post('ded_no'), 'deduction'=>$this->request->post('deduction'));
		$this->obj['pms_logic']->update_sss_deduction($data);
		echo "Deduction has been changed";
	}
	public function action_update_deduction(){
		$data = array();
		$data['deduction_no'] = $this->request->post('ded_no');
		$data['sss'] = $this->request->post('sss');
		$data['philhealth'] = $this->request->post('philhealth');
		$data['pagibig'] = $this->request->post('pagibig');
		$this->obj['pms_logic']->update_deduction_data($data);
		echo 1;
	}
	public function action_admin_dashboard(){
		$this->request->headers('CACHE-CONTROL','NO-CACHE');
		$this->request->headers('EXPIRES', date('Y-m-d H:i:s'));
		$this->request->headers('PRAGMA', 'NO-CACHE');
		
		if(Session::instance()->get(md5('pms').'admin_id') == null && Session::instance()->get(md5('pms').'admin_sess') == null){
			echo "<script>self.location='" . URL::site ( 'login', null, true ) . "';</script>";
		}

		$presentation_tier = View::factory("PMS/admin/dashboard");
		$presentation_tier->head = $this->obj ['webstructure']->head ( "Payroll Admin Homepage" );
		$presentation_tier->page_header = $this->obj ['webstructure']->page_header ($this->obj['webstructure']->pms_admin_navigation());
		
		$presentation_tier->account_name = null;
		$filter_datas = array(
				"name"=>$this->request->query('name'),
				"position"=>$this->request->query('position'),
				"department"=>$this->request->query('department'),
				"type"=>$this->request->query('type'),
				"date"=>$this->request->query('date'),
				"date_modified"=>$this->request->query('date_modified'),
				"search_query"=>$this->request->query('search_query'),
				""
		);
		$presentation_tier->employees = $this->obj['pms_logic']->get_employees_rate();
		$this->response->body($presentation_tier);
	}
	public function action_admin_logout(){
		Session::instance ()->destroy ( md5('pms') . 'admin_id' );
		Session::instance ()->destroy ( md5('pms') . 'admin_sess' );
		echo "<script>self.location='" . URL::site ( 'login', null,true ) . "';</script>";
	}
	public function get_timelog_contents(){ // Fetch All Time contents MISC Function
		$time_table = array();
		$timesheet_contents = explode("/",file_get_contents(URL::site("timesheet.txt",null,false)));
		foreach($timesheet_contents AS $time_pieces){
			$time_table[][] = explode("_", $time_pieces);
		}
		return $time_table;
	}
	public function get_employee_total_hours($employee_id = null, $all = false){ // working
		$total_hours = 0;
		foreach($this->obj['pms_logic']->get_hours_differences($employee_id) AS $diffs){
			$total_hours += $diffs['diff'];
		}
		return $total_hours;
	}
	public function get_employee_total_OT_hours($employee_id = null, $all = false){
		$total_ots = 0;
		foreach($this->obj['pms_logic']->get_hours_differences($employee_id) AS $diffs){
			if($diffs > 8){
				$total_ots += $diffs['diff'] - 8;
			}
		}
		return ($total_ots < 0) ? 0 : $total_ots;
	}
	public function get_monthly_record($employee){
		return $this->obj['pms_logic']->get_employee_logs($employee);
	}
	public function action_personnel_dashboard(){
		
		if(Session::instance()->get('pms_id') == null && Session::instance()->get('pms_sess') == null){
			echo "<script>self.location='" . URL::site ( 'login', null, true ) . "';</script>";
		}
		
		$presentation_tier = View::factory("PMS/timekeeper/dashboard");
		$presentation_tier->head = $this->obj ['webstructure']->head ( "Payroll Personnel Dashboard");
		$presentation_tier->page_header = $this->obj ['webstructure']->page_header ( $this->obj ['webstructure']->pms_personnel_navigation () );

		$presentation_tier->account_name = null;
		
		$filter_datas = array(
				"working_status"=>null,
				"firstname"=>null,
				"middlename"=>null,
				"lastname"=>null,
				"department_name"=>null,
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
		$presentation_tier->employees = array();

		foreach($this->obj['ems_logic']->get_employees($filter_datas,2) AS $employee){
			$presentation_tier->employees[] = array(
				'employee_id'	=> $employee['employee_id'],
				'firstname'		=> $employee['firstname'],
				'middlename'	=> $employee['middlename'],
				'lastname'		=> $employee['lastname'],
				'position'		=> $employee['position_no'],
				'pos_name'		=> $employee['pos_name'],
				'department'	=> $employee['dept_name'],
				'total_hours'	=> $this->get_employee_total_hours($employee['employee_id']),
				'employee_logs' => $this->obj['pms_logic']->get_employee_logs($employee['employee_id'])
			);
		}
		
		$this->response->body($presentation_tier);
	}
	public function action_personnel_logout(){
		Session::instance ()->destroy ( 'pms_id' );
		Session::instance ()->destroy ( 'pms_sess' );
		echo "<script>self.location='" . URL::site ( 'login', null, true ) . "';</script>";
	}
	public function action_print_ledger(){
		$filter_datas = array(
				"working_status"=>null,
				"firstname"=>null,
				"middlename"=>null,
				"lastname"=>null,
				"department_name"=>null,
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
		$datas = array();
		$coun = 0;
		$employees = $this->obj['ems_logic']->get_employees($filter_datas);
		foreach($employees AS $employee){
			$datas[$coun]['employee_name'] = $employee['firstname'] . " " . $employee['lastname'];
			$datas[$coun]['position'] = $employee['pos_name'];
			$datas[$coun]['dept'] = $employee['dept_name'];
			$datas[$coun]['employee_rate'] = $this->obj['pms_logic']->get_employee_rate($employee['employee_id']);
			$datas[$coun]['gross_pay'] = $this->get_employee_total_hours($employee['employee_id']) * $datas[$coun]['employee_rate'];
			$datas[$coun]['total_hours'] = $this->obj['pms_logic']->get_total_hours_worked($employee['employee_id']);
			$datas[$coun]['deduction']['sss'] = $this->obj['pms_logic']->get_sss_deduction($datas[$coun]['gross_pay']);
			$datas[$coun]['deduction']['philhealth'] = $this->obj['pms_logic']->get_philhealth_deduction($datas[$coun]['gross_pay']);
			$datas[$coun]['deduction']['pagibig'] = $this->obj['pms_logic']->get_pagibig_deduction();
			$datas[$coun]['net_pay'] = $datas[$coun]['gross_pay'] - array_sum($datas[$coun]['deduction']);
			$coun++;
		}
		$presentation_tier = View_PDF::factory('PMS/timekeeper/print_ledger',array('title'=>'Employees Ledger', 'name'=>"Report_Ledger" . date('m-d-Y') . '_EmployeeLogs.pdf'))
		->set('datas', $datas)
		->set('date', date('m/d/Y'))
		->render();
		exit();
	}
	public function action_print_logs(){
		$employee_id = null;
		if($this->request->query('employee_id') != null){
			$employee_id = $this->request->query('employee_id');
		} else {
			trigger_error('Employee Invalid!');
		}
		$employee_info = $this->obj['ems_logic']->get_employee($employee_id);
		$employee_logs = $this->obj['pms_logic']->get_employee_logs($employee_id);
		$no_of_absents = $this->obj['ems_logic']->count_leaves($employee_id);
		
		$presentation_tier = View_PDF::factory('PMS/timekeeper/print_logs',array('title'=>'Employee Logs', 'name'=>$employee_info[0]['firstname'] . $employee_info[0]['lastname'] . '_' . date('m-d-Y') . '_EmployeeLogs.pdf'))
		->set('employee_info', $employee_info)
		->set('logs', $employee_logs)
		->set('absents', $no_of_absents)
		->set('date', date('M d Y'))
		->render();
		exit();
	}
	public function action_print_payslip(){
		$employee_id = null;
		if($this->request->query('employee_id') != null){
			$employee_id = $this->request->query('employee_id');
		} else {
			trigger_error('Employee Invalid!');
		}

		$employee_name		= null;
		$employee_type 		= null;
		$employee_dept		= null;
		$employee_position	= null;
		
		foreach($this->obj['ems_logic']->get_employee($employee_id) AS $employee_data){
			$employee_name = $this->get_array_element($employee_data,'lastname') . ", ";
			$employee_name .= $this->get_array_element($employee_data,'firstname') . " ";
			$employee_name .= $this->get_array_element($employee_data, 'middlename');
			$employee_dept = $this->get_array_element($employee_data, 'dept_name');
			$employee_position = $this->get_array_element($employee_data,'pos_name');
			$employee_type = $this->get_array_element($employee_data, 'type');
			$employee_marital_stat = $this->get_array_element($employee_data, 'relation_stat');
		}
		
		$employee_rate = $this->obj['pms_logic']->get_employee_rate($employee_id);

		if($employee_marital_stat == 1){
			$marital_status = "Single";
		} elseif($employee_marital_stat == 2) {
			$marital_status = "Married";
		}
		
		// computation of single and married
		$employee_single_married_twenty = $employee_rate * 0.2;
		
		// computes for marital status rate
		if($employee_marital_stat == 2){
			$employee_marital_stat_rate = $employee_rate * 0.2;
		} else {
			$employee_marital_stat_rate = 0;
		}
		
		$total_hours_worked = $this->get_employee_total_hours($employee_id);

		$OT_hours = $this->get_employee_total_OT_hours($employee_id);
		$OT_rate = $employee_rate * 0.20; // 20% of employee rate per OT hour
		$OT_pay = $OT_rate * $OT_hours;
		$gross_pay = ($employee_rate * number_format($total_hours_worked)) + $OT_pay; //GROSS PAY AMOUNT

		// Deductions
		$deductions = array();
		$deductions['SSS'] = $this->obj['pms_logic']->get_sss_deduction($gross_pay); // IMPORTANT
		$deductions['PagIbig'] = $this->obj['pms_logic']->get_philhealth_deduction($gross_pay); // IMPORTANT
		$deductions['philhealth'] = $this->obj['pms_logic']->get_pagibig_deduction(); // IMPORTANT

		$total_deduction = array_sum($deductions);

		// Gets Total NET PAY
		$net_pay = ($gross_pay + $employee_marital_stat_rate) - $total_deduction;
		
		// Gets BIR Exemptions
		$bir_exemptions = $this->obj['pms_logic']->get_bir_value($net_pay);

		// Renders Web Template into PDF file
		$presentation_tier = View_PDF::factory('PMS/timekeeper/payslip',array('title'=>'Employee Payslip', 'name'=>$employee_name . '_' . date('m-d-Y') . '_EmployeePayslip.pdf'))
		->set('employee_id', $employee_id)
		->set('employee_name', $employee_name)
		->set('employee_type',$employee_type)
		->set('employee_position', $employee_position)
		->set('employee_department', $employee_dept)
		->set('employee_rate', $employee_rate)
		->set('marital_status', $marital_status)
		->set('days_worked', count($this->get_monthly_record($employee_id)))
		->set('total_hours_worked', $total_hours_worked)
		->set('OT_hours', $OT_hours)
		->set('OT_pay', $OT_pay)
		->set('basic_salary', $employee_rate * number_format($total_hours_worked))
		->set('OT_rate',number_format($employee_rate * .20,2,'.',','))
		->set('gross_pay',$gross_pay)
		->set('deductions', $deductions)
		->set('total_deductions', $total_deduction)
		->set('net_value', $net_pay)
		->set('bir_tax', $bir_exemptions['tax'])
		->set('bir_excess',$bir_exemptions['excess'])
		->set('employee_single_married_twenty', $employee_single_married_twenty)
		->set('date', date('M d Y'))
		->render();
		exit();
	}
	public function login_msg($msg){
		echo "<div style='background:#5ea9d9;color:#2070a3;font-size:20px;'>".$msg.".</div>";
	}
	public function logout_msg($msg){
		echo "<div style='background:#5ea9d9;color:#2070a3;font-size:20px;'>".$msg.".</div>";
	}
}
