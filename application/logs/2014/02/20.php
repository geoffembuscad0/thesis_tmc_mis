<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-02-20 19:57:23 --- ERROR: View_Exception [ 0 ]: The requested view ems/admin/add_employee could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2014-02-20 19:57:23 --- STRACE: View_Exception [ 0 ]: The requested view ems/admin/add_employee could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\view.php(137): Kohana_View->set_filename('ems/admin/add_e...')
#1 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\view.php(30): Kohana_View->__construct('ems/admin/add_e...', NULL)
#2 C:\xampp\htdocs\thesises\thesis_tmc\application\classes\controller\ems.php(481): Kohana_View::factory('ems/admin/add_e...')
#3 [internal function]: Controller_Ems->action_add_employee()
#4 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ems))
#5 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\thesises\thesis_tmc\index.php(109): Kohana_Request->execute()
#8 {main}
2014-02-20 19:58:30 --- ERROR: ErrorException [ 8 ]: Undefined variable: account_name ~ APPPATH\views\EMS\admin\add_employee.php [ 8 ]
2014-02-20 19:58:30 --- STRACE: ErrorException [ 8 ]: Undefined variable: account_name ~ APPPATH\views\EMS\admin\add_employee.php [ 8 ]
--
#0 C:\xampp\htdocs\thesises\thesis_tmc\application\views\EMS\admin\add_employee.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 8, Array)
#1 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\thesises\thesis_tmc\application\classes\controller\ems.php(487): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Ems->action_add_employee()
#7 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ems))
#8 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\thesises\thesis_tmc\index.php(109): Kohana_Request->execute()
#11 {main}
2014-02-20 19:58:55 --- ERROR: ErrorException [ 8 ]: Undefined variable: employee_status ~ APPPATH\views\EMS\admin\add_employee.php [ 27 ]
2014-02-20 19:58:55 --- STRACE: ErrorException [ 8 ]: Undefined variable: employee_status ~ APPPATH\views\EMS\admin\add_employee.php [ 27 ]
--
#0 C:\xampp\htdocs\thesises\thesis_tmc\application\views\EMS\admin\add_employee.php(27): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 27, Array)
#1 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\thesises\thesis_tmc\application\classes\controller\ems.php(487): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Ems->action_add_employee()
#7 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ems))
#8 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\thesises\thesis_tmc\index.php(109): Kohana_Request->execute()
#11 {main}
2014-02-20 20:19:27 --- ERROR: Kohana_Exception [ 0 ]: View variable is not set: add_elements ~ SYSPATH\classes\kohana\view.php [ 171 ]
2014-02-20 20:19:27 --- STRACE: Kohana_Exception [ 0 ]: View variable is not set: add_elements ~ SYSPATH\classes\kohana\view.php [ 171 ]
--
#0 C:\xampp\htdocs\thesises\thesis_tmc\application\classes\controller\ems.php(491): Kohana_View->__get('add_elements')
#1 [internal function]: Controller_Ems->action_add_employee()
#2 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ems))
#3 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\thesises\thesis_tmc\index.php(109): Kohana_Request->execute()
#6 {main}