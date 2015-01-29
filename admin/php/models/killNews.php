<?php
    if(isset($_GET['killnews'])){
		if(!$mysqli->query('delete from `news` where `id`='.$_GET{'killnews'}))
            die('Query error: killNews');
        header('Location: ?page=newslist');
    }
?>