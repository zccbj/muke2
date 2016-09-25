<?php
/*依赖倒置原则
A.高层次的模块不应该依赖于低层次的模块，他们都应该依赖于抽象。
B.抽象不应该依赖于具体实现，具体实现应该依赖于抽象。
在这里不管是Page，还是低层次的MaleUserStratey和FemaleUserStrategy都依赖于抽象userStrategy这个抽象，
而UserStrategy不依赖于具体实现，具体实现Female和male都依赖于UserStrategy这个抽象。有点绕，应该是这个关系。
在写Page不需要实现UserStrategy的，最终只是在运行过程中才进行绑定，实现了两个类的解耦，这就是策略模式的依赖倒置，
*/
//以下代码应放在index中测试。
class Page
{
	protected $strategy;
	function index(){
		$this->strategy->showAd();
		$this->strategy->showCategory();
	}
	function setStragegy(\IMooc\UserStrategy $strategy){
		$this->strategy=$strategy;
	}
}

//分支逻辑if else,新增一个逻辑以后需要修改每一个if else的地方。使用策略模式以后，只需要增加一个策略类。从硬编码到解耦的实现。
if (1) {
	$strategy=new \IMooc\MaleUserStrategy();
}else{

	$strategy=new \IMooc\MaleUserStrategy();
}

$page=new Page;
$page->setStragegy($strategy);
$page->index();