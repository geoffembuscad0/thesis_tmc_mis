<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-02-26 00:39:42 --- ERROR: ErrorException [ 8 ]: A non well formed numeric value encountered ~ APPPATH\views\EMS\admin\dashboard.php [ 109 ]
2014-02-26 00:39:42 --- STRACE: ErrorException [ 8 ]: A non well formed numeric value encountered ~ APPPATH\views\EMS\admin\dashboard.php [ 109 ]
--
#0 [internal function]: Kohana_Core::error_handler(8, 'A non well form...', 'C:\xampp\htdocs...', 109, Array)
#1 C:\xampp\htdocs\thesises\thesis_tmc\application\views\EMS\admin\dashboard.php(109): date('F d Y', '1990-01-10 00:0...')
#2 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\view.php(228): Kohana_View->render()
#5 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\response.php(160): Kohana_View->__toString()
#6 C:\xampp\htdocs\thesises\thesis_tmc\application\classes\controller\ems.php(467): Kohana_Response->body(Object(View))
#7 [internal function]: Controller_Ems->action_admin_dashboard()
#8 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ems))
#9 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\thesises\thesis_tmc\index.php(109): Kohana_Request->execute()
#12 {main}