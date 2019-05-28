<?php
	/**
	 * Database connection file
	 */
	class DB{
		public $con = null;
		function __construct(){
			$host = "localhost";
			$username = "root";
			$password = "";
			$db_name = 'lib_system';

			$this->con = new mysqli($host, $username, $password, $db_name);
		}

		function select($sql){
			$result = $this->con->query($sql);
			return $result;
		}
		function insert($sql){
			// returns boolean
			$result = $this->con->query($sql);
			return $result;
		}

	}