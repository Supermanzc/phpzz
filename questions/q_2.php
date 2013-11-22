<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 13-11-14
 * Time: 下午2:39
 */
//1.srand 播下随机发生器种子 php4.2之后已近不适用了, 都是自动发生
//srand();

//2.microtime()
//echo microtime();


//3.file
//$file = file('q_1.php');
//echo gettype($file); /// array;
//var_dump($file); //按照行读取文件的数据，返回数组
//var_dump(file_get_contents('q_1.php'));

//4.$_SERVER['REQUEST_TIME']
//echo date('Y-m-d H:i:s', $_SERVER['REQUEST_TIME']); //当前系统unix时间戳

//考察date strtotime
echo date('Y-m-d H:i:s', strtotime('-1 day')) . '<br />';
echo date('Y-m-d H:i:s', strtotime('1 day')) . '<br />';
echo date('Y-m-d H:i:s', strtotime('-7 day')) . '<br />';
echo date('Y-m-d H:i:s', strtotime('7 day')) . '<br />';

//考察unset
echo '---------------------------' . '<br />';
$a = 'www.baidu.com';
$b = &$a;
unset($b); ///直接干掉$b，跟$a无任何关联了
$b = 'www.csdn.net'; //重新定义$b
echo $a . '<br />';
echo $b . '<br />';

//explore
$a = 'a';
$b = 'b';
echo 'old: a = ' . $a . ' b = ' . $b . '<br />';
$b = $a . '#' .$b;
$b = explode('#', $b); //转换为数组
$a = $b[1];
$b = $b[0];
echo 'news: a = ' . $a . ' b = ' . $b . '<br />';


//打印客户端ip和服务端ip
echo $_SERVER['REMOTE_ADDR'] . '<br />';
echo gethostbyname('http://www.phpernote.com') . '<br />';

/**
 * 获取客户端IP地址
 * @return string
 */ 
function get_client_ip() { 
    if(getenv('HTTP_CLIENT_IP')){ 
        $client_ip = getenv('HTTP_CLIENT_IP'); 
    } elseif(getenv('HTTP_X_FORWARDED_FOR')) { 
        $client_ip = getenv('HTTP_X_FORWARDED_FOR'); 
    } elseif(getenv('REMOTE_ADDR')) {
        $client_ip = getenv('REMOTE_ADDR'); 
    } else {
        $client_ip = $_SERVER['REMOTE_ADDR'];
    } 
    return $client_ip; 
}   
/**
* 获取服务器端IP地址
 * @return string
 */ 
function get_server_ip() { 
    if (isset($_SERVER)) { 
        if($_SERVER['SERVER_ADDR']) {
            $server_ip = $_SERVER['SERVER_ADDR']; 
        } else { 
            $server_ip = $_SERVER['LOCAL_ADDR']; 
        } 
    } else { 
        $server_ip = getenv('SERVER_ADDR');
    } 
    return $server_ip; 
}


echo get_client_ip() . '<br />';
echo get_server_ip() . '<br />';