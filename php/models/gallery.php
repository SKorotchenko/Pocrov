<?php
/*------------------------------/
/ TABLE photos
/ length: 7
/ [0] id:				int[A_I]
/ [1] name:				varchar[50]
/ [2] logo:			    varchar[1024]
/ [3] slides:			text
/------------------------------*/

// enable errors logs
error_reporting(E_ALL);
ini_set('display_errors', 1);

// connection start
$mysqli = new mysqli($SITE_CONST['sql_host'], $SITE_CONST['user'], $SITE_CONST['pass'], $SITE_CONST['db']);
if($mysqli->connect_error)
    die('Connection Error (models/all) '.$mysqli->connect_errno.': '.$mysqli->connect_error);
$mysqli->query('SET NAMES "utf8"');
$mysqli->set_charset('utf-8');

// Получаем материалы
if($result = $mysqli->query('select * from `photos` order by `id`')){
    $list = array();
    $i = 0;
    while($line = $result->Fetch_row())
        $list[$i++] = $line;
} else
    die('Query error: galleryList');

if(isset($_GET['id'])){
    for($current = 0; $current < count($list); $current++){
        if($_GET['id']*1 == $list[$current][0])
            break;
    }
    $src = explode(',',$list[$current][3]);
}

// connection end
$mysqli->close();