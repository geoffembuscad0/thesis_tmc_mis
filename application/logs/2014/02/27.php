<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-02-27 14:05:41 --- ERROR: Database_Exception [ 2002 ]: SQLSTATE[HY000] [2002] No connection could be made because the target machine actively refused it.
 ~ MODPATH\database\classes\kohana\database\pdo.php [ 59 ]
2014-02-27 14:05:41 --- STRACE: Database_Exception [ 2002 ]: SQLSTATE[HY000] [2002] No connection could be made because the target machine actively refused it.
 ~ MODPATH\database\classes\kohana\database\pdo.php [ 59 ]
--
#0 C:\xampp\htdocs\thesises\thesis_tmc\modules\database\classes\kohana\database\pdo.php(136): Kohana_Database_PDO->connect()
#1 C:\xampp\htdocs\thesises\thesis_tmc\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PDO->query(1, 'SELECT COUNT(*)...', false, Array)
#2 C:\xampp\htdocs\thesises\thesis_tmc\application\classes\model\account.php(10): Kohana_Database_Query->execute()
#3 C:\xampp\htdocs\thesises\thesis_tmc\application\classes\controller\login.php(103): Model_Account->get_counted_users(Array)
#4 [internal function]: Controller_Login->action_validate()
#5 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#6 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\thesises\thesis_tmc\index.php(109): Kohana_Request->execute()
#9 {main}
2014-02-27 14:21:41 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\controller\pms.php [ 49 ]
2014-02-27 14:21:41 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\controller\pms.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-02-27 15:57:41 --- ERROR: ErrorException [ 8 ]: Undefined variable: 008 ~ APPPATH\classes\controller\ems.php [ 500 ]
2014-02-27 15:57:41 --- STRACE: ErrorException [ 8 ]: Undefined variable: 008 ~ APPPATH\classes\controller\ems.php [ 500 ]
--
#0 C:\xampp\htdocs\thesises\thesis_tmc\application\classes\controller\ems.php(500): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 500, Array)
#1 [internal function]: Controller_Ems->action_get_position_by_dept()
#2 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ems))
#3 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\thesises\thesis_tmc\index.php(109): Kohana_Request->execute()
#6 {main}
2014-02-27 15:58:40 --- ERROR: ErrorException [ 8 ]: Undefined variable: 011 ~ APPPATH\classes\controller\ems.php [ 500 ]
2014-02-27 15:58:40 --- STRACE: ErrorException [ 8 ]: Undefined variable: 011 ~ APPPATH\classes\controller\ems.php [ 500 ]
--
#0 C:\xampp\htdocs\thesises\thesis_tmc\application\classes\controller\ems.php(500): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 500, Array)
#1 [internal function]: Controller_Ems->action_get_position_by_dept()
#2 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ems))
#3 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\thesises\thesis_tmc\index.php(109): Kohana_Request->execute()
#6 {main}
2014-02-27 15:59:52 --- ERROR: ErrorException [ 8 ]: Undefined variable: 005 ~ APPPATH\classes\controller\ems.php [ 499 ]
2014-02-27 15:59:52 --- STRACE: ErrorException [ 8 ]: Undefined variable: 005 ~ APPPATH\classes\controller\ems.php [ 499 ]
--
#0 C:\xampp\htdocs\thesises\thesis_tmc\application\classes\controller\ems.php(499): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 499, Array)
#1 [internal function]: Controller_Ems->action_get_position_by_dept()
#2 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ems))
#3 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\thesises\thesis_tmc\index.php(109): Kohana_Request->execute()
#6 {main}
2014-02-27 16:00:58 --- ERROR: ErrorException [ 8 ]: Undefined variable: 007 ~ APPPATH\classes\controller\ems.php [ 499 ]
2014-02-27 16:00:58 --- STRACE: ErrorException [ 8 ]: Undefined variable: 007 ~ APPPATH\classes\controller\ems.php [ 499 ]
--
#0 C:\xampp\htdocs\thesises\thesis_tmc\application\classes\controller\ems.php(499): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 499, Array)
#1 [internal function]: Controller_Ems->action_get_position_by_dept()
#2 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ems))
#3 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\thesises\thesis_tmc\index.php(109): Kohana_Request->execute()
#6 {main}
2014-02-27 16:01:48 --- ERROR: ErrorException [ 8 ]: Undefined variable: 006 ~ APPPATH\classes\controller\ems.php [ 499 ]
2014-02-27 16:01:48 --- STRACE: ErrorException [ 8 ]: Undefined variable: 006 ~ APPPATH\classes\controller\ems.php [ 499 ]
--
#0 C:\xampp\htdocs\thesises\thesis_tmc\application\classes\controller\ems.php(499): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 499, Array)
#1 [internal function]: Controller_Ems->action_get_position_by_dept()
#2 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ems))
#3 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\thesises\thesis_tmc\index.php(109): Kohana_Request->execute()
#6 {main}
2014-02-27 16:02:49 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\controller\ems.php [ 499 ]
2014-02-27 16:02:49 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\controller\ems.php [ 499 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-02-27 16:02:51 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\controller\ems.php [ 499 ]
2014-02-27 16:02:51 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\controller\ems.php [ 499 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-02-27 16:56:34 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '{' ~ APPPATH\classes\model\ems.php [ 183 ]
2014-02-27 16:56:34 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '{' ~ APPPATH\classes\model\ems.php [ 183 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}