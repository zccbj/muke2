<?php
namespace IMooc;

class User
{
	//1数据对象映射模式，是将对象和数据存储映射起来，对一个对象的操作会映射为对数据存储的操作。
	//2将复杂的sql语句映射成对象属性的操作。
    protected $id;
    protected $data;
    protected $db;
    protected $change = false;

    function __construct($id)
    {
        $this->db = Factory::getDatabase();
        $res = $this->db->query("select * from user where id = $id limit 1");
        $this->data = $res->fetch_assoc();
        $this->id = $id;
    }

    function __get($key)
    {
        if (isset($this->data[$key]))
        {
            return $this->data[$key];
        }
    }

    function __set($key, $value)
    {
        $this->data[$key] = $value;
        $this->change = true;
    }

    function __destruct()
    {
        if ($this->change)
        {
            foreach ($this->data as $k => $v)
            {
                $fields[] = "$k = '{$v}'";
            }
            $this->db->query("update user set " . implode(', ', $fields) . "where
            id = {$this->id} limit 1");
        }
    }
}