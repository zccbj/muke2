<?php
namespace IMooc;
//> 1. 在客户端与实体之间建立一个代理对象（proxy），客户端对实体进行的操作全部委派给代理对象，隐藏实体的具体实现细节。
//> 2. Proxy还可以与业务代码分离，部署到另外的服务器，业务代码中通过RPC来委派任务。
class Proxy implements IUserProxy
{
    function getUserName($id)
    {
        $db = Factory::getDatabase('slave');
        $db->query("select name from user where id =$id limit 1");
    }

    function setUserName($id, $name)
    {
        $db = Factory::getDatabase('master');
        $db->query("update user set name = $name where id =$id limit 1");
    }
}