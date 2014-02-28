<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-02-28 12:47:52 --- ERROR: ErrorException [ 8 ]: Undefined variable: job_positions ~ APPPATH\views\EMS\HR\dashboard.php [ 74 ]
2014-02-28 12:47:52 --- STRACE: ErrorException [ 8 ]: Undefined variable: job_positions ~ APPPATH\views\EMS\HR\dashboard.php [ 74 ]
--
#0 C:\xampp\htdocs\thesises\thesis_tmc\application\views\EMS\HR\dashboard.php(74): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 74, Array)
#1 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\thesises\thesis_tmc\application\classes\controller\ems.php(188): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Ems->action_hr_dashboard()
#7 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ems))
#8 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\thesises\thesis_tmc\index.php(109): Kohana_Request->execute()
#11 {main}
2014-02-28 12:50:10 --- ERROR: ErrorException [ 8 ]: Undefined index: dept_name ~ APPPATH\views\EMS\HR\dashboard.php [ 78 ]
2014-02-28 12:50:10 --- STRACE: ErrorException [ 8 ]: Undefined index: dept_name ~ APPPATH\views\EMS\HR\dashboard.php [ 78 ]
--
#0 C:\xampp\htdocs\thesises\thesis_tmc\application\views\EMS\HR\dashboard.php(78): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 78, Array)
#1 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\thesises\thesis_tmc\application\classes\controller\ems.php(190): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Ems->action_hr_dashboard()
#7 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ems))
#8 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\thesises\thesis_tmc\index.php(109): Kohana_Request->execute()
#11 {main}
2014-02-28 13:00:01 --- ERROR: ErrorException [ 8 ]: Undefined variable: marital_statuses ~ APPPATH\views\EMS\HR\dashboard.php [ 86 ]
2014-02-28 13:00:01 --- STRACE: ErrorException [ 8 ]: Undefined variable: marital_statuses ~ APPPATH\views\EMS\HR\dashboard.php [ 86 ]
--
#0 C:\xampp\htdocs\thesises\thesis_tmc\application\views\EMS\HR\dashboard.php(86): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 86, Array)
#1 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\thesises\thesis_tmc\application\classes\controller\ems.php(190): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Ems->action_hr_dashboard()
#7 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ems))
#8 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\thesises\thesis_tmc\index.php(109): Kohana_Request->execute()
#11 {main}