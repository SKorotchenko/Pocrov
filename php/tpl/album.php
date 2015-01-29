<?php

include 'admin/php/const.php';
include 'php/models/gallery.php';

?>

<article class="album">
    <a class="back-button" href="?page=gallery">
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
    <ul class="album-list">
        <?php for ($i=0;$i<count($src);$i++) {?>
        <li>
            <a href="<?php if(isset($_GET['id'])) print $src[$i]?>" data-lightbox="album1">
                <div class="to-big-img">
                    <img src="<?php if(isset($_GET['id'])) print $src[$i]?>">
                </div>
            </a>
        </li>
        <?php } ?>
    </ul>
</article>
<script type='text/javascript'>
    QueryLoader.init();
</script>