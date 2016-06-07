<?php

	class dbCon{

		private $db;
		private $dbName = 'olsen_app1';
		private $userRW = 'root';
		private $pwRW	= '';
		private $host 	= 'localhost';

		public function __construct() {
			$this->db = new mysqli( $this->host, $this->userRW, $this->pwRW, $this->dbName );	
		}
	
		public function getDb() {
			return $this->db;
		}
		
		public function closeDb() {
			$this->db->close();
		}

		/**
		 * pullRecord() gets a record from the database
		 * @tbl 		 is the database table
		 * @params 		 is an arrays with parameters to select record
		 */
		public function pullRecord( $tbl, $params ){	

			$sqlStr = "SELECT * FROM ". $tbl ;

			//Check if the requests contains parameters

			//count() is a PHP method to get the size of array
			//like JS length
			if( count($params) > 0 ){
				//Attach where to sqlStatement
				$sqlStr .= " WHERE ";

				foreach($params as $key => $value) {
				    //check if params value is string
					if( gettype($value) == "string"){
						$sqlStr .= $key . " = '".$value."'"; 
					}else{
						$sqlStr .= $key . " = ".$value;
					}
				}


			}

			$res = $this->db->query( $sqlStr );

			return $res;
			//execute query
			//return results

		}

		public function insertRecord( $tbl, $fieldArr, $valuesArr ){

		}

		public function sqlExecute( $SQL ){

		}

	}
?>