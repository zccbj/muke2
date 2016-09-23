<?php
class File{
	private $dir;
	public $ext='.txt';
	public function __construct(){
		$this->dir=dirname(__FILE__).'/files/';
	}
	public function cacheData($key,$value='',$path=''){

		 $filename=$this->dir.$path.$key.$this->ext;


		if ($value!=='') {
			if (is_null($value)) {
				//value==null,删除缓存
				return @unlink($filename);
			}
			//value,添加缓存
			$dir=dirname($filename);
			 if (!is_dir($dir)) {
			 	mkdir($dir,0777);
			 }
			return file_put_contents($filename, json_encode($value));//第二个参数只能为字符串	
		}

		//value=='',获取缓存
		if(!is_file($filename)){
			return false;

		}else{
			return json_decode(file_get_contents($filename),true);
		}
	}

}