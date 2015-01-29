<?php
/*------------------------------/
/ TABLE admin
/ length: 3
/ [0] id:			int[A_I]
/ [1] hash:			varchar[33]
/ [2] email:		varchar[100]
/------------------------------*/


// get admin data
if(isset($_COOKIE['autorized']))
	if($result = $mysqli->query('select * from `admin`')){
		$aMD5 = $result->Fetch_row();
		$aMD5 = $aMD5[1];

		if($aMD5 != $_COOKIE['autorized']){
			setCookie('autorized','',0,'/');
			header('Location: ./');
		}
	} else
		die('Query error: loginCheck');
?>