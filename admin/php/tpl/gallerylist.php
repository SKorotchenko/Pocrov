<?php
/*------------------------------/
/ TABLE photos
/ length: 7
/ [0] id:				int[A_I]
/ [1] name:				varchar[50]
/ [2] logo:			    varchar[1024]
/ [3] slides:			text
/------------------------------*/
?>

<article class="gallery">
    <ul class="gallery-list">
        <?php for($i=0;$i<count($list);$i++) { ?>
        <li>
            <a href="?page=gallery&id=<?= $list[$i][0] ?>">
                <p><?= $list[$i][1] ?></p><!--название галереи-->
                <div class="to-big-img">
                    <img src="<?= $SITE_CONST['base_path'].$list[$i][2] ?>">
                </div>
            </a>
        </li>
        <?php } ?>
    </ul>
</article>
