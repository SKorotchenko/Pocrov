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
<article class="album">
    <!--<a class="back-button" href="?page=gallerylist">
        <img class="top" src="<?= $SITE_CONST['base_path'] ?>/images/Turn_back.png">
        <img class="back" src="<?= $SITE_CONST['base_path'] ?>/images/Turn_back_golden.png">
    </a>-->
    <h1><?= $list[$current][1] ?></h1>
    <form method="post" action="php/models/changeGalleryBase.php" id="addGalleryForm">
        <input type="hidden" id="changePage" value="<?= $_GET['page'] ?>">
        <?php if(isset($_GET['id'])) { ?>
            <input type="hidden" name="materialID" value="<?= $_GET['id'] ?>">
        <?php } ?>
        <input type="hidden" id="imgSrc" name="materialImg"<?php if(isset($_GET['id'])) print 'value="'.$list[$current][3].'"' ?>>
        <ul class="album-list">
            <?php for ($i=0;$i<count($src);$i++) {
                if($list[$current][3] == '')
                    break?>
            <li class="photo">
                <a data-lightbox="album1">
                    <div class="to-big-img">
                        <img src="<?php if(isset($_GET['id'])) print $SITE_CONST['base_path'].$src[$i]?>">
                    </div>
                </a>
            </li>
            <?php } ?>
            <li class="add-image">
                <a class="fileManagerOpen">
                    <div class="to-big-img">
                        <div class="add-block"></div>
                    </div>
                </a>
            </li>
        </ul>
        <input type="submit" value="Отправить">
    </form>
    <article class="edit">
        <div class="popShadow">
            <div class="popup">
                <span class="closePopup" title="Закрыть окно">x</span>
                <div class="popTitle">Выбор картинки <span>(/images/)</span></div>
                <ul>
                    <?php
                    if ($_GET['id'] == 25){
                        $base = '../images/gallery/1/';
                    } elseif ($_GET['id'] == 26){
                        $base = '../images/gallery/2/';
                    }  elseif ($_GET['id'] == 27){
                        $base = '../images/gallery/3/';
                    } elseif ($_GET['id'] == 28){
                        $base = '../images/gallery/4/';
                    }
                    //$base = '../images/';
                    $scan = scandir($base);
                    for($i=2; $i<count($scan); $i++) { ?>
                        <li class="selectImgURLBlock">
                            <img <?php if(strripos($scan[$i],'.') !== false) print 'src="'.$base.$scan[$i].'"'; else print 'src="style/img/folder.jpg" class="folder"';?> alt="preview-gallery">
                            <div class="imgsFolderFileName"><?= $scan[$i] ?></div>
                        </li>
                    <?php }
                    ?>
                </ul>
            </div>
        </div>
    </article>
</article>
<!--<script type='text/javascript'>
    QueryLoader.init();
</script>-->


