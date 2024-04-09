<?php
require_once('config/Connect.php');

class Setters extends Connect{
	
	public function user_register_save_data(){
		$conn = new Connect;
		// var_dump($conn);
		return $conn;
	}
}