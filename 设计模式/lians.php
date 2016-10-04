<?php
class Db{

public $str='select * ';
	function from($from){
		$this->str.=' from '.$from;
		return $this;
	}
	function where($where){
		$this->str.=' where '.$where;
		return $this;
	}
	function order($order ){
		$this->str.=' order by '.$order;
		return $this;
	}
	function select(){
		return $this->str;
	}

}