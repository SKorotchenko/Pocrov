<?php
/*------------------------------/
/ TABLE news
/ length: 7
/ [0] id:				int[11]
/ [1] img:				varchar[100]
/ [2] name:			    varchar[100]
/ [3] date:			    varchar[10]
/ [4] prew:             text
/ [5] content:          mediumtext
/ [6] ua_name:          varchar[100]
/ [7] ua_prew:          text
/ [8] ua_content:       mediumtext
/ [9] en_name:          varchar[100]
/ [10] en_prew:         text
/ [11] en_content:      mediumtext
/------------------------------*/

// Constants
include '../const.php';

// connection start
$mysqli = new mysqli($SITE_CONST['sql_host'], $SITE_CONST['user'], $SITE_CONST['pass'], $SITE_CONST['db']);
if($mysqli->connect_error)
    die('Connection Error (mainPassChange) '.$mysqli->connect_errno.': '.$mysqli->connect_error);
$mysqli->query('SET NAMES "utf8"');
$mysqli->set_charset('utf-8');

//$_POST['materialContent']= str_replace (array('\'', '"', '`', '&nbsp;'), array('&prime;','&quot;','&acute;',' '), $_POST['materialContent']);
//$_POST['materialPrewContent'] = str_replace (array('\'', '"', '`', '&nbsp;'), array('&prime;','&quot;','&acute;',' '), $_POST['materialPrewContent']);
$_POST['materialImg'] = str_replace ('../', '', $_POST['materialImg']);

// добавляем материал
if(!isset($_POST['materialID'])){
    $q = '
		insert into `news` (
					`img`,`name`,`date`,`prew`,`content`,`ua_name`,`ua_prew`,`ua_content`,`en_name`,`en_prew`,`en_content`)
		values("'.$_POST['materialImg'].'", "'.$_POST['materialName'].'", "'.date("d.m.Y").'", "'.$_POST['materialPrewContent'].'", "'.$_POST['materialContent'].'", "'.$_POST['materialNameUA'].'", "'.$_POST['materialPrewContentUA'].'", "'.$_POST['materialContentUA'].'", "'.$_POST['materialNameEN'].'", "'.$_POST['materialPrewContentEN'].'", "'.$_POST['materialContentEN'].'");
		';
    if(!$result = $mysqli->query($q))
        die('Query error: newsChange insert');

// обновляем материал
} else {
    $q = '
		update `news` set
			`img` = "'.$_POST['materialImg'].'",
			`name` = "'.$_POST['materialName'].'",
			`date` = "'.date("d.m.Y").'",
			`prew` = "'.$_POST['materialPrewContent'].'",
			`content` = "'.$_POST['materialContent'].'",
            `ua_name` = "'.$_POST['materialNameUA'].'",
			`ua_prew` = "'.$_POST['materialPrewContentUA'].'",
			`ua_content` = "'.$_POST['materialContentUA'].'",
            `en_name` = "'.$_POST['materialNameEN'].'",
			`en_prew` = "'.$_POST['materialPrewContentEN'].'",
			`en_content` = "'.$_POST['materialContentEN'].'"
		where
			`id` = '.$_POST['materialID'];
    if(!$result = $mysqli->query($q))
        die('Query error: newsChange update');
}


// connection close
$mysqli->close();
header('Location: ../../?page=newslist');
?>