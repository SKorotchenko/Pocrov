<?php
// Constants
include '../const.php';

// connection start
$mysqli = new mysqli($SITE_CONST['sql_host'], $SITE_CONST['user'], $SITE_CONST['pass'], $SITE_CONST['db']);
if($mysqli->connect_error)
    die('Connection Error (mainPassChange) '.$mysqli->connect_errno.': '.$mysqli->connect_error);
$mysqli->query('SET NAMES "utf8"');
$mysqli->set_charset('utf-8');

//$_POST['mContent'] = $mysqli->escape_string($_POST['mContent']);

// добавляем материал
if(!isset($_POST['materialID'])){
    $q = '
		insert into `photos` (`slides`)
		values("'.$_POST['materialImg'].'");
		';
    if(!$result = $mysqli->query($q))
        die('Query error: changeGallery insert');
// обновляем материал
} else {
    $q = '
		update `photos` set
			`slides` = "'.$_POST['materialImg'].'"
		where
			`id` = '.$_POST['materialID'];
    if(!$result = $mysqli->query($q))
        die('Query error: changeGallery update');
}

// connection close
$mysqli->close();
header('Location: ../../?page=gallerylist');
?>