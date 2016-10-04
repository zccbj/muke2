<?php
namespace IMooc;
//观察者模式包含两个元素 事件，事件观察者。
//事件观察者要被注册到事件对象的属性中，当事件触发后通知观察者执行观察者的某个方法。
class Event extends IMooc\EventGenerator
{
	
	function trigger(){
		echo "event";
		$this->notify();
	}
}

class Observer1 implements IMooc\Observer
{	
	function update($event_info=null){
		echo '我是观察者1，我执行更新';
	}
}
$event=new Event();
$event->addObserver(new Observer1);
$event->trigger();