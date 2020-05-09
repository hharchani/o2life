<?php
session_start();
$mysql_host = 'mysql12.000webhost.com';
$mysql_user = 'a8062100_badri';
$mysql_pass = 'badri123456';
$mysql_db = 'a8062100_o2life';

if(!mysql_connect($mysql_host,$mysql_user,$mysql_pass)||!mysql_select_db($mysql_db)){
	die(mysql_error());
}
?>