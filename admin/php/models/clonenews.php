<?php
/*------------------------------/
/ TABLE portfolio
/ length: 7
/ [0] id:				int[A_I]
/ [1] timestamp:		int
/ [2] name:				varchar[512]
/ [3] content:			varchar[1024]
/ [4] column:			tinyint
/ [5] preview:			varchar[100]
/ [6] image:			varchar[100]
/------------------------------*/


if(isset($_GET['clone'])){
	// копируем статью
	if($_GET['page'] == 'newslist'){
		if(!$mysqli->query('insert into `news`  (`img`,`name`,`date`,`prew`,`content`)
							select `img`,`name`,`date`,`prew`,`content` from `news`
							where `id`='.$_GET['clone']))
			die('Query error: cloneNews');
		header('Location: ?page=newslist');
	}
}

?>