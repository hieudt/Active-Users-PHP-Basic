<?php 

	$ketnoi['host'] = '127.0.0.1';
	$ketnoi['username'] = 'root';
	$ketnoi['pass'] = '';
	$ketnoi['database'] = 'thietbithuvien';
	$conn = mysql_connect($ketnoi['host'],$ketnoi['username'],$ketnoi['pass']);

	if (!$conn) {
		die('Không thể kết nối database :'.mysql_error());
	}

	mysql_query("SET NAMES 'UTF8'");
	mysql_select_db($ketnoi['database']);
	
?>