<?php
namespace core\lib;
class route{
	public $ctrl;
	public $action;
	public function __construct(){
		//PATH_INFO可以，但是nginx中默认是没有PATH_INFO的。如果要兼容二级目录只要改一下route类和前面的常量，不是很复杂
		//隐藏index.php   加上那个.haccess
		//获取url参数			var_dump($_SERVER);
		//返回控制器和方法
		if (isset($_SERVER['PATH_INFO'])&&$_SERVER['PATH_INFO']!='/') {
			$path=$_SERVER['PATH_INFO'];
			$path=trim($path,'/');//移除字符串两端空格及定义的字符
			$patharr=explode('/', $path);
		//	var_dump($patharr);
			if (isset($patharr[0])) {
				$this->ctrl=$patharr[0];
				unset($patharr[0]);
			}
			if (isset($patharr[1])) {
				$this->action=$patharr[1];
				unset($patharr[1]);
			}else{
				$this->action='index';
			}
			$count=count($patharr)+2;//键是从2开始的
			$i=2;
			while ( $i<$count) {
				if (isset($patharr[$i+1])) {//当只有键没有值，可以这样判断
					$_GET[$patharr[$i]]=$patharr[$i+1];
				}
				$i=$i+2;
			}
		}else{
			$this->ctrl='index';
			$this->action='index';
		}
	}
	public static function index(){
		var_dump($_SERVER);
	}
}