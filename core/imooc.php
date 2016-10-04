<?php
namespace core;
class imooc{
	public static function run(){
		echo "run....";
	}
	public static function loader($class){
		$class=str_replace('\\', DS, $class);
		$class=IMOOC.$class.'.php';
		include $class;
	}
}