<?php 

	$_SERVER['host'] = 'localhost';
	$_SERVER['users'] = 'root';
	$_SERVER['passwd'] = '';
	$_SERVER['database'] = 'users';

	$query = mysql_connect($_SERVER['host'],$_SERVER['users'],$_SERVER['passwd']);
	mysql_select_db($_SERVER['database']);
	mysql_query("SET NAMES 'UTF8'");


?>