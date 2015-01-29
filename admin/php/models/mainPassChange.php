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
	$err = false;
	$status = array();
	$line = $result->Fetch_row();
	$aMD5 = $line[1];
	$email = $line[2];

	if($aMD5 != md5(md5($_POST['oldLogin'].$_POST['oldPass']))){
		array_push($status, array('err','oldPass'));
		$err = true;
	}
	if($_POST['changePass'] != $_POST['submitPass']){
		array_push($status, array('err','submitPass'));
		$err = true;
	}
	if(!$err){
		array_push($status, array('apl','submitPass'));
		if($mysqli->query('update `admin` set `hash`="'.md5(md5($_POST['newLogin'].$_POST['submitPass'])).'"')){
			$content = '
				<p>Новые данные для входа в админпанель '.$_SERVER['HTTP_HOST'].':</p>
				<p>Новый логин: &nbsp;&nbsp;&nbsp;'.$_POST['newLogin'].'</p>
				<p>Новый пароль: &nbsp;&nbsp;'.$_POST['changePass'].'</p>
			';
			setCookie('autorized', md5(md5($_POST['newLogin'].$_POST['submitPass'])), time()+60*60*2, '/');
			if(!sendMail('admin <'.$email.'>', 'Изменены параметоры входа', $content, 'bb <'.$_SERVER['HTTP_HOST'].'>'))
				die('Push email error: mainPassChange');
		} else
			die('Update error: mainPassChange');
	}

	print json_encode($status);


} else
	die('Query error: mainPassChange');

// connection close
$mysqli->close(); 
?>