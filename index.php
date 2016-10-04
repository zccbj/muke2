<?php 
/**入口文件
 *1定义常量
 *2加载函数库
 *3启动框架
 */
//define('BASEDIR', __DIR__);//和下面的一样

define('DS', DIRECTORY_SEPARATOR);//分隔符
define('IMOOC',realpath('.').DS);
define('CORE',IMOOC.'core'.DS);
define('APP',IMOOC.'app'.DS);
define('DEBUG',true);
if(DEBUG){
	ini_set('display_error', true);
}else{
	ini_set('display_error', false);
}
include CORE.'imooc.php';
spl_autoload_register('core\imooc::loader');
$a=new core\lib\route;
var_dump($_GET);