<?php

namespace Library;
use \Library\App;

/**
 * Employee Library
 */
class Employee extends App {

	private $table = 'employees';

	function __construct() {

	}

	public function get_by_username($username = '') {

	}

	public function all() {
		var_dump($this);
	}
}
?>