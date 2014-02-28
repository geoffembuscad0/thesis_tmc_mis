<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-02-25 21:12:00 --- ERROR: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE  ems_employee.employee_type = 2  AND  ems_employee.status = 1' at line 1 [ SELECT (SELECT COUNT(*) FROM ems_leaves WHERE employee_id = ems_employee.`employee_id`) AS absents,ems_employee.*,ems_positions.*,ems_departments.*,ems_employee_type.* FROM ems_employee JOIN ems_employee_type ON ems_employee_type.`employee_type` = ems_employee.`employee_type` INNER JOIN ems_positions ON ems_positions.`position_no` = ems_employee.`position_no` INNER JOIN ems_departments ON ems_departments.`dept_no` = ems_positions.`dept_no`  ORDER BY  WHERE  ems_employee.employee_type = 2  AND  ems_employee.status = 1  ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2014-02-25 21:12:00 --- STRACE: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE  ems_employee.employee_type = 2  AND  ems_employee.status = 1' at line 1 [ SELECT (SELECT COUNT(*) FROM ems_leaves WHERE employee_id = ems_employee.`employee_id`) AS absents,ems_employee.*,ems_positions.*,ems_departments.*,ems_employee_type.* FROM ems_employee JOIN ems_employee_type ON ems_employee_type.`employee_type` = ems_employee.`employee_type` INNER JOIN ems_positions ON ems_positions.`position_no` = ems_employee.`position_no` INNER JOIN ems_departments ON ems_departments.`dept_no` = ems_positions.`dept_no`  ORDER BY  WHERE  ems_employee.employee_type = 2  AND  ems_employee.status = 1  ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\xampp\htdocs\thesises\thesis_tmc\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PDO->query(1, 'SELECT (SELECT ...', false, Array)
#1 C:\xampp\htdocs\thesises\thesis_tmc\application\classes\model\ems.php(171): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\thesises\thesis_tmc\application\classes\controller\ems.php(463): Model_Ems->get_employees(Array)
#3 [internal function]: Controller_Ems->action_admin_dashboard()
#4 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ems))
#5 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\thesises\thesis_tmc\index.php(109): Kohana_Request->execute()
#8 {main}
2014-02-25 21:51:25 --- ERROR: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE  ems_employee.status = 1' at line 7 [ SELECT 
			(SELECT COUNT(*) FROM ems_leaves WHERE employee_id = ems_employee.`employee_id`) AS absents,
					ems_employee.*,ems_positions.*,ems_departments.*,ems_employee_type.* FROM ems_employee JOIN ems_employee_type ON ems_employee_type.`employee_type` = ems_employee.`employee_type` INNER JOIN ems_positions ON ems_positions.`position_no` = ems_employee.`position_no` INNER JOIN ems_departments ON ems_departments.`dept_no` = ems_positions.`dept_no` WHERE
					LOWER(ems_employee.firstname) LIKE '%Rennai%' OR
					LOWER(ems_employee.middlename) LIKE '%Rennai%' OR
					LOWER(ems_employee.lastname) LIKE '%Rennai%' 
					 WHERE  ems_employee.status = 1  ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2014-02-25 21:51:25 --- STRACE: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE  ems_employee.status = 1' at line 7 [ SELECT 
			(SELECT COUNT(*) FROM ems_leaves WHERE employee_id = ems_employee.`employee_id`) AS absents,
					ems_employee.*,ems_positions.*,ems_departments.*,ems_employee_type.* FROM ems_employee JOIN ems_employee_type ON ems_employee_type.`employee_type` = ems_employee.`employee_type` INNER JOIN ems_positions ON ems_positions.`position_no` = ems_employee.`position_no` INNER JOIN ems_departments ON ems_departments.`dept_no` = ems_positions.`dept_no` WHERE
					LOWER(ems_employee.firstname) LIKE '%Rennai%' OR
					LOWER(ems_employee.middlename) LIKE '%Rennai%' OR
					LOWER(ems_employee.lastname) LIKE '%Rennai%' 
					 WHERE  ems_employee.status = 1  ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\xampp\htdocs\thesises\thesis_tmc\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PDO->query(1, 'SELECT ?????(SE...', false, Array)
#1 C:\xampp\htdocs\thesises\thesis_tmc\application\classes\model\ems.php(176): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\thesises\thesis_tmc\application\classes\controller\ems.php(463): Model_Ems->get_employees(Array)
#3 [internal function]: Controller_Ems->action_admin_dashboard()
#4 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ems))
#5 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\thesises\thesis_tmc\index.php(109): Kohana_Request->execute()
#8 {main}