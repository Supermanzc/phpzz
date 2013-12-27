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
sort($arr);
var_dump($arr);
// var_dump($arr);


require('../components/ReplaceHtml.php');

$data = "<div style=font-size: 18px; widows: 2; font-family: 微软雅黑; orphans: 2;><div style=font-size: 12px;><span style=font-size: 18px;>&nbsp; &nbsp; &nbsp;臻识事后分析系统是一个用于监控视频快速回查的系统。主要包括视频检索，视频浓缩等功能，其中视频检索是应用最广的系统。随着当前视频监控系统的广泛使用，产生海量的监控视频，靠人工回查监控视频效率低，而且容易漏掉重要目标。事后分析系统正是为了解决这个问题。使用智能视频分析技术，可以快速回查视频录像，准确搜索目标。</span></div><div style=font-size: 12px;><span style=font-size: 18px;></span><br />&nbsp;</div></div><div style=font-size: 18px; widows: 2; font-family: 微软雅黑; orphans: 2;><div><span style=font-family:黑体;font-size:24px;><strong>臻识智能事后分析系统，支持以下功能（<a href=http://vzenith.com/files_download/VZAnalyzeClient_2013-02-22(1).rar style=color: rgb(51, 51, 51); font-weight: normal; font-size: 18px; font-family: 微软雅黑; cursor: pointer;><span style=color:#0066cc;>点击免费下载</span></a>)</strong></span></div><div>&nbsp;</div><div><div style=font-size: 12px;><div style=font-size: 18px;>&nbsp;&nbsp;&nbsp;&nbsp; 1.视频查看：基本的视频查看，可查看检测结果。</div><div style=font-size: 18px;>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2.目标检索：设定规则及搜索目标界面。&nbsp;</div><div style=font-size: 18px;>&nbsp;&nbsp;&nbsp;&nbsp; 3.浓缩查看：播放浓缩视频界面</div><div style=font-size: 18px;>&nbsp;</div><div style=font-size: 18px;><span style=font-size:16px;>界面概览：</span></div><div style=font-size: 18px;>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img border=0 src=http://vzenith.com/jc_m/ewebeditor2007/UploadFile/2013313153455851.jpg width=460 height=337 style=width: 460px; height: 334px; alt= /></div></div></div></div>";

$str = ReplaceHtml::replace($data);

echo $str;
echo '<br />';

$str2 = strip_tags($data);
echo $str2;

echo $str2;

