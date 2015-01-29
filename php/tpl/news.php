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
include 'php/models/newsList.php';

?>
<article class="news">
<?php
    for($i=0; $i<count($list); $i++)
        if($i+1  & 1) { ?>
            <article class="left-img">
                <img class="article-image" src="<?= $list[$i][1]?>">
                <div class="news-right">
                    <h2><?php if ($_COOKIE['lang']=='ua'){print $list[$i][6];} elseif ($_COOKIE['lang']=='en'){print $list[$i][9]; } else {print $list[$i][2];}?></h2>
                    <span class="date"><?= $list[$i][3]?></span>
                    <div class="descript">
                        <?php if ($_COOKIE['lang']=='ua'){print $list[$i][7];} elseif ($_COOKIE['lang']=='en'){print $list[$i][10]; } else {print $list[$i][4];}?>
                    </div>
                    <a href="?page=article&id=<?= $list[$i][0] ?>">
                        <?php if ($_COOKIE['lang']=='ua'){
                            print '
                            <img class="top" src="images/UKR/More_info_ukr.png">
                            <img class="back" src="images/UKR/More_info_ukr_gold.png">
                        ';}
                        elseif ($_COOKIE['lang']=='en'){
                            print '
                            <img class="top" src="images/ENG/more_info_eng.png">
                            <img class="back" src="images/ENG/more_info_eng_gold.png">
                        '; }
                        else {
                            print '
                            <img class="top" src="images/More_info.png">
                            <img class="back" src="images/More_info_golden.png">
                        ';} ?>
                    </a>
                </div>
                <div class="clear"></div>
            </article>
    <?php }
    else { ?>
            <article class="right-img">
                <img class="article-image" src="<?= $list[$i][1]?>">
                <div class="news-left">
                <h2><?php if ($_COOKIE['lang']=='ua'){print $list[$i][6];} elseif ($_COOKIE['lang']=='en'){print $list[$i][9]; } else {print $list[$i][2];}?></h2>
                <span class="date"><?= $list[$i][3]?></span>
                <div class="descript">
                    <?php if ($_COOKIE['lang']=='ua'){print $list[$i][7];} elseif ($_COOKIE['lang']=='en'){print $list[$i][10]; } else {print $list[$i][4];}?>
                </div>
                <a href="?page=article&id=<?= $list[$i][0] ?>">
                    <?php if ($_COOKIE['lang']=='ua'){
                        print '
                            <img class="top" src="images/UKR/More_info_ukr.png">
                            <img class="back" src="images/UKR/More_info_ukr_gold.png">
                        ';}
                    elseif ($_COOKIE['lang']=='en'){
                        print '
                            <img class="top" src="images/ENG/more_info_eng.png">
                            <img class="back" src="images/ENG/more_info_eng_gold.png">
                        '; }
                    else {
                        print '
                            <img class="top" src="images/More_info.png">
                            <img class="back" src="images/More_info_golden.png">
                        ';} ?>
                </a>
                </div>
                <div class="clear"></div>
            </article>
    <?php  } ?>
</article>
