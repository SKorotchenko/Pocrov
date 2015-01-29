<?php
/*------------------------------/
/ TABLE admin
/ length: 3
/ [0] id:			int[A_I]
/ [1] hash:			varchar[33]
/ [2] email:		varchar[100]
/------------------------------*/



// get admin data
if($_GET['page'] == 'restore'){
	if($result = $mysqli->query('select * from `admin`')){
		$email = $result->Fetch_row();
		$email = $email[2];
		$login = 'admin';
		$pass = time();
		if($mysqli->query('update `admin` set `hash`="'.md5(md5($login.$pass)).'"')){
			$content = '
				<p>Новые данные для входа в админпанель '.$_SERVER['HTTP_HOST'].':</p>
				<p>Новый логин: &nbsp;&nbsp;&nbsp;'.$login.'</p>
				<p>Новый пароль: &nbsp;&nbsp;'.$pass.'</p>
				<p>В целях безопасности, измените данные администратора вручную.</p>
			';
			if(!sendMail('admin <'.$email.'>', 'Сброс параметоров входа', $content, 'bb <'.$_SERVER['HTTP_HOST'].'>'))
				die('Push email error: restore');
			header('Location: ./?message=restore');
		} else
			die('Update error: restore');
	} else
		die('Query error: restore');
} ?>