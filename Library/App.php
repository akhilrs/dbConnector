<?php
namespace Library;

use \Library\Database;

/**
 * Core Library
 */
class App {

	/**
	 * App instances
	 * @var array
	 */
	protected static $instances = array();

	public $db;
	/**
	 * Core constructor
	 */
	function __construct($config) {
		$this->initDbConnection($config->db);
	}

	protected function initDbConnection($config) {
		$this->db = new Database($config);
	}

	/**
	 * Create class instances
	 * @param  string $name Class name
	 * @return object Class instance
	 */
	public function createInstance($name = '') {
		if (!isset(static::$instances[$name])) {
			static::$instances[$name] = $this;
		}
	}

	/**
	 * Get a particular class instance
	 * @param  string $name Class name
	 * @return object       Class instance
	 */
	public function getInstance($name = '') {
		return isset(static::$instances[$name]) ? static::$instances[$name] : null;
	}
}
?>