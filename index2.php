<?php
define('BASEDIR', __DIR__);

include BASEDIR.'/IMooc/Loader.php';
spl_autoload_register('IMooc\Loader::autoload');

use APP\Controller\Home as a;
IMooc\Object::test();
Home\Index::test();