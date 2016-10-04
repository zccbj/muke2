<?php
namespace App\Controller\Home;
class Index{
	protected $arr=array();
	static function test(){
		echo __FILE__;
	}
	public function __set($key,$value){
		var_dump(__METHOD__);
		$this->arr[$key]=$value;
	}
	public function __get($key){
		var_dump(__METHOD__);
		return $this->arr[$key];
	}
	function __call($func,$param){
		//调用了没有定义的方法。
		echo '<br>';
		echo $func;
		var_dump($param);
	}
	static function __callStatic($method,$args){
		//调用了没有定义的静态方法。
		echo '<br>';
		echo $method;
		var_dump($args);
	}
	function __tostring(){
		//echo 对象
		return __CLASS__;
	}
	function __invoke($param){
		//obj('1');把对象当成方法使用
		var_dump($param);
		return "aaa";
	}
}