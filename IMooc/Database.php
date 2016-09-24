<?php
namespace IMooc;
class Database{
	//单例模式
	public $name='123';
	private static $db;
	private function __construct(){

	}
	public static function getInstance(){
		if (self::$db instanceof self) {
			return self::$db;
		}else{
			self::$db=new self();
			return self::$db;
		}
	}
}