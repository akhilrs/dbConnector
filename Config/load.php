<?php

require LIB_DIR . 'App.php';
require LIB_DIR . 'Database.php';
require LIB_DIR . 'Employee.php';

use \Library\Employee;
$App = new \Library\App($config);

$emp = new Employee();
?>