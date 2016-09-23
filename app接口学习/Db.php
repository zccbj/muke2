<?php
	//单例模式。连接数据库封装
	class Db{
		private $dbConfig=array(
			'DB_HOST'=>'139.196.228.34',
			'DB_NAME'=>'B_Note',
			'DB_USER'=>'board_admin',
			'DB_PWD'=>'banshu12...',
			);
		private $conn;


		private static $instance;
		private function __construct(){
		//有这构造方法，类外的兄弟们不能new	
		}
		public static function getInstance(){
			if (!(self::$instance instanceof self)) {
				self::$instance=new self();
			}
			return self::$instance;

		}
		public function connect(){
			if (!$this->conn) {
				$this->conn=mysqli_connect($this->dbConfig['DB_HOST'],$this->dbConfig['DB_USER'],$this->dbConfig['DB_PWD']);
				if (!$this->conn) {
					throw new Exception("Error Processing Request", mysqli_error());
					
				}
				mysqli_select_db($this->conn,$this->dbConfig['DB_NAME']);
				mysqli_query($this->conn,'set names utf8');
			}
			return $this->conn;
		}

	}