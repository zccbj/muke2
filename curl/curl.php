<?php
//php -f
// $curl=curl_init("http://www.baidu.com");
// curl_exec($curl);
// curl_close($curl);

// $curlobj=curl_init();
// curl_setopt($curlobj,CURLOPT_URL,"http://www.baidu.com");//设置网页uurl
// curl_setopt($curlobj,CURLOPT_RETURNTRANSFER,true);//执行之后不直接打印
// $output=curl_exec($curlobj);
// curl_close($curlobj);
// echo str_replace("百度","屌丝",$output);

 // $data='theCityName=北京';
 // $curlobj=curl_init();
 // curl_setopt($curlobj,CURLOPT_URL,"http://www.webxml.com.cn/WebServices/WeatherWebService.asmx/getWeatherbyCityName");
 // curl_setopt($curlobj,CURLOPT_RETURNTRANSFER,1);
 // curl_setopt($curlobj,CURLOPT_POST,1);
 // curl_setopt($curlobj,CURLOPT_POSTFIELDS,$data);
 // curl_setopt($curlobj,CURLOPT_HTTPHEADER,array("application/x-www-form-urlencoded; charset=utf-8", "Content-length: ".strlen($data)));
 // $rtn=curl_exec($curlobj);
 // if(!curl_errno($curlobj)){
 // 	echo $rtn;

 // }else{
 // 	echo 'Curl error'.curl_errno($curlobj);
 // }
 // curl_close($curlobj);

//用cURL登陆慕课网并下载个人空间页面
//实例描述：登录慕课网并下载个人空间页面
// $data='username=lonelysoul178@163.com&password=yang1jp78&remember=1';//remember=1(记住密码)
// $curlobj = curl_init();
// curl_setopt($curlobj, CURLOPT_URL, "http://www.imooc.com/user/login");// 设置访问网页的URL
// curl_setopt($curlobj, CURLOPT_RETURNTRANSFER, true);// 执行之后不直接打印出来
// // Cookie相关设置，这部分设置需要在所有会话开始之前设置
// date_default_timezone_set('PRC');// 使用Cookie时，必须先设置时区
// curl_setopt($curlobj, CURLOPT_COOKIESESSION, TRUE); 
// curl_setopt($curlobj, CURLOPT_HEADER, 0); //启用时会将头文件的信息作为数据流输出。
// curl_setopt($curlobj, CURLOPT_FOLLOWLOCATION, 1); // 这样能够让cURL支持页面链接跳转
// curl_setopt($curlobj, CURLOPT_COOKIEFILE, 'cookiefile');
// curl_setopt($curlobj, CURLOPT_COOKIEJAR, 'cookiefile');
// curl_setopt($curlobj, CURLOPT_COOKIE, session_name() . '=' . session_id());
// curl_setopt($curlobj, CURLOPT_POST, 1);  
// curl_setopt($curlobj, CURLOPT_POSTFIELDS, $data);  
// curl_setopt($curlobj, CURLOPT_HTTPHEADER, array("application/x-www-form-urlencoded; charset=utf-8", "Content-length: ".strlen($data)));//输入
// curl_exec($curlobj);	// 执行


// curl_setopt($curlobj, CURLOPT_URL, "http://www.imooc.com/space/index");
// curl_setopt($curlobj, CURLOPT_POST, 0);  
// curl_setopt($curlobj, CURLOPT_HTTPHEADER, array("Content-type: text/xml"
// )); //一个用来设置HTTP头字段的数组。使用如下的形式的数组进行设置： array('Content-type: text/plain', 'Content-length: 100')
// $output=curl_exec($curlobj);// 执行
// curl_close($curlobj);// 关闭cURL
// file_put_contents('1.html', $output);

/**
 * 实例描述：从FTP服务器下载一个文件到本地
 */
// $curlobj = curl_init();	
// curl_setopt($curlobj, CURLOPT_URL, "ftp://192.168.1.100/downloaddemo.txt");  
// curl_setopt($curlobj, CURLOPT_HEADER, 0); 
// curl_setopt($curlobj, CURLOPT_RETURNTRANSFER, 1);  
// curl_setopt($curlobj, CURLOPT_TIMEOUT, 300); // times out after 300s
// curl_setopt($curlobj, CURLOPT_USERPWD, "peter.zhou:123456");//FTP用户名：密码
// // Sets up the output file
// $outfile = fopen('dest.txt', 'wb');//保存到本地的文件名
// curl_setopt($curlobj, CURLOPT_FILE, $outfile);

// $rtn = curl_exec($curlobj);  
// fclose($outfile); 
// if(!curl_errno($curlobj)){
// 	// $info = curl_getinfo($curlobj); 
// 	// print_r($info);
// 	echo "RETURN: " . $rtn;  
// } else {
//   echo 'Curl error: ' . curl_error($curlobj);
// }
// curl_close($curlobj);



// /**
//  * 实例描述：把本地文件上传到FTP服务器上
//  */
// $curlobj = curl_init();	
// $localfile = 'ftp01.php';
// $fp = fopen($localfile, 'r');

// curl_setopt($curlobj, CURLOPT_URL, "ftp://192.168.1.100/ftp01_uploaded.php");  
// curl_setopt($curlobj, CURLOPT_HEADER, 0); 
// curl_setopt($curlobj, CURLOPT_RETURNTRANSFER, 1);  
// curl_setopt($curlobj, CURLOPT_TIMEOUT, 300); // times out after 300s
// curl_setopt($curlobj, CURLOPT_USERPWD, "peter.zhou:123456");//FTP用户名：密码

// curl_setopt($curlobj, CURLOPT_UPLOAD, 1);
// curl_setopt($curlobj, CURLOPT_INFILE, $fp);
// curl_setopt($curlobj, CURLOPT_INFILESIZE, filesize($localfile));
// $rtn = curl_exec($curlobj);  
// fclose($fp); 
// if(!curl_errno($curlobj)){
// 	echo "Uploaded successfully.";  
// } else {
//   echo 'Curl error: ' . curl_error($curlobj);
// }
// curl_close($curlobj);
  

/**
 * 实例描述：下载网络上面的一个HTTPS的资源
 */
// $curlobj = curl_init();		// 初始化
// curl_setopt($curlobj, CURLOPT_URL, "https://ajax.aspnetcdn.com/ajax/jquery.validate/1.12.0/jquery.validate.js");		// 设置访问网页的URL
// curl_setopt($curlobj, CURLOPT_RETURNTRANSFER, true);		// 执行之后不直接打印出来

// // 设置HTTPS支持
// date_default_timezone_set('PRC'); // 使用Cookie时，必须先设置时区
// curl_setopt($curlobj, CURLOPT_SSL_VERIFYPEER, 0); // 对认证证书来源的检查从证书中检查SSL加密算法是否存在
// curl_setopt($curlobj, CURLOPT_SSL_VERIFYHOST, 2); // 

// $output=curl_exec($curlobj);	// 执行
// curl_close($curlobj);		// 关闭cURL
// echo $output;

