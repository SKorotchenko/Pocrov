<?
	// находим текущий материал
	if(!isset($_GET['new']))
		for($i=0;$i<count($newsMass);$i++){
			if($_GET['id'] == $newsMass[$i][0])
				break;
		}
?>
<article class="news">
	<ul class="status">
    	<li style="display: none">Не выбрано изображение для материала</li>
    </ul>
	<h1>Редактирование материала</h1>
	<form method="post" action="php/changeNewsBase.php" id="addNewsForm">
        <? if(isset($_GET['id'])) { ?><input type="hidden" name="materialID" value="<?= $_GET['id'] ?>"><? } ?>
        <ul>
    		<li>Название материала:</li>
    	    <li><input type="text" name="materialName"<? if(!isset($_GET['new'])) { ?> value="<?= $newsMass[$i][2] ?>"<? } ?> required></li>
            <li>Изображение:</li>
            <li>
            	<div class="materialImg<? if(!isset($_GET['new'])) { ?> show<? } ?>">
                	<input type="hidden" id="imgSrc" name="materialImg"<? if(!isset($_GET['new'])) { ?> value="../<?= $newsMass[$i][1] ?>"<? } ?>>
            		<img src="../<? if(!isset($_GET['new'])) print $newsMass[$i][1]; ?>" alt="image">
                	<span class="materialImgKill" title="Удалить изображение">x</span>
                </div>
                <a class="button" onClick="$('.popShadow').css('display','block')">Выбрать изображение</a>
            </li>
            <li>Сокращенное описание:</li>
            <li style="padding-top: 4px;">
                <textarea name="materialPrewContent" class="ckeditor" id="editor1"><? if(!isset($_GET['new'])) { ?><?= $newsMass[$i][4] ?><? } ?></textarea>
            </li>
            <li>Полное описание:</li>
            <li style="padding-top: 4px;">
            	<textarea name="materialContent" class="ckeditor" id="editor"><? if(!isset($_GET['new'])) { ?><?= $newsMass[$i][5] ?><? } ?></textarea>
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
                	<li class="selectImgURLBlock">
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


