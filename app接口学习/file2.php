<?php
class File{
	private $dir;
	public $ext='.txt';
	public function __construct(){
		$this->dir=dirname(__FILE__).'/files/';
	}
	public function cacheData($key,$value='',$cacheTime=0){

		 $filename=$this->dir.$key.$this->ext;


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
			 $cacheTime=sprintf('%011d',$cacheTime);
			return file_put_contents($filename, $cacheTime.json_encode($value));//第二个参数只能为字符串	
		}

		//value=='',获取缓存
		if(!is_file($filename)){
			return false;

		}else{
			$contents=file_get_contents($filename);
			$cacheTime=(int)substr($contents, 0,11);
			$value=substr($contents, 11);
			if (($cacheTime!=0)&&($cacheTime+filemtime($filename))<time()) {
				unlink($filename);
				return false;
			}
			return json_decode($value);
			//$value= json_decode(file_get_contents($filename),true);
		}
	}

}

$file=new File();
$file->cacheData('name','zzz',123);
$file->cacheData('name');