<?php
namespace IMooc;
class SizeDrawDecorator implements DrawDecorator{
	protected $size;
	function __construct($size=14){
		$this->size=$size;
	}
	function beforeDraw(){
		echo "<div font style='font-size:{$this->size};'>";
	}
	function afterDraw(){
		echo "</div>";
	}
}