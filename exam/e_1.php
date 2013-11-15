<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 13-11-13
 * Time: 下午2:56
 */
//过滤器
/*
 * 1.过滤服务器变量
 * 2.过滤表单输入数据
 * 3.过滤Cookies
 * 4.过滤数据库语句
 */

/*
 * 过滤变量用如下数据
 * 1.filter_var() 通过一个指定的过滤器来过滤单一的变量
 * 2.filter_var_array() 通过相同或不同的过滤器来过滤多个变量
 * 3.filter_input 获取输入的变量，并对它进行过滤
 * 4.filter_input_array 获取多个输入变量，并通过相同或不同的过滤器对它们尽心过滤
 */

//filter_var()
$int = 123;
if(filter_var($int, FILTER_VALIDATE_INT)){
	echo 'this is int';
}else{
	echo 'this is not int';
}