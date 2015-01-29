<?
    // находим текущий материал
    if(!isset($_GET['new'])){
        for($i=0;$i<count($galleryMass);$i++){
            if($_GET['id'] == $galleryMass[$i][0])
                break;
        }
        $explImg = explode(',',$galleryMass[$i][4]);
    }
?>
<article class="gallery">
	<ul class="status">
    	<li style="display: none">Не выбрано изображение для материала</li>
        <li style="display: none">Не выбрана обложка для альбома</li>
    </ul>
	<h1>Редактирование материала</h1>
	<form method="post" action="php/changeGalleryBase.php" id="addGalleryForm">
        <? if(isset($_GET['id'])) { ?><input type="hidden" name="materialID" value="<?= $_GET['id'] ?>"><? } ?>
        <ul>
    		<li>Название галлереи:</li>
    	    <li><input type="text" name="materialName"<? if(!isset($_GET['new'])) { ?> value="<?= $galleryMass[$i][1] ?>"<? } ?> required></li>
            <li>Описание:</li>
            <li><input type="text" name="materialDescription"<? if(!isset($_GET['new'])) { ?> value="<?= $galleryMass[$i][2] ?>"<? } ?>></li>
            <li>Обложка:</li>
            <li class="galTitleImg">
                <div class="materialImg<? if(!isset($_GET['new'])) { ?> show<? } ?>">
                    <input type="hidden" id="imgTitleSrc" name="materialTitleImg"<? if(!isset($_GET['new'])) { ?> value="../<?= $galleryMass[$i][3] ?>"<? } ?>>
                    <img src="../<? if(!isset($_GET['new'])) print $galleryMass[$i][3]; ?>" alt="image">
                    <span class="materialImgKill gallery" title="Удалить изображение">x</span>
                </div>
                <a class="button" onClick="$('.popShadow').css('display','block').addClass('gallery');">Выбрать изображение</a>
            </li>
            <li>Фотографии:</li>
            <li>
            	<div class="imgConteiner">
                    <? if(!isset($_GET['new']))
                        for($j=0; $j<count($explImg); $j++) { ?>
                            <div class="materialImg showAll">
                                <img src="../<?= $explImg[$j] ?>" alt="image">
                                <span class="materialImgDel" title="Удалить изображение">x</span>
                            </div>
                        <? } ?>
                </div>
                <div>
                    <input type="hidden" id="imgSrc" name="materialImg"<? if(!isset($_GET['new'])) { ?> value="<?= $galleryMass[$i][4] ?>"<? } ?>>
                    <a class="button" onClick="$('.popShadow').css('display','block')">Выбрать фотографии</a>
                </div>
            </li>
            <li><input type="submit" value="Отправить"></li>
    	</ul>
    </form>
    <div class="popShadow">
    	<div class="popup">
        	<span class="closePopup" title="Закрыть окно" onClick="$('.popShadow').css('display','')">x</span>
        	<div class="popTitle">Выбор картинки <span>(/imgs/)</span></div>
            <ul>
            	<? $base = '../imgs/';
                $scan = scandir($base);
				for($i=2;$i<count($scan);$i++) { ?>
                	<li class="selectGImgURLBlock">
                        <div class="imgsFolderPrewBlock">
                        	<img<? if(strripos($scan[$i],'.') !== false) { ?> src="<?= $base.$scan[$i] ?>"<? } else { ?> src="../style/img/folder.jpg" class="folder"<? } ?> alt="<?= $base.$scan[$i] ?>">
                        </div>
                        <div class="imgsFolderFileName"><?= $scan[$i] ?></div>
                    </li>
                <? } ?>
            </ul>
        </div>
    </div>
</article>


