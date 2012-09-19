<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-09-19 15:55:19 --- ERROR: ErrorException [ 1 ]: Class 'App_Controller' not found ~ APPPATH/classes/controller/welcome.php [ 3 ]
2012-09-19 15:55:19 --- STRACE: ErrorException [ 1 ]: Class 'App_Controller' not found ~ APPPATH/classes/controller/welcome.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-19 15:55:54 --- ERROR: View_Exception [ 0 ]: The requested view layout/default could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-09-19 15:55:54 --- STRACE: View_Exception [ 0 ]: The requested view layout/default could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /var/www/dev.fyibn.com/system/classes/kohana/view.php(137): Kohana_View->set_filename('layout/default')
#1 /var/www/dev.fyibn.com/system/classes/kohana/view.php(30): Kohana_View->__construct('layout/default', NULL)
#2 /var/www/dev.fyibn.com/system/classes/kohana/controller/template.php(33): Kohana_View::factory('layout/default')
#3 /var/www/dev.fyibn.com/application/classes/controller/app.php(15): Kohana_Controller_Template->before()
#4 [internal function]: Controller_App->before()
#5 /var/www/dev.fyibn.com/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /var/www/dev.fyibn.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/dev.fyibn.com/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/dev.fyibn.com/index.php(109): Kohana_Request->execute()
#9 {main}
2012-09-19 15:55:54 --- ERROR: View_Exception [ 0 ]: The requested view layout/default could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-09-19 15:55:54 --- STRACE: View_Exception [ 0 ]: The requested view layout/default could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /var/www/dev.fyibn.com/system/classes/kohana/view.php(137): Kohana_View->set_filename('layout/default')
#1 /var/www/dev.fyibn.com/system/classes/kohana/view.php(30): Kohana_View->__construct('layout/default', NULL)
#2 /var/www/dev.fyibn.com/system/classes/kohana/controller/template.php(33): Kohana_View::factory('layout/default')
#3 /var/www/dev.fyibn.com/application/classes/controller/app.php(15): Kohana_Controller_Template->before()
#4 [internal function]: Controller_App->before()
#5 /var/www/dev.fyibn.com/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /var/www/dev.fyibn.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/dev.fyibn.com/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/dev.fyibn.com/index.php(109): Kohana_Request->execute()
#9 {main}
2012-09-19 16:13:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/bootstrap-responsive.min.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-19 16:13:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/bootstrap-responsive.min.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dev.fyibn.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-19 16:13:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/bootstrap.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-19 16:13:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/bootstrap.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dev.fyibn.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-19 16:13:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/plugins.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-19 16:13:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/plugins.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dev.fyibn.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-19 16:13:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-19 16:13:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dev.fyibn.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-19 16:13:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/script.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-19 16:13:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/script.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dev.fyibn.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-19 16:13:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-19 16:13:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dev.fyibn.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-19 16:14:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/bootstrap-responsive.min.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-19 16:14:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/bootstrap-responsive.min.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dev.fyibn.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-19 16:14:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/bootstrap.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-19 16:14:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/bootstrap.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dev.fyibn.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-19 16:14:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-19 16:14:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dev.fyibn.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-19 16:14:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/plugins.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-19 16:14:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/plugins.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dev.fyibn.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-19 16:14:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/script.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-19 16:14:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/script.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dev.fyibn.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-19 16:14:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-19 16:14:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dev.fyibn.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-19 16:15:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/bootstrap-responsive.min.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-19 16:15:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/bootstrap-responsive.min.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dev.fyibn.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-19 16:15:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/bootstrap.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-19 16:15:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/bootstrap.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dev.fyibn.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-19 16:15:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-19 16:15:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dev.fyibn.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-19 16:15:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-19 16:15:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dev.fyibn.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-19 16:15:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/bootstrap.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-19 16:15:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/bootstrap.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dev.fyibn.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-19 16:16:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/bootstrap-responsive.min.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-19 16:16:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/bootstrap-responsive.min.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dev.fyibn.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-19 16:16:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/bootstrap.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-19 16:16:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/bootstrap.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dev.fyibn.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-19 16:16:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-19 16:16:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dev.fyibn.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-19 16:16:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-19 16:16:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dev.fyibn.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-19 16:18:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-19 16:18:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dev.fyibn.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-19 16:18:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-19 16:18:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dev.fyibn.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-19 16:18:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-19 16:18:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dev.fyibn.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-19 16:18:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-09-19 16:18:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dev.fyibn.com/index.php(109): Kohana_Request->execute()
#1 {main}