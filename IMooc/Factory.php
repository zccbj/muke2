<?php
namespace IMooc;
class Factory{
	//用工厂模式
	//会用到很多次Database对象，但是对象名变动会很麻烦。所以用工厂模式。
	static function createDb(){
		$db=Database::getInstance();
		Register::set('db1',$db);

		//return $db;
	}

	static function getUser($id){
		//注册器模式
		$key = 'user_'.$id;
		$user = Register::get($key);
		if(!$user){
			$user = new User($id);
			Register::set($key,$user);
		}
		return $user;
	} 
}