<?php
ini_set("display_errors", "On"); 
define('BASEDIR', __DIR__);

include BASEDIR.'/IMooc/Loader.php';
spl_autoload_register('IMooc\Loader::autoload');
//IMooc\Object::test();
use APP\Controller\Home;
//Home\Index::test();
// $obj=new Home\Index();
// $obj->title="helod";
// $obj->title;
// $obj->title("zcc");//调用没有定义的方法
// Home\Index::test1('qq');
// echo $obj;//输出对象
// echo $obj("11");//把对象当方法使用
IMooc\Factory::createDb();
$db=IMooc\Register::get('db1');
$db->name=3;

// $db=new IMooc\Database\MySQL();
// $db->connect(,,,,);
// $db->query('select * from user');
// $db->close();
/**
* 
*/


