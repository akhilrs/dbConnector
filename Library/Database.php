<?php
namespace Library;
use \Library\App;

/**
 *  Database Library
 */
class Database extends App {

	protected static $config = null;
	public $connector = '';
	public $type = 'json';
	public $jsonData = null;
	function __construct($config) {
		$this->set_config($config);
		$this->init();
	}

	protected function set_config($config) {
		static::$config = $config;
	}

	protected function init() {
		$this->initialize_connector();
	}

	private function loadData() {
	}

	private function initialize_connector() {
		$this->type = static::$config->connector;
		if ($this->type == 'json') {
			$this->connector = $this->json_connector();
			$this->read_jsonData();
		} else if ($this->type == 'mysql') {

		}
	}

	private function json_connector() {
		return DATA_DIR . static::$config->datafile;
	}

	private function read_jsonData() {
		$this->jsonData = file_get_contents($this->connector);
	}

	public function FindAll() {
		print_r($this);
	}

}
?>