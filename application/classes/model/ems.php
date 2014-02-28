<?php
ini_set ("display_errors", true);
defined ('SYSPATH') or die ('No direct script access.');
class Model_Ems extends Model_Database {
	public function __construct(){	
	}
	public function count_leaves($employee){
		$query = DB::query(DATABASE::SELECT, "SELECT count(*) as absents from ems_leaves WHERE employee_id = '".$employee."'")->execute()->as_array();
		return $query[0]['absents'];
	}
	public function save_applicant($datas = array(), $resume_file_name = null){
		$sql = "INSERT INTO ems_applicants VALUES(NULL,'".$datas['Firstname']."','".$datas['Middlename']."','".$datas['Lastname']."','".$datas['Address']."','".$datas['mobile']."','".$datas['email']."','".$datas['time_reach']."','".$datas['date_start']."','".$datas['position']."',0,'".$datas['file_resume']."',null,'".$datas['marital_status']."');";
		DB::query(DATABASE::INSERT, $sql)->execute();
	}
	public function get_partimers(){
		$query = DB::query(DATABASE::SELECT, "SELECT COUNT(*) AS part_time FROM ems_employee WHERE employee_type = 1")->execute()->as_array();
		return $query[0]['part_time'];
	}
	public function get_applicants($approved = 0){
		$sql = null;
		if($approved > 0){
			$sql = "SELECT * FROM ems_applicants WHERE pending_status = 1 ORDER BY applicant_no DESC";
		} elseif($approved == 0) {
			$sql = "SELECT * FROM ems_applicants ORDER BY applicant_no DESC";
		}
		return DB::query(DATABASE::SELECT, $sql)->execute()->as_array();
	}
	// counts absents
// 	public function count_employee_leaves($employee_id){
// 		$query = DB::query(DATABASE::SELECT, "SELECT count(*) AS absents FROM ems_leaves WHERE employee_id = '".$employee_id."'")->execute()->as_array();
// 		return $query[0]['absents'];
// 	}
	public function set_applicant_schedule($data = array()){
		DB::query(DATABASE::UPDATE, "UPDATE ems_applicants SET pending_status = '1',interview_schedule = '".$data['schedule_date']." ".$data['schedule_time'].":00' WHERE applicant_no = '".$data['applicant']."'")->execute();
	}
	public function get_applicant($applicant_no = null){
		if($applicant_no != null){
			return DB::query(DATABASE::SELECT, "SELECT * FROM ems_applicants WHERE applicant_no = '".$applicant_no."'")->execute()->as_array();
		} else {
			return DB::query(DATABASE::SELECT, "SELECT * FROM ems_applicants")->execute()->as_array();
		}
	}
	public function get_employees($filter = array(), $type = 1){
		$sql = null;
		if(isset($filter['search_query'])){
			$sql = "SELECT 
			(SELECT COUNT(*) FROM ems_leaves WHERE employee_id = ems_employee.`employee_id`) AS absents,
					ems_employee.*,ems_positions.*,ems_departments.*,ems_employee_type.*,pms_position_rate.* FROM ems_employee JOIN ems_employee_type ON ems_employee_type.`employee_type` = ems_employee.`employee_type` INNER JOIN ems_positions ON ems_positions.`position_no` = ems_employee.`position_no` INNER JOIN pms_position_rate ON pms_position_rate.`position_no` = ems_employee.`position_no` INNER JOIN ems_departments ON ems_departments.`dept_no` = ems_positions.`dept_no` WHERE
					LOWER(ems_employee.firstname) LIKE '%".$filter['search_query']."%' OR
					LOWER(ems_employee.middlename) LIKE '%".$filter['search_query']."%' OR
					LOWER(ems_employee.lastname) LIKE '%".$filter['search_query']."%' 
					";
		}else{
			$sql = "SELECT (SELECT COUNT(*) FROM ems_leaves WHERE employee_id = ems_employee.`employee_id`) AS absents,ems_employee.*,ems_positions.*,ems_departments.*,ems_employee_type.*,pms_position_rate.* FROM ems_employee JOIN ems_employee_type ON ems_employee_type.`employee_type` = ems_employee.`employee_type` INNER JOIN ems_positions ON ems_positions.`position_no` = ems_employee.`position_no` INNER JOIN pms_position_rate ON pms_position_rate.`position_no` = ems_employee.`position_no` INNER JOIN ems_departments ON ems_departments.`dept_no` = ems_positions.`dept_no` ";
		}
		$filter_strings = array();

		if($filter['firstname']!=null){
			$filter_strings[] = " lcase(ems_employee.firstname) = '".$filter['firstname']."' ";
		}

		if($filter['middlename']!=null){
			$filter_strings[] = " lcase(ems_employee.middlename) = '".$filter['middlename']."'";
		}

		if($filter['lastname']!=null){
			$filter_strings[] = " lcase(ems_employee.lastname) = '".$filter['lastname']."' ";
		}

		if($filter['department_name']!=null){
			$filter_strings[]=" ems_departments.dept_no = '".$filter['department_name']."' ";
		}
		
		if($filter['working_status']!=null){
			$filter_strings[] = " ems_employee.status = ".$filter['working_status']." ";			
		}
		if($filter['marital_status'] != null){
			$filter_strings[] = " ems_employee.relation_stat = '".$filter['marital_status']."' ";
		}

		if($filter['date_start_work_from']!=null){
			$filter_strings[] = " ems_employee.date_added <= '".$filter['date_start_work_from']."' ";
		}

		if($filter['date_start_work_to']!=null){
			$filter_strings[] = " ems_employee.date_added >= '".$filter['date_start_work_to']."' ";
		}

		
		if($filter['name'] == 1){
			$filter_strings[] = " ems_employee.firstname ASC ";
		} else if($filter['name']==2){
			$filter_strings[] = " ems_employee.firstname DESC ";
		} else if($filter['name'] == 3){
			$filter_strings[] = " ems_employee.lastname ASC ";
		} else if($filter['name'] == 4){
			$filter_strings[] = " ems_employee.lastname DESC ";
		}
		
		if($filter['position'] == 1){
			$filter_strings[] = " ems_positions.pos_name ASC ";
		} else if($filter['position']==2){
			$filter_strings[] = " ems_positions.pos_name DESC ";
		}
		
		if($filter['department'] == 1){
			$filter_strings[] = " ems_departments.dept_name ASC ";
		} else if($filter['department']==2){
			$filter_strings[] = " ems_departments.dept_name DESC ";
		}
		
		if($filter['search_query']==null){
			// WHERE Clause
			$where_clause = array();
			if($filter['type'] == 1){
				$where_clause[] = " ems_employee.employee_type = 1 ";
			} else if($filter['type']==2){
				$where_clause[] = " ems_employee.employee_type = 2 ";
			}
			
			if($filter['resign_employees'] == 0){
				$where_clause[] = " ems_employee.status = 1 ";
			} else {
				$where_clause[] = " ems_employee.status <> 3";
			}
	
			if($filter['date'] == 1){
				$filter_strings[] = " ems_employee.date_added ASC ";
			} else if($filter['date'] == 2){
				$filter_strings[] = " ems_employee.date_added DESC ";
			}
	
	
			if($type > 1) {
				if($filter['firstname'] != null ||
				$filter['middlename'] !=null ||
				$filter['lastname']!=null ||
				$filter['department_name'] !=null ||
				$filter['marital_status'] !=null ||
				$filter['date_start_work_from']!=null ||
				$filter['date_start_work_to'] != null ||
				$filter['working_status'] !=null){
					
					$sql .= " WHERE " . implode(" AND ", $filter_strings);
									
				} else {
					$sql .= "";
				}
			}
			if(count($where_clause) > 0 ){
				$sql .= " WHERE ";
				if(count($where_clause) > 0 ){
					$sql .= implode(" AND ", $where_clause);
				}
			} else if(count($where_clause) == 0) {
				if($filter['name'] !=null || $filter['position'] !=null || $filter['department'] !=null || $filter['date'] != null){
					$sql .= " ORDER BY " . implode(",", $filter_strings);
				}
			}
		}

		$employees = array();
		$counter = 0;

		foreach(DB::query(DATABASE::SELECT, $sql)->execute()->as_array() AS $employee_data){
			$employees[$counter]['employee_id'] = $employee_data['employee_id'];
			$employees[$counter]['firstname'] = $employee_data['firstname'];
			$employees[$counter]['absents'] = $employee_data['absents'];
			$employees[$counter]['middlename'] = $employee_data['middlename'];
			$employees[$counter]['lastname'] = $employee_data['lastname'];
			$employees[$counter]['position_no'] = $employee_data['position_no'];
			$employees[$counter]['employee_type'] = $employee_data['employee_type'];
			$employees[$counter]['date_added'] = $employee_data['date_added'];
			$employees[$counter]['birthdate'] = $employee_data['birthdate'];
			$employees[$counter]['pos_name'] = $employee_data['pos_name'];
			$employees[$counter]['dept_no'] = $employee_data['dept_no'];
			$employees[$counter]['dept_name'] = $employee_data['dept_name'];
			$employees[$counter]['date_modified'] = $employee_data['date_modified'];
			$employees[$counter]['type'] = $employee_data['type'];
            $employees[$counter]['w_status'] = $employee_data['status'];
            $employees[$counter]['relation_stat'] = $employee_data['relation_stat'];
			$employees[$counter]['working_hours'] = $employee_data['working_hours'];
			if(count($this->get_emp_contact_information($employee_data['employee_id'])) > 0){
				$employees[$counter]['contact_infos'] = $this->get_emp_contact_information($employee_data['employee_id']);
			} else {
				$employees[$counter]['contact_infos'] = array(array('mobile'=>null,'telephone'=>null, 'email'=>null, 'employee_id'=>null));
			}
			$employees[$counter]['location_infos'] = $this->get_emp_location($employee_data['employee_id']);
			$employees[$counter]['employee_rate'] = $employee_data['rate'];
			$employees[$counter]['place_of_birth'] = $employee_data['place_of_birth'];
			$employees[$counter]['religion'] = $employee_data['religion'];
			$employees[$counter]['citizenship'] = $employee_data['citizenship'];
			$employees[$counter]['emg_name'] = $employee_data['emergency_name'];
			$employees[$counter]['emg_contact'] = $employee_data['emergency_contact'];
			$employees[$counter]['emg_sec_contact'] = $employee_data['emergency_sec_contact'];
			$counter++;
		}
		return $employees;
	}
	public function get_emp_contact_information($employee_id){
		$data = array();
		$counter = 0;
		foreach(DB::query(DATABASE::SELECT, "SELECT * FROM ems_employee_contact WHERE employee_id = '".$employee_id."'")->execute()->as_array() AS $emp_contact){
			$data[$counter] = array(
				'mobile'=>$emp_contact['mobile'],
				'telephone'=>$emp_contact['telephone'],
				'email'=>$emp_contact['email']
			);
		}
		return $data;
	}
	public function get_emp_location($employee_id){
	$data = array();

		return DB::query(DATABASE::SELECT, "SELECT * FROM ems_employee_locations WHERE employee_id = '".$employee_id."'")->execute()->as_array();
	}
	public function get_employee($employee_id){
		$sql = "SELECT ems_employee.*,ems_positions.*,ems_departments.*,ems_employee_type.* FROM ems_employee JOIN ems_employee_type ON ems_employee_type.`employee_type` = ems_employee.`employee_type` INNER JOIN ems_positions ON ems_positions.`position_no` = ems_employee.`position_no` INNER JOIN ems_departments ON ems_departments.`dept_no` = ems_positions.`dept_no` WHERE ems_employee.`employee_id` = '".$employee_id."'";

		return DB::query(DATABASE::SELECT, $sql)->execute()->as_array();
	}
	public function get_leave_request($data = array()){
		DB::query(DATABASE::INSERT, "INSERT INTO ems_leaves values(null,'".$data['employee_id']."','".$data['leave_type']."','".$data['date_leave']."','".$data['no_of_days']."','".$data['reason']."',0,now(),now())")->execute();
	}
	public function approve_leave($leave_no){
		DB::query(DATABASE::UPDATE, "UPDATE ems_leaves SET status = 1,date_given_status = now() WHERE leave_no = '".$leave_no."'")->execute();
	}
	public function deny_leave($leave_no){
		DB::query(DATABASE::UPDATE, "UPDATE ems_leaves SET status = 2,date_given_status = now() WHERE leave_no = '".$leave_no."'")->execute();
	}
	public function select_leaves($datas = array()){		
		$checked_not_null = 0;
		foreach($datas AS $data){
			if($data != null){
				$checked_not_null++;
			}
		}
		if($checked_not_null > 0){
			$implode = array();
			$sql = "SELECT l.*,l.`status` AS request_stat,emp.*,ep.* FROM ems_leaves l JOIN ems_employee emp ON emp.`employee_id` = l.`employee_id` JOIN ems_positions ep ON ep.`position_no` = emp.`position_no` ";
			$date_leave_sql = null;
			if($datas['date_leave'] != null){
				$date_leave_sql = " ORDER BY l.date_leave " . $datas['date_leave'];
			}
			
			if($datas['leave_type'] != null){
				$implode[]= " lcase(l.leave_type) = lcase('".$datas['leave_type']."') ";
			}
			
			if($datas['leave_status'] != null){
				$implode[] = " lcase(l.status) = lcase('".$datas['leave_status']."') ";
			}			
			$where_string = (count($implode) > 0) ? " WHERE " : "";
			$sql .= $where_string . implode("AND", $implode) . $date_leave_sql;
		} else {
			$sql = "SELECT l.*,l.`status` AS request_stat,emp.*,ep.* FROM ems_leaves l JOIN ems_employee emp ON emp.`employee_id` = l.`employee_id` JOIN ems_positions ep ON ep.`position_no` = emp.`position_no` ORDER BY l.`date_added` DESC";
		}
		return DB::query(DATABASE::SELECT,$sql )->execute()->as_array();
	}
	public function get_leave_info($leave_no){
		$sql = "SELECT l.*, emp.*, p.*, d.*,l.`status` AS leave_status FROM ems_leaves l 
		JOIN ems_employee emp ON emp.`employee_id` = l.`employee_id` 
		JOIN ems_positions p ON p.`position_no` = emp.`position_no`
		JOIN ems_departments d ON d.`dept_no` = p.`dept_no`
		WHERE l.`leave_no` = '".$leave_no."'";
		return DB::query(DATABASE::SELECT, $sql)->execute()->as_array();
	}
	public function get_position_by_dept($dept_id){
		return DB::query(DATABASE::SELECT, "SELECT * FROM ems_positions WHERE dept_no = '".$dept_id."'")->execute()->as_array();
	}
	public function get_position($position_no = null){
		if($position_no != null){
			return DB::query(DATABASE::SELECT, "SELECT p.*,d.* FROM ems_positions p join ems_departments d on d.dept_no = p.dept_no WHERE p.position_no = '".$position_no."'")->execute()->as_array();
		} else {
			return DB::query(DATABASE::SELECT, "SELECT p.*,d.* FROM ems_positions p join ems_departments d on d.dept_no = p.dept_no")->execute()->as_array();
		}
	}
	public function insert_employee($data = array()){
		$sql = "INSERT INTO ems_employee values('".$data['employee_code']."',
		'".$data['firstname']."','".$data['middlename']."','".$data['lastname']."',
		'".$data['job_position']."','".$data['employee_type']."',now(),'".$data['birthdate']."',now(),'1','".$data['civil_status']."', '".$data['pob']."', '".$data['religion']."','".$data['citizenship']."', '".$data['emg_name']."', '".$data['emg_contact']."', '".$data['emg_sec_contact']."')";

		DB::query(DATABASE::INSERT, $sql)->execute();
	}
	public function get_position_department(){
		return DB::query(DATABASE::SELECT, "SELECT p.*,dept.* FROM ems_positions p INNER JOIN ems_departments dept ON p.`dept_no`=dept.`dept_no`")->execute()->as_array();
	}
	public function add_employee($data = array()){
		DB::query(DATABASE::DELETE,"DELETE FROM ems_applicants WHERE applicant_no = '".$data['applicant_no']."'")->execute();

		$addEmployeeQuery = "INSERT INTO ems_employee VALUES(
				'".$data['employee_code']."',
				'".$data['firstname']."',
				'".$data['middlename']."',
				'".$data['lastname']."',
				'".$data['position']."',
				'".$data['employee_type']."',
				now(), '".$data['birthday']."',now(), 1, '".$data['marital_status']."');";
		
		DB::query(DATABASE::INSERT, $addEmployeeQuery)->execute();
		
		DB::query(DATABASE::INSERT, "INSERT INTO ems_employee_locations VALUES('".$data['employee_code']."','".$data['address']."');")->execute();
		
		DB::query(DATABASE::INSERT, "INSERT INTO ems_employee_contact VALUES('".$data['employee_code']."','".$data['mobile']."',null,'".$data['email']."');")->execute();
	}
	public function get_departments(){
		return DB::query(DATABASE::SELECT, "SELECT * FROM ems_departments")->execute()->as_array();
	}
	public function delete_applicant($applicant_id = null){
		DB::query(DATABASE::DELETE, "DELETE FROM ems_applicants WHERE applicant_no = '".$applicant_id."'")->execute();
	}
	public function delete_employee($employee_id){
		$sql = "UPDATE ems_employee SET status = 0 WHERE employee_id = '".$employee_id."'";
		$query = DB::query(DATABASE::DELETE, $sql)->execute();
		return 1;
	}
	public function update_employee($datas = array()){
		$position_pieces = explode(" - ", $datas['position']);
		$sql = "UPDATE ems_employee SET date_modified = now(), firstname = '".$datas['firstname']."', middlename = '".$datas['middlename']."',lastname = '".$datas['lastname']."', position_no = (SELECT ems_positions.`position_no` FROM ems_positions WHERE ems_positions.`pos_name` LIKE '%".$position_pieces[1]."%') WHERE employee_id = '".$datas['employee_id']."'";
		DB::query(DATABASE::UPDATE, $sql)->execute();
		return 1;
	}
	
	// clerk side of update employee
	public function update_employee_clerk($data = array()){
		$sql = "UPDATE ems_employee SET relation_stat = '".$data['marital_status']."', firstname = '".$data['firstname']."', middlename = '".$data['middlename']."', lastname='".$data['lastname']."', position_no = '".$data['position']."' WHERE employee_id = '".$data['employee_id']."'";
		DB::query(DATABASE::UPDATE, $sql)->execute();
	}
}
