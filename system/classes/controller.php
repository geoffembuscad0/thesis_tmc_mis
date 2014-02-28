<?php defined('SYSPATH') or die('No direct script access.');

abstract class Controller extends Kohana_Controller {
	public $audit_trail = array(
			'login'	=> 'Logged In',
			'logout'	=> 'Logged Out',
			'hire_emp'	=> 'Hired Employee',
			'set_app_sched' => 'Set Applicant Schedule',
			'remove_emp'	=> 'Removed Employee',
			'add_app'	=> 'Added Applicant',
			'delete_app'	=> 'Deleted Applicant',
			'export_emps'	=> 'Export Employees',
			'update_emp'	=> 'Updated Employee',
			'export_scores' => 'Exported Product Scores',
			'export_surveys'=> 'Exported Surveys ratings',
			'export_stats'	=> 'Exported Business Statistics'
	);
	public function get_array_element($data = array(), $index = 0){
		return $data[$index];
	}
}
