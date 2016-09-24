<?php
namespace IMooc;
class Loader{

	static function autoload($class){
		
		$a= BASEDIR.'/'.str_replace('\\', '/', $class).'.php';
		// echo $a;
		// echo '<br>';
		require($a);
	}
}