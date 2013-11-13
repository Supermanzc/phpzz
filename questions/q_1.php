<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 13-11-13
 * Time: 下午2:58
 */
header("Content-type: text/html; charset=utf-8");
$string = "April 15, 2003";
$pattern = "/(\w+) (\d+), (\d+)/i";
$replacement = "\${1}1,\$3";
print preg_replace($pattern, $replacement, $string) . '<br />';
$d = dir(dirname(__FILE__));
print_r($d);