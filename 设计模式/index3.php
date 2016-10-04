<?php
ini_set("display_errors", "On"); 
require_once('lians.php');
 $db=new Db();
$sql=$db->from('user')->where('age>10')->order('grade desc')->select();
echo $sql;