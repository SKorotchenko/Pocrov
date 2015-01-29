<?
	// находим текущий материал
	if(!isset($_GET['new']))
		for($i=0;$i<count($buyMass);$i++){
			if($_GET['id'] == $buyMass[$i][0])
				break;
		}
?>
<article class="prod">
	<ul class="status">
    	<li style="display: none">Не выбрано изображение для материала</li>
    </ul>
	<h1>Редактирование материала</h1>
	<form method="post" action="php/changeCompanyBase.php" id="addCompanyForm">
        <? if(isset($_GET['id'])) { ?><input type="hidden" name="materialID" value="<?= $_GET['id'] ?>"><? } ?>
        <ul>
    		<li>Название материала:</li>
    	    <li><input type="text" name="materialName"<? if(!isset($_GET['new'])) { ?> value="<?= $buyMass[$i][3] ?>"<? } ?> required></li>
            <li>Изображение:</li>
            <li>
            	<div class="materialImg<? if(!isset($_GET['new'])) { ?> show<? } ?>">
                	<input type="hidden" id="imgSrc" name="materialImg"<? if(!isset($_GET['new'])) { ?> value="../<?= $buyMass[$i][2] ?>"<? } ?>>
            		<img src="../<? if(!isset($_GET['new'])) print $buyMass[$i][2]; ?>" alt="image">
                	<span class="materialImgKill" title="Удалить изображение">x</span>
                </div>
                <a class="button" onClick="$('.popShadow').css('display','block')">Выбрать изображение</a>
            </li>
            <li>Категория:</li>
            <li>
                <select name="materialCategorie" id="materialSelect">
                    <option value="Музыка и вещание"<? if(!isset($_GET['new'])) if($buyMass[$i][1]=='Музыка и вещание') { ?> selected<? } ?>>Музыка и вещание</option>
                    <option value="Hi-Fi & Hi-End"<? if(!isset($_GET['new'])) if($buyMass[$i][1]=='Hi-Fi & Hi-End') { ?> selected<? } ?>>Hi-Fi & Hi-End</option>
                    <option value="Промышленное направоение"<? if(!isset($_GET['new'])) if($buyMass[$i][1]=='Промышленное направоение') { ?> selected<? } ?>>Промышленное направоение</option>
                </select>
            </li>
            <li>Город:</li>
            <li><input type="text" name="materialCity"<? if(!isset($_GET['new'])) { ?> value="<?= $buyMass[$i][4] ?>"<? } ?> required></li>
            <li>Телофон:</li>
            <li><textarea class="ckeditor" name="materialPhone"><? if(!isset($_GET['new'])) { ?><?= $buyMass[$i][5] ?><? } ?></textarea></li>
            <li>Почта/сайт:</li>
            <li><input type="text" name="materialWeb"<? if(!isset($_GET['new'])) { ?> value="<?= $buyMass[$i][6] ?>"<? } ?>></li>
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
                        <img<? if(strripos($scan[$i],'.') !== false) { ?> src="<?= $base.$scan[$i] ?>"<? } else { ?> src="../style/img/folder.jpg" class="folder"<? } ?> alt="<?= $base.$scan[$i] ?>">
                        <div class="imgsFolderFileName"><?= $scan[$i] ?></div>
                    </li>
                <? } ?>
            </ul>
        </div>
    </div>
</article>

