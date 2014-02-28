<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-01-30 16:19:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL thesis_tmc was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-01-30 16:19:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL thesis_tmc was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\thesis_tmc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\thesis_tmc\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\thesis_tmc\index.php(109): Kohana_Request->execute()
#3 {main}
2014-01-30 16:35:50 --- ERROR: ErrorException [ 8 ]: Undefined offset: 7 ~ MODPATH\html2pdf\vendor\html2pdf\html2pdf\html2pdf.class.php [ 2133 ]
2014-01-30 16:35:50 --- STRACE: ErrorException [ 8 ]: Undefined offset: 7 ~ MODPATH\html2pdf\vendor\html2pdf\html2pdf\html2pdf.class.php [ 2133 ]
--
#0 C:\xampp\htdocs\thesis_tmc\modules\html2pdf\vendor\html2pdf\html2pdf\html2pdf.class.php(2133): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\xampp\htdocs...', 2133, Array)
#1 C:\xampp\htdocs\thesis_tmc\modules\html2pdf\vendor\html2pdf\html2pdf\html2pdf.class.php(4948): HTML2PDF->_calculateTableCellSize(Array, Array)
#2 C:\xampp\htdocs\thesis_tmc\modules\html2pdf\vendor\html2pdf\html2pdf\html2pdf.class.php(1255): HTML2PDF->_tag_close_TABLE(Array)
#3 C:\xampp\htdocs\thesis_tmc\modules\html2pdf\vendor\html2pdf\html2pdf\html2pdf.class.php(1218): HTML2PDF->_executeAction(Array)
#4 C:\xampp\htdocs\thesis_tmc\modules\html2pdf\vendor\html2pdf\html2pdf\html2pdf.class.php(408): HTML2PDF->_makeHTMLcode()
#5 C:\xampp\htdocs\thesis_tmc\modules\html2pdf\classes\view\pdf.php(84): HTML2PDF->writeHTML('<style type='te...')
#6 C:\xampp\htdocs\thesis_tmc\application\classes\controller\Pms.php(339): View_PDF->render()
#7 [internal function]: Controller_Pms->action_print_payslip()
#8 C:\xampp\htdocs\thesis_tmc\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Pms))
#9 C:\xampp\htdocs\thesis_tmc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\xampp\htdocs\thesis_tmc\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\thesis_tmc\index.php(109): Kohana_Request->execute()
#12 {main}
2014-01-30 16:46:08 --- ERROR: HTML2PDF_exception [ 4 ]: ERRO n°4 : Código HTML não válido, as tags não estão fechadas na ordem correta.Estado : Array
(
    [0] => page
    [1] => table
)
 HTML : ...'3'>PHP 293.38




... ~ MODPATH\html2pdf\vendor\html2pdf\html2pdf\_class\parsingHtml.class.php [ 119 ]
2014-01-30 16:46:08 --- STRACE: HTML2PDF_exception [ 4 ]: ERRO n°4 : Código HTML não válido, as tags não estão fechadas na ordem correta.Estado : Array
(
    [0] => page
    [1] => table
)
 HTML : ...'3'>PHP 293.38




... ~ MODPATH\html2pdf\vendor\html2pdf\html2pdf\_class\parsingHtml.class.php [ 119 ]
--
#0 C:\xampp\htdocs\thesis_tmc\modules\html2pdf\vendor\html2pdf\html2pdf\html2pdf.class.php(407): HTML2PDF_parsingHtml->parse()
#1 C:\xampp\htdocs\thesis_tmc\modules\html2pdf\classes\view\pdf.php(84): HTML2PDF->writeHTML('<style type='te...')
#2 C:\xampp\htdocs\thesis_tmc\application\classes\controller\Pms.php(339): View_PDF->render()
#3 [internal function]: Controller_Pms->action_print_payslip()
#4 C:\xampp\htdocs\thesis_tmc\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Pms))
#5 C:\xampp\htdocs\thesis_tmc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\thesis_tmc\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\thesis_tmc\index.php(109): Kohana_Request->execute()
#8 {main}
2014-01-30 16:48:53 --- ERROR: HTML2PDF_exception [ 4 ]: ERRO n°4 : Código HTML não válido, as tags não estão fechadas na ordem correta.Estado : Array
(
    [0] => page
    [1] => table
    [2] => tr
    [3] => tr
)
 HTML : ...>
PHP 293.38


... ~ MODPATH\html2pdf\vendor\html2pdf\html2pdf\_class\parsingHtml.class.php [ 119 ]
2014-01-30 16:48:53 --- STRACE: HTML2PDF_exception [ 4 ]: ERRO n°4 : Código HTML não válido, as tags não estão fechadas na ordem correta.Estado : Array
(
    [0] => page
    [1] => table
    [2] => tr
    [3] => tr
)
 HTML : ...>
PHP 293.38


... ~ MODPATH\html2pdf\vendor\html2pdf\html2pdf\_class\parsingHtml.class.php [ 119 ]
--
#0 C:\xampp\htdocs\thesis_tmc\modules\html2pdf\vendor\html2pdf\html2pdf\html2pdf.class.php(407): HTML2PDF_parsingHtml->parse()
#1 C:\xampp\htdocs\thesis_tmc\modules\html2pdf\classes\view\pdf.php(84): HTML2PDF->writeHTML('<style type='te...')
#2 C:\xampp\htdocs\thesis_tmc\application\classes\controller\Pms.php(339): View_PDF->render()
#3 [internal function]: Controller_Pms->action_print_payslip()
#4 C:\xampp\htdocs\thesis_tmc\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Pms))
#5 C:\xampp\htdocs\thesis_tmc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\thesis_tmc\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\thesis_tmc\index.php(109): Kohana_Request->execute()
#8 {main}
2014-01-30 16:49:23 --- ERROR: HTML2PDF_exception [ 4 ]: ERRO n°4 : Código HTML não válido, as tags não estão fechadas na ordem correta.Estado : Array
(
    [0] => page
    [1] => table
    [2] => tr
    [3] => tr
)
 HTML : ...an='3'>PHP 293.38


... ~ MODPATH\html2pdf\vendor\html2pdf\html2pdf\_class\parsingHtml.class.php [ 119 ]
2014-01-30 16:49:23 --- STRACE: HTML2PDF_exception [ 4 ]: ERRO n°4 : Código HTML não válido, as tags não estão fechadas na ordem correta.Estado : Array
(
    [0] => page
    [1] => table
    [2] => tr
    [3] => tr
)
 HTML : ...an='3'>PHP 293.38


... ~ MODPATH\html2pdf\vendor\html2pdf\html2pdf\_class\parsingHtml.class.php [ 119 ]
--
#0 C:\xampp\htdocs\thesis_tmc\modules\html2pdf\vendor\html2pdf\html2pdf\html2pdf.class.php(407): HTML2PDF_parsingHtml->parse()
#1 C:\xampp\htdocs\thesis_tmc\modules\html2pdf\classes\view\pdf.php(84): HTML2PDF->writeHTML('<style type='te...')
#2 C:\xampp\htdocs\thesis_tmc\application\classes\controller\Pms.php(339): View_PDF->render()
#3 [internal function]: Controller_Pms->action_print_payslip()
#4 C:\xampp\htdocs\thesis_tmc\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Pms))
#5 C:\xampp\htdocs\thesis_tmc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\thesis_tmc\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\thesis_tmc\index.php(109): Kohana_Request->execute()
#8 {main}
2014-01-30 17:03:16 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'w' (T_STRING), expecting ';' or '{' ~ APPPATH\classes\controller\Home.php [ 16 ]
2014-01-30 17:03:16 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'w' (T_STRING), expecting ';' or '{' ~ APPPATH\classes\controller\Home.php [ 16 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}