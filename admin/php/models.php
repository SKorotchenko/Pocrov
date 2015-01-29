<?php
// enable errors logs
error_reporting(E_ALL);
ini_set('display_errors', 1);

// test $_GET['page']
if(!isset($_GET['page']))
	$_GET['page'] = 'main';

// connection start
$mysqli = new mysqli($SITE_CONST['sql_host'], $SITE_CONST['user'], $SITE_CONST['pass'], $SITE_CONST['db']);
if($mysqli->connect_error)
	die('Connection Error (models/all) '.$mysqli->connect_errno.': '.$mysqli->connect_error);
$mysqli->query('SET NAMES "utf8"');
$mysqli->set_charset('utf-8');

// test cookie and admin-md5			($_cookie[autorized] is there)
include 'models/loginCheck.php';
// restore admin data					($_GET[page] == 'restore')
include 'models/restore.php';
// get gallery list
include 'models/getGalleries.php';
// get news list
include 'models/getNews.php';
// clone news							($_GET[clone] is there)
include 'models/clonenews.php';
// delete news							($_GET[killnews] is there)
include 'models/killNews.php';


// connection end
$mysqli->close();
?>