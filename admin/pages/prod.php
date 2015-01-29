<?
	// находим текущий материал
	if(!isset($_GET['new']))
		for($i=0;$i<count($prodMass);$i++){
			if($_GET['id'] == $prodMass[$i][0])
				break;	
		}
?>
<article class="prod">
	<ul class="status">
    	<li style="display: none">Не выбрано изображение для материала</li>
        <li style="display: none">Не выбрана категория для материала</li>
    </ul>
	<h1>Редактирование материала</h1>
	<form method="post" action="php/changeProdBase.php" id="addProdForm">
        <input type="hidden" name="materialCategorie" value="<?= $_GET['cat'] ?>">
        <? if(isset($_GET['id'])) { ?><input type="hidden" name="materialID" value="<?= $_GET['id'] ?>"><? } ?>
        <ul>
    		<li>Название материала:</li>
    	    <li><input type="text" name="materialName"<? if(!isset($_GET['new'])) { ?> value="<?= $prodMass[$i][4] ?>"<? } ?> required></li>
            <li>Изображение:</li>
            <li>
            	<div class="materialImg<? if(!isset($_GET['new'])) { ?> show<? } ?>">
                	<input type="hidden" id="imgSrc" name="materialImg"<? if(!isset($_GET['new'])) { ?> value="../<?= $prodMass[$i][3] ?>"<? } ?>>
            		<img src="../<? if(!isset($_GET['new'])) print $prodMass[$i][3]; ?>" alt="image">
                	<span class="materialImgKill" title="Удалить изображение">x</span>
                </div>
                <a class="button" onClick="$('.popShadow').css('display','block')">Выбрать изображение</a>
            </li>
            <li>Подкатегория:</li>
            <li>
	            <div class="catListBlock">
                    <select name="materialSubCategorie" id="materialSelect">
                    <? if(isset($prodCats))
						for($j=0;$j<count($prodCats);$j++) {?>
							<option value="<?= $prodCats[$j][0] ?>"<? if(!isset($_GET['new'])) { if($prodCats[$j][0]==$prodMass[$i][1]) { ?> selected<? } } ?>><?= $prodCats[$j][1] ?></option>
						<? } ?>
                    </select>
                    <input type="hidden" id="subCatName" name="materialSubCategorieName"<? if(!isset($_GET['new'])) { ?> value="<?= $prodMass[$i][2] ?>"<? } else { ?> value="<?= $prodCats[0][1] ?>"<? } ?>>
                    <a class="button" id="newCat">Добавить категорию</a>
                    <span id="newCatMess" style="display: none">Если материал с новой категорией не будет добавлен - категория сохранена не будет!</span>
                </div>
                <div class="addCatBlock">
                	<ul class="catNet">
                        <li><input type="text" id="newCatName" placeholder="Имя категории"></li>
                        <li>
                        	<a class="button" id="newCatAdd">Добавить</a>
                            <a class="button" id="backToCatList">Назад</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>Контент:</li>
            <li style="padding-top: 4px;">
            	<textarea name="materialContent" class="ckeditor" id="editor"><? if(!isset($_GET['new'])) { ?><?= $prodMass[$i][5] ?><? } ?></textarea>
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
                        <img<? if(strripos($scan[$i],'.') !== false) { ?> src="<?= $base.$scan[$i] ?>"<? } else { ?> src="../style/img/folder.jpg" class="folder"<? } ?> alt="<?= $base.$scan[$i] ?>">
                        <div class="imgsFolderFileName"><?= $scan[$i] ?></div>
                    </li>
                <? } ?>
            </ul>
        </div>
    </div>
</article>

