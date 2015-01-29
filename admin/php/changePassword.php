<?
	include '../../php/const.php';

mysql_connect($VIC_CONST['sql_host'],$VIC_CONST['user'],$VIC_CONST['pass']);
mysql_select_db($VIC_CONST['db']);
mysql_set_charset('utf8');

$q = mysql_query('select * from `admin`');
$aMD5 = mysql_result($q, 0, 2);

$err = 0;
$status = array();
if($aMD5 != md5(md5($_POST['oldPass']))){
	array_push($status, array('err','oldPass'));
	$err++;
}
if($_POST['changePass'] != $_POST['submitPass']){
	array_push($status, array('err','submitPass'));
	$err++;
}

if($err == 0){
	array_push($status, array('apl','submitPass'));
	mysql_query('update `admin` set `md5`="'.md5(md5($_POST['submitPass'])).'" where `id`=1');
	setCookie('autorized',md5(md5($_POST['submitPass'])),time()+60*60*2,'/');
}
print json_encode($status);

mysql_close();
?>