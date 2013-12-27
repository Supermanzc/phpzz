<?php
include("simple_html_dom.php");
header('content-type:text/html; charset=utf-8');
$html = file_get_html('file:///F:/工资条/广州/职位工资.htm');

foreach ($html->find('ul[id=job-list]') as $element){
    foreach ($element->find('li') as $h3){
        foreach ($h3->find('a') as $a){
        	foreach ($a as $key => $span) {
        		echo $span->innertext.'&nbsp&nbsp&nbsp&nbsp';
        	}
        }
    }
}
?>