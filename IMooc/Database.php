<?php
namespace IMooc;
interface IDatabase{
	//适配器模式，对于不同环境，使用不同连接数据库的代码，都可以有相同的操作。
	function connect($host,$user,$passwd,$dbname);
	function query($sql);
	function close();
}



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