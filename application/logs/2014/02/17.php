<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-02-17 04:56:25 --- ERROR: ErrorException [ 1 ]: Call to undefined method Controller_Login::get_array_element() ~ APPPATH\classes\controller\login.php [ 68 ]
2014-02-17 04:56:25 --- STRACE: ErrorException [ 1 ]: Call to undefined method Controller_Login::get_array_element() ~ APPPATH\classes\controller\login.php [ 68 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-02-17 04:57:46 --- ERROR: Database_Exception [ 2002 ]: SQLSTATE[HY000] [2002] php_network_getaddresses: getaddrinfo failed: No such host is known.  ~ MODPATH\database\classes\kohana\database\pdo.php [ 59 ]
2014-02-17 04:57:46 --- STRACE: Database_Exception [ 2002 ]: SQLSTATE[HY000] [2002] php_network_getaddresses: getaddrinfo failed: No such host is known.  ~ MODPATH\database\classes\kohana\database\pdo.php [ 59 ]
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
2014-02-17 04:58:05 --- ERROR: ErrorException [ 1 ]: Call to undefined method Controller_Login::get_array_element() ~ APPPATH\classes\controller\login.php [ 68 ]
2014-02-17 04:58:05 --- STRACE: ErrorException [ 1 ]: Call to undefined method Controller_Login::get_array_element() ~ APPPATH\classes\controller\login.php [ 68 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-02-17 04:58:48 --- ERROR: Database_Exception [ 2002 ]: SQLSTATE[HY000] [2002] php_network_getaddresses: getaddrinfo failed: No such host is known.  ~ MODPATH\database\classes\kohana\database\pdo.php [ 59 ]
2014-02-17 04:58:48 --- STRACE: Database_Exception [ 2002 ]: SQLSTATE[HY000] [2002] php_network_getaddresses: getaddrinfo failed: No such host is known.  ~ MODPATH\database\classes\kohana\database\pdo.php [ 59 ]
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
2014-02-17 04:59:48 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Account::get_audit() ~ APPPATH\classes\controller\login.php [ 119 ]
2014-02-17 04:59:48 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Account::get_audit() ~ APPPATH\classes\controller\login.php [ 119 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-02-17 05:00:05 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Account::get_audit() ~ APPPATH\classes\controller\login.php [ 119 ]
2014-02-17 05:00:05 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Account::get_audit() ~ APPPATH\classes\controller\login.php [ 119 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-02-17 05:06:49 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Account::get_audit() ~ APPPATH\classes\controller\login.php [ 119 ]
2014-02-17 05:06:49 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Account::get_audit() ~ APPPATH\classes\controller\login.php [ 119 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-02-17 05:10:05 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ SYSPATH\classes\controller.php [ 19 ]
2014-02-17 05:10:05 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ SYSPATH\classes\controller.php [ 19 ]
--
#0 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\controller.php(19): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\xampp\htdocs...', 19, Array)
#1 C:\xampp\htdocs\thesises\thesis_tmc\application\classes\controller\login.php(69): Controller->get_array_element(Array, 1)
#2 [internal function]: Controller_Login->action_validate()
#3 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#4 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\thesises\thesis_tmc\index.php(109): Kohana_Request->execute()
#7 {main}
2014-02-17 05:12:17 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ SYSPATH\classes\controller.php [ 19 ]
2014-02-17 05:12:17 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ SYSPATH\classes\controller.php [ 19 ]
--
#0 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\controller.php(19): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\xampp\htdocs...', 19, Array)
#1 C:\xampp\htdocs\thesises\thesis_tmc\application\classes\controller\login.php(69): Controller->get_array_element(Array, 1)
#2 [internal function]: Controller_Login->action_validate()
#3 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#4 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\thesises\thesis_tmc\index.php(109): Kohana_Request->execute()
#7 {main}