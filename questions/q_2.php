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

