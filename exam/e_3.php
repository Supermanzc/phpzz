<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 13-11-20
 * Time: 上午8:52
 */
/**
 * 获取中文和英文组合的长度
 */
//1.strlen()
$str_1 = 'abcd';
$str_2 = '你好吗成都';
$str_3 = 'abcd阿百川';

/**
 * 在utf8字符集编码下占3个字节.
 * 在gb2312,gbk字符编码下占2个字节.
 */
/*foreach($adminUsers as $key=>$val){
	if(!isset($val[$this->username]))
		$this->errorCode=self::ERROR_USERNAME_INVALID;
	elseif($val[$this->username]!==$this->password)
		$this->errorCode=self::ERROR_PASSWORD_INVALID;
	else{
		$this->errorCode=self::ERROR_NONE;
		$this->username =  $this->username
		break;
	}
}
return !$this->errorCode;*/


echo 'str_1=' . strlen($str_1) . '<br />'; //4
echo 'str_2=' . strlen($str_2) . '<br />'; //15
echo 'str_3=' . strlen($str_3) . '<br />'; //13

$str_4 = mb_convert_encoding($str_2, 'gbk', 'utf-8');
$str_5 = iconv('utf-8', 'gbk', $str_3);
echo 'str_4=' . strlen($str_4) . '<br />'; //10
echo 'str_5=' . strlen($str_5) . '<br />'; //10

echo 'str_1=' . ord($str_1) . '<br />'; //ord获取第一个字符的ASCII值
echo 'str_2=' . ord($str_2) . '<br />'; //utf-8
echo 'str_4=' . ord($str_4) . '<br />'; //gbk







