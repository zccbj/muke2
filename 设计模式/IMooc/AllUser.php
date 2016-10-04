<?php
namespace IMooc;
//> 1. 迭代器模式，在不需要了解内部实现的前提下，遍历一个聚合对象的内部元素。
//> 2. 相比传统的编程模式，迭代器模式可以隐藏遍历元素的所需操作。
class AllUser implements \Iterator
{
    protected $ids;
    protected $data = array();
    protected $index;
//迭代器需要实现的方法：
//1、rewind，将索引重置到数组第一个元素；2、valid，验证数据有效性；3、current，获取当前数据；4、next，将索引值向下移动；5、key，获取当前索引
    function __construct()
    {
        $db = Factory::getDatabase();
        $result = $db->query("select id from user");
        $this->ids = $result->fetch_all(MYSQLI_ASSOC);
    }

    function current()
    {
        $id = $this->ids[$this->index]['id'];
        return Factory::getUser($id); //返回user对象
    }

    function next()
    {
        $this->index ++;
    }

    function valid()
    {
        return $this->index < count($this->ids);
    }

    function rewind()
    {
        $this->index = 0;
    }

    function key()
    {
        return $this->index;
    }

}