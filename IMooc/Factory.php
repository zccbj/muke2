<?php
namespace IMooc;
class Factory{
	//会用到很多次Database对象，但是对象名变动会很麻烦。所以用工厂。
	static function createDb(){
		$db=Database::getInstance();
		Register::set('db1',$db);

		//return $db;
	}
}