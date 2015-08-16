<?php
/*(defined(HTTP_URL)) ? HTTP_URL : define('HTTP_URL', $_SERVER["HTTP_HOST"]);
(defined(ROOT_DIR)) ? ROOT_DIR : define('ROOT_DIR', $_SERVER["DIRECTORY_ROOT"]);*/
(defined("HTTP_URL")) ? HTTP_URL : define('HTTP_URL', 'http://localhost/lab/demo/');
(defined("ROOT_DIR")) ? ROOT_DIR : define('ROOT_DIR', '/var/www/html/lab/demo/');
(defined("DS")) ? DS : define('DS', DIRECTORY_SEPARATOR);
(defined("LIB_DIR")) ? LIB_DIR : define('LIB_DIR', ROOT_DIR . 'Library' . DS);
(defined("DATA_DIR")) ? DATA_DIR : define('DATA_DIR', ROOT_DIR . 'Data' . DS);

?>