<?php
	header("Content-type: text/html; charset=utf-8");
	//连库、择库、设定字符集
	mysql_connect('localhost', 'root', 'root');
	mysql_select_db('Student');
	mysql_query('set names utf8');
	$query = mysql_query('select * from Class');
//	$arr = mysql_fetch_row($query);
//	echo $arr;
	echo mysql_result($query, 2, 5);//结果集的地址   行号，从0开始  字段名，偏移量从0开始
?>