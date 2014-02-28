<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-02-21 12:57:30 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\controller\ems.php [ 497 ]
2014-02-21 12:57:30 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\controller\ems.php [ 497 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-02-21 13:42:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ems was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2014-02-21 13:42:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ems was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\thesises\thesis_tmc\index.php(109): Kohana_Request->execute()
#3 {main}
2014-02-21 13:43:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ems was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2014-02-21 13:43:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ems was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\thesises\thesis_tmc\index.php(109): Kohana_Request->execute()
#3 {main}
2014-02-21 13:44:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ems was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2014-02-21 13:44:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ems was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\thesises\thesis_tmc\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\thesises\thesis_tmc\index.php(109): Kohana_Request->execute()
#3 {main}