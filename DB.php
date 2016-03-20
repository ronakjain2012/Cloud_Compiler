<?php
class Database {
	private static $_instance;
	private $_connection;
	private $DB_host = "localhost";
	private $DB_user_name = "root";
	private $DB_user_password = "root";
	private $DB_database = "test";
	
	public static function getInstance() {
		if(!self::$_instance) { // If no instance then make one
			self::$_instance = new self();
		}
		return self::$_instance;
	}
	
	private function __construct() {
		$this->_connection = new mysqli($this->DB_host, $this->DB_user_name, 
			$this->DB_user_password, $this->DB_database);
	
		// Error handling
		if(mysqli_connect_error()) {
			trigger_error("Failed to conencto to MySQL: " . mysql_connect_error(),E_USER_ERROR);
		}
	}
	
	public function getConnection() {
		return $this->_connection;
	}
	
	
}

class Query extends Database {
	public static function run($sql) {
		return parent::getInstance()->getConnection()->query($sql);
	}
}

?>