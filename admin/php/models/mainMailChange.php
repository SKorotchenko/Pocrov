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
	die('Connection Error (mainPassChange) '.$mysqli->connect_errno.': '.$mysqli->connect_error);
$mysqli->query('SET NAMES "utf8"');
$mysqli->set_charset('utf-8');

// get admin data
if($result = $mysqli->query('select * from `admin`')){
	$status = array();
	$line = $result->Fetch_row();
	$aMD5 = $line[1];
	$email = $line[2];

	if($aMD5 != md5(md5($_POST['oldLogin'].$_POST['oldPass'])))
		array_push($status, array('err','oldPass'));
	else {
		array_push($status, array('apl','submitPass'));
		if($mysqli->query('update `admin` set `email`="'.$_POST['newMail'].'"')){
			$content = '
				<p>Изменен email администратора сайта '.$_SERVER['HTTP_HOST'].':</p>
				<p>Новый email: &nbsp;&nbsp;&nbsp;'.$_POST['newMail'].'</p>
				<br>
				<p>Сообщение отправлено на оба email-адреса (старый и новый).</p>
			';
			if(!sendMail('admin <'.$email.'>', 'Изменен email администратора', $content, 'bb <'.$_SERVER['HTTP_HOST'].'>'))
				die('Push email error: mainMailChange 1');
			if(!sendMail('admin <'.$_POST['newMail'].'>', 'Изменен email администратора', $content, 'bb <'.$_SERVER['HTTP_HOST'].'>'))
				die('Push email error: mainMailChange 2');
		} else
			die('Update error: mainMailChange');
	}

	print json_encode($status);


} else
	die('Query error: mainMailChange');

// connection close
$mysqli->close(); 
?>