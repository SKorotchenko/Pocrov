<?php
// Получаем материалы
	if($_GET['page'] == 'newslist' || $_GET['page'] == 'news'){
        if($result = $mysqli->query('select * from `news` order by `id` desc')){
            $list = array();
            $i = 0;
            while($line = $result->Fetch_row())
                $list[$i++] = $line;
        } else
            die('Query error: newsList');
	}
if($_GET['page'] == 'news')
    if(isset($_GET['id']))
        for($current = 0; $current < count($list); $current++)
            if($_GET['id']*1 == $list[$current][0])
                break;
?>