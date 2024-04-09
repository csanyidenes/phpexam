<?php 

class Connect{

		private $db_data = array(
			'host'=> 'localhost',
			'username'=> 'root',
			'password'=> 'root',
			'database'=> 'database',
		);

	public function db(){
		$mysqli = new mysqli($this->db_data['host'], $this->db_data['username'], $this->db_data['password'], $this->db_data['database']);
		$mysqli->set_charset("utf8");
		return $mysqli;
	}
} 