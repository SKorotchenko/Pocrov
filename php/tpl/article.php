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

include 'admin/php/const.php';
include 'php/models/news.php';

?>
<article class="article">
    <div class="content">
        <a class="back-button" href="?page=news">
            <?php if ($_COOKIE['lang']=='ua'){
                print '
                    <img class="top" src="images/UKR/turn_back_ukr.png">
                    <img class="back" src="images/UKR/turn_back_ukr_gold.png">
            ';}
            elseif ($_COOKIE['lang']=='en'){
                print '
                    <img class="top" src="images/ENG/turn_back_eng.png">
                    <img class="back" src="images/ENG/turn_back_eng_gold.png">
            '; }
            else {
                print '
                    <img class="top" src="images/Turn_back.png">
                    <img class="back" src="images/Turn_back_golden.png">
        ';} ?>
        </a>
        <h2><?php if ($_COOKIE['lang']=='ua'){print $list[0][6];} elseif ($_COOKIE['lang']=='en'){print $list[0][9]; } else {print $list[0][2];}?></h2>
        <span class="date"><?= $list[0][3]?></span>
        <div>
            <?php if ($_COOKIE['lang']=='ua'){print $list[0][8];} elseif ($_COOKIE['lang']=='en'){print $list[0][11]; } else {print $list[0][5];}?>
        </div>
    </div>
</article>