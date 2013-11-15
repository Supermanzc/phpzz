<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 13-11-15
 * Time: 上午11:08
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
//设置默认的字符编码
header('content-type:text/html; charset=utf-8');
//filter_var()
$int = 123;
if(filter_var($int, FILTER_VALIDATE_INT)){
	echo 'this is valid';
}else{
	echo 'this is not valid';
}
echo "<br />-----------------------------<br />";
//filter_var_array();
$numbers = array('123456', 1,2,3,4,5,6,'7xx');
//不能过滤第一个string数据，他会把他转换为int类型，最后一个就为false，过滤掉
var_dump(filter_var_array($numbers, FILTER_VALIDATE_INT));
echo gettype($numbers[0]);
//filter_input
//var_dump(filter_input($int, FILTER_VALIDATE_INT)); 错误了
echo "<br />-----------------------------<br />";

/*
 * Validating和Sanitingzing 过滤器
 *
 * Validating 过滤器
 * 1.用于验证用户输入
 * 2.严格的格式规则（比如URL或E-Mail验证）
 * 3,返回成功预期的类型，否则返回false
 */
/**
 * Sanitizing 过滤器
 * 1.用于允许或禁止字符串中指定的字符
 * 2.无数据格式规则
 * 3.始终返回字符串
 */
echo "<br />";
$var = 200;
$int_options = array(
	"options"=>array(
		"min_range"=>0,
		"max_range"=>256
	)
);
if(filter_var($var, FILTER_VALIDATE_INT, $int_options)){
	echo 'Interger is valid and true';
}else{
	echo 'Interger is not valid and false';
}
echo "<br />-----------------------------<br />";

//通过表单验证输入input
//判断是否有input传递email，传递类型GET
echo "<br />";
if(!filter_has_var(INPUT_GET, "email")){
	echo 'input type does not exist';
}else{
	//验证email
	if(!filter_input(INPUT_GET, 'email', FILTER_VALIDATE_EMAIL)){
		echo 'E-Mail is not Valid';
	}else{
		echo "E-Mail is valid";
	}
}
echo "<br />-----------------------------<br />";
/*
 * 说明：这个例子说明
 * 1.filter_has_var 验证是否有通过GET方式传过来的名为email变量
 * 2.通过filter_input 验证是否为Email有效地址
*/
echo "<br />-----------------------------<br />";

//下面验证通过POST验证是否为有效的URL地址
if(!filter_has_var(INPUT_POST, 'url')){
	echo 'input type does not exist';
}else{
	if(!filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL)){
		echo 'Url is not valid';
	}else{
		//净化url地址
		$url = filter_input(INPUT_POST, 'url', FILTER_SANITIZE_URL);
		echo $url;
		echo '<br />';
		echo 'Url is valid';
	}
}
echo "<form action='#' method='post'><input type='text' name='url'/> <button type='submit'>提交</button></form>";
echo "<br />-----------------------------<br />";

/**
 * filter_input_array的使用
 */

$filters = array(
	'name'=>array(
		'filter'=>FILTER_SANITIZE_STRING,
	),
	'email'=>array(
		'filter'=>FILTER_VALIDATE_EMAIL,
		'options'=>array(
			"min_range"=>0,
			"max_range"=>256
		)
	),
	'url'=>array(
		'filter'=>FILTER_VALIDATE_URL
	),
	'age'=>array(
		'filter'=>FILTER_VALIDATE_INT,
		'options'=>array(
			'min_range'=>1,
			'max_range'=>120
		)
	),
);
$result = filter_input_array(INPUT_POST, $filters);
print_r($result);
echo "<br />-----------------------------<br />";