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
// $canvas1=new IMooc \Canvas();
// $canvas1->init();
// //$canvas1->addDecorator(new IMooc\ColorDrawDecorator());
// $canvas1->addDecorator(new IMooc\SizeDrawDecorator(30));
// $canvas1->rect(3,6,4,12);
// $canvas1->draw();
/**
 * 
 */
$users=new \IMooc\AllUser();
foreach ($users as $user) {
	var_dump($user->name);
}
