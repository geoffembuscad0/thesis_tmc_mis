<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-02-19 09:12:54 --- ERROR: Kohana_Exception [ 0 ]: Directory resumes must be writable ~ SYSPATH\classes\kohana\upload.php [ 80 ]
2014-02-19 09:12:54 --- STRACE: Kohana_Exception [ 0 ]: Directory resumes must be writable ~ SYSPATH\classes\kohana\upload.php [ 80 ]
--
#0 C:\xampp\htdocs\thesises\thesis_tmc\application\classes\controller\ems.php(51): Kohana_Upload::save(Array, 'My Narrative Re...', 'resumes')
#1 [internal function]: Controller_Ems->action_validate_applicant()
#2 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ems))
#3 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\thesises\thesis_tmc\index.php(109): Kohana_Request->execute()
#6 {main}
2014-02-19 09:14:09 --- ERROR: Kohana_Exception [ 0 ]: Directory resumes must be writable ~ SYSPATH\classes\kohana\upload.php [ 80 ]
2014-02-19 09:14:09 --- STRACE: Kohana_Exception [ 0 ]: Directory resumes must be writable ~ SYSPATH\classes\kohana\upload.php [ 80 ]
--
#0 C:\xampp\htdocs\thesises\thesis_tmc\application\classes\controller\ems.php(51): Kohana_Upload::save(Array, 'cristy_resume.d...', 'resumes')
#1 [internal function]: Controller_Ems->action_validate_applicant()
#2 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ems))
#3 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\thesises\thesis_tmc\index.php(109): Kohana_Request->execute()
#6 {main}
2014-02-19 09:14:35 --- ERROR: Kohana_Exception [ 0 ]: Directory resumes must be writable ~ SYSPATH\classes\kohana\upload.php [ 80 ]
2014-02-19 09:14:35 --- STRACE: Kohana_Exception [ 0 ]: Directory resumes must be writable ~ SYSPATH\classes\kohana\upload.php [ 80 ]
--
#0 C:\xampp\htdocs\thesises\thesis_tmc\application\classes\controller\ems.php(51): Kohana_Upload::save(Array, 'sample_Resumes....', 'resumes')
#1 [internal function]: Controller_Ems->action_validate_applicant()
#2 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ems))
#3 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\thesises\thesis_tmc\index.php(109): Kohana_Request->execute()
#6 {main}
2014-02-19 09:30:26 --- ERROR: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT (SELECT COUNT(*) FROM ems_leaves WHERE employee_id = ems_employee.`employee_id`) AS absents,ems_employee.*,ems_positions.*,ems_departments.*,ems_employee_type.* FROM ems_employee JOIN ems_employee_type ON ems_employee_type.`employee_type` = ems_employee.`employee_type` INNER JOIN ems_positions ON ems_positions.`position_no` = ems_employee.`position_no` INNER JOIN ems_departments ON ems_departments.`dept_no` = ems_positions.`dept_no`  WHERE  ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2014-02-19 09:30:26 --- STRACE: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT (SELECT COUNT(*) FROM ems_leaves WHERE employee_id = ems_employee.`employee_id`) AS absents,ems_employee.*,ems_positions.*,ems_departments.*,ems_employee_type.* FROM ems_employee JOIN ems_employee_type ON ems_employee_type.`employee_type` = ems_employee.`employee_type` INNER JOIN ems_positions ON ems_positions.`position_no` = ems_employee.`position_no` INNER JOIN ems_departments ON ems_departments.`dept_no` = ems_positions.`dept_no`  WHERE  ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\xampp\htdocs\thesises\thesis_tmc\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PDO->query(1, 'SELECT (SELECT ...', false, Array)
#1 C:\xampp\htdocs\thesises\thesis_tmc\application\classes\model\ems.php(171): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\thesises\thesis_tmc\application\classes\controller\ems.php(393): Model_Ems->get_employees(Array, 2)
#3 [internal function]: Controller_Ems->action_admin_archives()
#4 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ems))
#5 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\thesises\thesis_tmc\index.php(109): Kohana_Request->execute()
#8 {main}