<?php
class Model_Pms extends Model {
	public function get_bir_value($netpay){
		$sql = "SELECT * FROM pms_bir_tax WHERE sme <= ".$netpay." ORDER BY ded_no DESC LIMIT 1";
		$query = DB::query(DATABASE::SELECT, $sql)->execute()->as_array();
		$return_values = array();
		$data = array();
		foreach($query AS $q){
			$data['ex'] = $q['exemption'];
			$data['sme'] = $q['sme'];
			$data['status'] = $q['status'];
		}
		$return_values['excess'] = ($netpay - $data['sme']) * $data['status']; // BIR Excess
		$return_values['tax'] = $data['ex'] + $return_values['excess']; // BIR Tax
		return $return_values;
	}
	public function get_sss_deductions(){
		$sql = "SELECT * FROM pms_deduction_sss ";
		return DB::query(DATABASE::SELECT, $sql)->execute()->as_array();
	}
	public function get_philhealth_deductions(){
		$sql = "SELECT * FROM pms_deduction_philhealth";
		return DB::query(DATABASE::SELECT, $sql)->execute()->as_array();
	}
	public function update_ph_deduction($data = array()){
		$sql = "UPDATE pms_deduction_philhealth SET deduction = '".$data['deduction']."' WHERE ded_no = '".$data['ded_no']."'";
		DB::query(DATABASE::UPDATE, $sql)->execute();
	}
	public function update_sss_deduction($data = array()){
		$sql = "UPDATE pms_deduction_sss SET deduction_value = '".$data['deduction']."' WHERE ded_no = '".$data['ded_no']."'";
		DB::query(DATABASE::UPDATE, $sql)->execute();
	}
	public function get_sss_deduction($grosspay){
		$sql = "SELECT * FROM pms_deduction_sss WHERE from_range <= ".$grosspay." AND to_range >= " . $grosspay;
		$query = DB::query(DATABASE::SELECT, $sql)->execute()->as_array();
		$deduction = 0;
		foreach($query AS $q){
			$deduction = $q['deduction_value'];
		}
		return $deduction;
	}
	public function get_philhealth_deduction($grosspay){
		$sql = "SELECT * FROM pms_deduction_philhealth WHERE from_range <= " . $grosspay . " AND to_range >= " . $grosspay . " ";
		$query = DB::query(DATABASE::SELECT, $sql)->execute()->as_array();
		$deduction = 0;
		foreach($query AS $q){
			$deduction = $q['deduction'];
		}
		return $deduction;
	}
	public function get_pagibig_deduction(){ // return 100 value
		$sql = "SELECT * FROM pms_deduction_pagibig";
		$query = DB::query(DATABASE::SELECT, $sql)->execute()->as_array();
		$deduction = 0;
		foreach($query AS $q){
			$deduction = $q['deduction'];
		}
		return $deduction;
	}
	public function get_employee_logs($emp_no){
		return DB::query(DATABASE::SELECT, "SELECT * from pms_attendance_monitoring WHERE emp_no = '".$emp_no."' AND 
		DATE_FORMAT(time_in,'%m') = DATE_FORMAT(NOW(),'%m') AND 
		DATE_FORMAT(timeout, '%m') = DATE_FORMAT(NOW(), '%m') ORDER BY attend_no DESC")->execute()->as_array();
	}
	
	public function get_employee_absents($emp_id){
		$query = DB::query(DATABASE::SELECT, "SELECT count(*) as absent FROM ems_leaves WHERE employee_id = '".$emp_id."'")->execute()->as_array();
		$absents = 0;
		foreach($query AS $q){
			$absents = $q['absent'];
		}
		return $absents;
	}
	public function get_number_of_days_worked($employee_no){
		return DB::query(DATABASE::SELECT, "SELECT COUNT(*) AS days_worked FROM pms_attendance_monitoring WHERE emp_no = '".$employee_no."' AND 
		DATE_FORMAT(time_in,'%m') = DATE_FORMAT(NOW(),'%m') AND 
		DATE_FORMAT(timeout, '%m') = DATE_FORMAT(NOW(), '%m')")->execute()->as_array();
	}
	public function get_total_hours_worked($employee_id){
		$sql = "SELECT SUM(TIMESTAMPDIFF(HOUR, time_in, timeout)) AS `total_hours` 
				FROM pms_attendance_monitoring 
				WHERE emp_no = '".$employee_id."' 
				AND DATE_FORMAT(time_in,'%m') = DATE_FORMAT(NOW(),'%m') 
				AND DATE_FORMAT(timeout,'%m') = DATE_FORMAT(NOW(),'%m')";
		$query = DB::query(DATABASE::SELECT, $sql)->execute()->as_array();
		$total_hours = 0;
		foreach($query AS $q){
			$total_hours = $q['total_hours'];
		}
		return $total_hours;
	}
	public function get_hours_differences($employee){
		$sql = "SELECT TIMESTAMPDIFF(HOUR, time_in, timeout) AS `diff` 
		FROM pms_attendance_monitoring
		WHERE emp_no = '".$employee."' AND DATE_FORMAT(time_in,'%m') = DATE_FORMAT(NOW(),'%m')
		AND DATE_FORMAT(timeout,'%m') = DATE_FORMAT(NOW(),'%m');";
// 		die($sql);
		$query  = DB::query(DATABASE::SELECT, $sql)->execute()->as_array();
		return $query;
	}
	public function get_deduction_table(){
		return DB::query(DATABASE::SELECT, "SELECT * FROM pms_deduction ORDER BY from_range")->execute()->as_array();
	}
	public function update_deduction_data($data = array()){
		DB::query(DATABASE::UPDATE, "UPDATE pms_deduction SET sss = " . $data['sss'] . ",pagibig = " . $data['pagibig'] . ",philhealth = " . $data['philhealth'] . " WHERE deduction_no = '".$data['deduction_no']."'")->execute();
	}
	public function get_employee_rate($employee_id){
		$query= DB::query(DATABASE::SELECT, "SELECT ems_employee.*,
			ems_positions.*,pms_position_rate.*
			FROM ems_employee
			INNER JOIN ems_positions ON ems_employee.`position_no` = ems_positions.`position_no`
			INNER JOIN pms_position_rate ON pms_position_rate.`position_no` = ems_positions.`position_no`
			WHERE ems_employee.`employee_id` = '".$employee_id."'")->execute()->as_array();
		$rate = 0;
		foreach($query AS $q){
			$rate = $q['rate'];
		}
		return $rate;
	}
	public function login_employee($employee_id ){
		DB::query(DATABASE::INSERT, "INSERT INTO pms_logged_employee VALUES('".$employee_id."')")->execute();
		DB::query(DATABASE::DELETE, "DELETE FROM pms_logged_employee WHERE employee_id IS NULL")->execute();
	}
	public function logout_employee($employee_id){
		DB::query(DATABASE::DELETE, "DELETE FROM pms_logged_employee WHERE employee_id = '".$employee_id."'")->execute();
		DB::query(DATABASE::DELETE, "DELETE FROM pms_logged_employee WHERE employee_id IS NULL")->execute();
	}
	public function get_employees_rate(){
		return DB::query(DATABASE::SELECT, "SELECT e.*,ep.*,pr.* FROM ems_employee e JOIN pms_position_rate pr ON pr.`position_no` = e.`position_no` JOIN ems_positions ep ON ep.`position_no` = e.`position_no`")->execute()->as_array();
	}
	public function validate_employee_log($employee_id){
		$sql = "SELECT COUNT(*) AS existing_log FROM pms_logged_employee WHERE employee_id = '".$employee_id."'";
		$result = DB::query(DATABASE::SELECT, $sql)->execute()->as_array();
		// clears null employee ids
		DB::query(DATABASE::DELETE, "DELETE FROM pms_logged_employee WHERE employee_id IS NULL")->execute();
		$existing_log = 0;
		foreach($result AS $r){
			$existing_log = $r['existing_log'];
		}
		return $existing_log;
	}
	public function attendance_login($employee_id){
		$select_timein = DB::query(DATABASE::SELECT, "SELECT *, time_in + INTERVAL grace_period MINUTE AS time_in_g, DATE_FORMAT(NOW(),'%H:%i:%s') AS time_today FROM pms_schedule_time")->execute()->as_array();
		$time_in_data = array();
		foreach($select_timein AS $time_in){
			$time_in_data['time_in'] = $time_in['time_in'];
			$time_in_data['graceperiod'] = $time_in['grace_period'];
			$time_in_data['time_in_grace'] = $time_in['time_in'];
			$time_in_data['time_today'] = $time_in['time_today'];
		}
		$to_time = strtotime("2008-12-13 " . $time_in_data['time_today']);
		$from_time = strtotime("2008-12-13 " . $time_in_data['time_in_grace']);

		$minutes_late = round(($to_time - $from_time) / 60,2);
		if($minutes_late < 0){
			$minutes_late = 0;
		}
		$sql = "INSERT INTO pms_attendance_monitoring VALUES(NULL,'".$employee_id."',NOW(),NULL,".$minutes_late.")";
		DB::query(DATABASE::INSERT, $sql)->execute();
	}
	public function attendance_logout($emp_no){
		$sql = "UPDATE pms_attendance_monitoring SET timeout = now() WHERE emp_no = '".$emp_no."' AND date_format(time_in,'%Y-%m-%d') = date_format(now(),'%Y-%m-%d')";
		DB::query(DATABASE::UPDATE, $sql)->execute();
	}
	public function get_deduction_late($emp_no){
		$sql = "SELECT sum(mins_late) as total_late_mins from pms_attendance_monitoring WHERE emp_no = '".$emp_no."' AND 
		DATE_FORMAT(time_in,'%m') = DATE_FORMAT(NOW(),'%m') AND 
		DATE_FORMAT(timeout, '%m') = DATE_FORMAT(NOW(), '%m')";
		$query = DB::query(DATABASE::SELECT, $sql)->execute()->as_array();
		$data = array();
		foreach($query as $q){
			$data['total_late'] = $q['total_late_mins'];
		}
		return $data['total_late'];
	}
	public function validate_logged_employee($employee_no){
		$sql = "SELECT COUNT(*) AS times_logged FROM pms_attendance_monitoring 
		WHERE emp_no = '".$employee_no."' 
		AND DATE_FORMAT(time_in,'%Y-%m-%d') = DATE_FORMAT(NOW(),'%Y-%m-%d')
		OR DATE_FORMAT(timeout, '%Y-%m-%d') = DATE_FORMAT(NOW(),'%Y-%m-%d');";
		$query = DB::query(DATABASE::SELECT, $sql)->execute()->as_array();
		$times_logged = null;
		foreach($query AS $row){
			$times_logged = $row['times_logged'];
		}
		return $times_logged;
	}
}
