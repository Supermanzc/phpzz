<?php
	$arr = array('site', 'list', 'controller');
	end($arr);
	print(current($arr));
	echo '<br /> ';

	$str = 'zhang,fang,li,zhe';
	$str_arr = explode(',', $str);
	echo $str . '<br />';
	var_dump($str_arr);

	$arr_str = implode('_', $str_arr);
	echo '<br />' . $arr_str . '<br />';

	$people = array("Peter"=>'p', "Joe"=>'j', "Glenn"=>'G', "Cleveland"=>'c');

	echo current($people) . "<br />";
	echo next($people) . "<br />";
	echo reset($people) . '<br />';

	//for
	for(reset($people); $key = key($people); next($people)){
		echo "$key => $people[$key] <br />";
	}

	
?>