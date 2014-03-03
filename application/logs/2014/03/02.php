<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-03-02 19:32:48 --- ERROR: ErrorException [ 1 ]: Call to undefined function array_sort() ~ APPPATH\views\EMS\admin\add_employee.php [ 62 ]
2014-03-02 19:32:48 --- STRACE: ErrorException [ 1 ]: Call to undefined function array_sort() ~ APPPATH\views\EMS\admin\add_employee.php [ 62 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-03-02 19:40:20 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\views\EMS\HR\add_employee.php [ 7 ]
2014-03-02 19:40:20 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\views\EMS\HR\add_employee.php [ 7 ]
--
#0 C:\xampp\htdocs\thesises\thesis_tmc\application\views\EMS\HR\add_employee.php(7): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\xampp\htdocs...', 7, Array)
#1 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\thesises\thesis_tmc\application\classes\controller\ems.php(161): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Ems->action_hr_add()
#7 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ems))
#8 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\thesises\thesis_tmc\index.php(109): Kohana_Request->execute()
#11 {main}
2014-03-02 19:40:55 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\views\EMS\HR\add_employee.php [ 7 ]
2014-03-02 19:40:55 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\views\EMS\HR\add_employee.php [ 7 ]
--
#0 C:\xampp\htdocs\thesises\thesis_tmc\application\views\EMS\HR\add_employee.php(7): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\xampp\htdocs...', 7, Array)
#1 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\thesises\thesis_tmc\application\classes\controller\ems.php(161): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Ems->action_hr_add()
#7 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ems))
#8 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\thesises\thesis_tmc\index.php(109): Kohana_Request->execute()
#11 {main}
2014-03-02 21:26:44 --- ERROR: ErrorException [ 8 ]: Undefined variable: enmployees ~ APPPATH\classes\controller\ems.php [ 214 ]
2014-03-02 21:26:44 --- STRACE: ErrorException [ 8 ]: Undefined variable: enmployees ~ APPPATH\classes\controller\ems.php [ 214 ]
--
#0 C:\xampp\htdocs\thesises\thesis_tmc\application\classes\controller\ems.php(214): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 214, Array)
#1 [internal function]: Controller_Ems->action_hr_dashboard()
#2 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ems))
#3 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\thesises\thesis_tmc\index.php(109): Kohana_Request->execute()
#6 {main}
2014-03-02 21:26:54 --- ERROR: ErrorException [ 8 ]: Undefined variable: employees ~ APPPATH\classes\controller\ems.php [ 214 ]
2014-03-02 21:26:54 --- STRACE: ErrorException [ 8 ]: Undefined variable: employees ~ APPPATH\classes\controller\ems.php [ 214 ]
--
#0 C:\xampp\htdocs\thesises\thesis_tmc\application\classes\controller\ems.php(214): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 214, Array)
#1 [internal function]: Controller_Ems->action_hr_dashboard()
#2 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ems))
#3 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\thesises\thesis_tmc\index.php(109): Kohana_Request->execute()
#6 {main}
2014-03-02 21:39:55 --- ERROR: ErrorException [ 8 ]: Undefined index: address ~ APPPATH\views\EMS\HR\dashboard.php [ 78 ]
2014-03-02 21:39:55 --- STRACE: ErrorException [ 8 ]: Undefined index: address ~ APPPATH\views\EMS\HR\dashboard.php [ 78 ]
--
#0 C:\xampp\htdocs\thesises\thesis_tmc\application\views\EMS\HR\dashboard.php(78): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 78, Array)
#1 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\thesises\thesis_tmc\application\classes\controller\ems.php(215): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Ems->action_hr_dashboard()
#7 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ems))
#8 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\thesises\thesis_tmc\index.php(109): Kohana_Request->execute()
#11 {main}
2014-03-02 21:44:44 --- ERROR: Database_Exception [ 42S02 ]: SQLSTATE[42S02]: Base table or view not found: 1146 Table 'db_tmc.ems_ems_employee_locations' doesn't exist [ SELECT (SELECT COUNT(*) FROM ems_leaves WHERE employee_id = ems_employee.`employee_id`) AS absents,ems_employee.*,ems_positions.*,ems_departments.*,ems_employee_type.*,pms_position_rate.* 
					FROM ems_employee 
					JOIN ems_employee_type ON ems_employee_type.`employee_type` = ems_employee.`employee_type` 
					INNER JOIN ems_ems_employee_locations on ems_employee_locations.employee_id = ems_employee.employee_id 
					INNER JOIN ems_positions ON ems_positions.`position_no` = ems_employee.`position_no` 
					INNER JOIN pms_position_rate ON pms_position_rate.`position_no` = ems_employee.`position_no` 
					INNER JOIN ems_departments ON ems_departments.`dept_no` = ems_positions.`dept_no`  WHERE  ems_employee.status = 1  ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2014-03-02 21:44:44 --- STRACE: Database_Exception [ 42S02 ]: SQLSTATE[42S02]: Base table or view not found: 1146 Table 'db_tmc.ems_ems_employee_locations' doesn't exist [ SELECT (SELECT COUNT(*) FROM ems_leaves WHERE employee_id = ems_employee.`employee_id`) AS absents,ems_employee.*,ems_positions.*,ems_departments.*,ems_employee_type.*,pms_position_rate.* 
					FROM ems_employee 
					JOIN ems_employee_type ON ems_employee_type.`employee_type` = ems_employee.`employee_type` 
					INNER JOIN ems_ems_employee_locations on ems_employee_locations.employee_id = ems_employee.employee_id 
					INNER JOIN ems_positions ON ems_positions.`position_no` = ems_employee.`position_no` 
					INNER JOIN pms_position_rate ON pms_position_rate.`position_no` = ems_employee.`position_no` 
					INNER JOIN ems_departments ON ems_departments.`dept_no` = ems_positions.`dept_no`  WHERE  ems_employee.status = 1  ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\xampp\htdocs\thesises\thesis_tmc\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PDO->query(1, 'SELECT (SELECT ...', false, Array)
#1 C:\xampp\htdocs\thesises\thesis_tmc\application\classes\model\ems.php(165): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\thesises\thesis_tmc\application\classes\controller\ems.php(212): Model_Ems->get_employees(Array)
#3 [internal function]: Controller_Ems->action_hr_dashboard()
#4 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ems))
#5 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\thesises\thesis_tmc\index.php(109): Kohana_Request->execute()
#8 {main}
2014-03-02 21:45:02 --- ERROR: ErrorException [ 8 ]: Undefined index: address ~ APPPATH\views\EMS\HR\dashboard.php [ 78 ]
2014-03-02 21:45:02 --- STRACE: ErrorException [ 8 ]: Undefined index: address ~ APPPATH\views\EMS\HR\dashboard.php [ 78 ]
--
#0 C:\xampp\htdocs\thesises\thesis_tmc\application\views\EMS\HR\dashboard.php(78): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 78, Array)
#1 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\thesises\thesis_tmc\application\classes\controller\ems.php(215): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Ems->action_hr_dashboard()
#7 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ems))
#8 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\thesises\thesis_tmc\index.php(109): Kohana_Request->execute()
#11 {main}
2014-03-02 21:47:46 --- ERROR: ErrorException [ 8 ]: Undefined index: address ~ APPPATH\views\EMS\HR\dashboard.php [ 78 ]
2014-03-02 21:47:46 --- STRACE: ErrorException [ 8 ]: Undefined index: address ~ APPPATH\views\EMS\HR\dashboard.php [ 78 ]
--
#0 C:\xampp\htdocs\thesises\thesis_tmc\application\views\EMS\HR\dashboard.php(78): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 78, Array)
#1 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\thesises\thesis_tmc\application\classes\controller\ems.php(215): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Ems->action_hr_dashboard()
#7 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ems))
#8 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\thesises\thesis_tmc\index.php(109): Kohana_Request->execute()
#11 {main}
2014-03-02 22:24:33 --- ERROR: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\model\ems.php [ 330 ]
2014-03-02 22:24:33 --- STRACE: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\model\ems.php [ 330 ]
--
#0 C:\xampp\htdocs\thesises\thesis_tmc\application\classes\model\ems.php(330): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 330, Array)
#1 C:\xampp\htdocs\thesises\thesis_tmc\application\classes\controller\ems.php(279): Model_Ems->update_employee(Array)
#2 [internal function]: Controller_Ems->action_update_employee()
#3 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ems))
#4 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\thesises\thesis_tmc\index.php(109): Kohana_Request->execute()
#7 {main}
2014-03-02 22:25:00 --- ERROR: Database_Exception [ 21000 ]: SQLSTATE[21000]: Cardinality violation: 1241 Operand should contain 1 column(s) [ UPDATE ems_employee 
				SET date_modified = now(), 
				firstname = 'Paolo', 
				middlename = 'Cruz',
				lastname = 'Amandilino',
				address = 'pasig city',
				sex= 'm',
				relation_stat = '1',
				position_no = (SELECT ems_positions.`position_no`,
				status = '1'
				FROM ems_positions WHERE ems_positions.`pos_name` LIKE '%Treasury Clerk%')
				WHERE employee_id = '00f924' ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2014-03-02 22:25:00 --- STRACE: Database_Exception [ 21000 ]: SQLSTATE[21000]: Cardinality violation: 1241 Operand should contain 1 column(s) [ UPDATE ems_employee 
				SET date_modified = now(), 
				firstname = 'Paolo', 
				middlename = 'Cruz',
				lastname = 'Amandilino',
				address = 'pasig city',
				sex= 'm',
				relation_stat = '1',
				position_no = (SELECT ems_positions.`position_no`,
				status = '1'
				FROM ems_positions WHERE ems_positions.`pos_name` LIKE '%Treasury Clerk%')
				WHERE employee_id = '00f924' ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\xampp\htdocs\thesises\thesis_tmc\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PDO->query(3, 'UPDATE ems_empl...', false, Array)
#1 C:\xampp\htdocs\thesises\thesis_tmc\application\classes\model\ems.php(337): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\thesises\thesis_tmc\application\classes\controller\ems.php(279): Model_Ems->update_employee(Array)
#3 [internal function]: Controller_Ems->action_update_employee()
#4 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ems))
#5 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\thesises\thesis_tmc\index.php(109): Kohana_Request->execute()
#8 {main}
2014-03-02 22:26:53 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\views\EMS\admin\dashboard.php [ 9 ]
2014-03-02 22:26:53 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\views\EMS\admin\dashboard.php [ 9 ]
--
#0 C:\xampp\htdocs\thesises\thesis_tmc\application\views\EMS\admin\dashboard.php(9): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\xampp\htdocs...', 9, Array)
#1 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\thesises\thesis_tmc\application\classes\controller\ems.php(512): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Ems->action_admin_dashboard()
#7 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ems))
#8 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\thesises\thesis_tmc\index.php(109): Kohana_Request->execute()
#11 {main}
2014-03-02 22:28:39 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\views\EMS\admin\dashboard.php [ 9 ]
2014-03-02 22:28:39 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\views\EMS\admin\dashboard.php [ 9 ]
--
#0 C:\xampp\htdocs\thesises\thesis_tmc\application\views\EMS\admin\dashboard.php(9): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\xampp\htdocs...', 9, Array)
#1 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\thesises\thesis_tmc\application\classes\controller\ems.php(512): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Ems->action_admin_dashboard()
#7 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ems))
#8 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\thesises\thesis_tmc\index.php(109): Kohana_Request->execute()
#11 {main}