<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 13-11-13
 * Time: 下午2:56
 */

$arr = array('a'=>5, 'b'=>7, 'C'=>3, 'D'=>2);
//unset($arr[1]);
krsort($arr);
var_dump($arr);
