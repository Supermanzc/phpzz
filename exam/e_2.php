<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 13-11-19
 * Time: 上午9:33
 */
$connect = mysql_connect('localhost:3306', 'root', '123456')or die('数据库连接失败:'.mysql_error());

//echo md5('1235466');
echo strlen(md5('1235466'));
echo md5('admin');