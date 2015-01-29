<?php

// enable errors logs
	error_reporting(E_ALL);
	ini_set('display_errors', 1);

// connection start
	$mysqli = new mysqli($SITE_CONST['sql_host'], $SITE_CONST['user'], $SITE_CONST['pass'], $SITE_CONST['db']);
	if($mysqli->connect_error)
		die('Connection Error (php/newsList.php) '.$mysqli->connect_errno.': '.$mysqli->connect_error);
	$mysqli->query('SET NAMES "utf8"');
	$mysqli->set_charset('utf-8');

// Получаем материалы
	if($result = $mysqli->query('select * from `news` order by `date` desc')){
		$list = array();
		$i = 0;
		while($line = $result->Fetch_row())
			$list[$i++] = $line;
	} else
		die('Query error: news');

// connection end
	$mysqli->close();
?>