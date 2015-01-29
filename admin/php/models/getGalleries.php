<?php
/*------------------------------/
/ TABLE photos
/ length: 7
/ [0] id:				int[A_I]
/ [1] name:				varchar[50]
/ [2] logo:			    varchar[1024]
/ [3] slides:			text
/------------------------------*/


// Получаем материалы
    if($_GET['page'] == 'gallerylist' || $_GET['page'] == 'gallery'){
        if($result = $mysqli->query('select * from `photos` order by `id`')){
            $list = array();
            $i = 0;
            while($line = $result->Fetch_row())
                $list[$i++] = $line;
        } else
            die('Query error: galleryList');
    }
    if($_GET['page'] == 'gallery')
        if(isset($_GET['id'])){
            for($current = 0; $current < count($list); $current++){
                if($_GET['id']*1 == $list[$current][0])
                    break;
            }
            $src = explode(',',$list[$current][3]);
        }

?>