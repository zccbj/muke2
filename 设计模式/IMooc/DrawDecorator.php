<?php
//1.装饰模式,可以动态的添加、修改类的功能
//2.一个类提供了一项功能,如果要在修改并添加额外的功能,传统的编程模式,需要写一个之类集成它,并重新实现类的方法
//3.使用装饰模式,仅需在运行时添加一个装饰对象（继承于装饰器的类）即可实现,可以实现最大的灵活性
//其实是在调用的那个类里添加方法来调用装饰器类，所以传装饰器即可。
namespace IMooc;
interface DrawDecorator{
	function beforeDraw();
	function afterDraw();
}