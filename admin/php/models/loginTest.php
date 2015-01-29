<?php
/*------------------------------/
/ TABLE admin
/ length: 3
/ [0] id:			int[A_I]
/ [1] hash:			varchar[33]
/ [2] email:		varchar[100]
/------------------------------*/


// Constants
include '../const.php';

// connection start
$mysqli = new mysqli($SITE_CONST['sql_host'], $SITE_CONST['user'], $SITE_CONST['pass'], $SITE_CONST['db']);
if($mysqli->connect_error)
	die('Connection Error (loginTest) '.$mysqli->connect_errno.': '.$mysqli->connect_error);
$mysqli->query('SET NAMES "utf8"');
$mysqli->set_charset('utf-8');

// get admin data
if($result = $mysqli->query('select * from `admin`')){
	$aMD5 = $result->Fetch_row();
	$aMD5 = $aMD5[1];
	if($aMD5 == md5(md5($_POST['login'].$_POST['pass']))){
		setCookie('autorized',$aMD5,time()+60*60*2,'/');
		header('Location: ../../');
	} else 
		header('Location: ../../?error=auth');
} else
	die('Query error: loginTest');

// connection close
$mysqli->close(); 
?>