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
?>


<article class="news">
	<ul class="status">
    	<li style="display: none">Не выбрано изображение для материала</li>
    </ul>
	<h1>Редактирование материала</h1>
	<form method="post" action="php/models/changeNewsBase.php" id="addNewsForm">
        <input type="hidden" id="changePage" value="<?= $_GET['page'] ?>">
        <?php if(isset($_GET['id'])) { ?>
            <input type="hidden" name="materialID" value="<?= $_GET['id'] ?>">
        <?php } ?>
        <ul class="inputList">
    		<li>Название материала:</li>
    	    <li><input type="text" name="materialName"<?php if(isset($_GET['id'])) print 'value="'.$list[$current][2].'"' ?> required></li>
            <li>Название материала на украинском:</li>
            <li><input type="text" name="materialNameUA"<?php if(isset($_GET['id'])) print 'value="'.$list[$current][6].'"' ?> required></li>
            <li>Название материала на английском:</li>
            <li><input type="text" name="materialNameEN"<?php if(isset($_GET['id'])) print 'value="'.$list[$current][9].'"' ?> required></li>
            <li>Изображение:</li>
            <li>
            	<div class="materialImg<?php if(isset($_GET['id'])) { ?> show<?php } ?>">
                	<input type="hidden" id="imgNewsSrc" name="materialImg"<?php if(isset($_GET['id'])) print 'value="'.$list[$current][1].'"'; else print 'value=""' ?> required>
            		<img class="prew" src="../<?php if(isset($_GET['id'])) print $list[$current][1].'"' ?>" alt="image">
                	<span class="materialImgKill" title="Удалить изображение">x</span>
                </div>
                <a class="button fileManagerOpen">Выбрать изображение</a>
            </li>
            <li>Сокращенное описание:</li>
            <li style="padding-top: 4px;">
                <textarea name="materialPrewContent" class="ckeditor" id="editor1"><?php if(isset($_GET['id'])) print $list[$current][4] ?></textarea>
            </li>
            <li>Сокращенное описание на украинском:</li>
            <li style="padding-top: 4px;">
                <textarea name="materialPrewContentUA" class="ckeditor" id="editor1"><?php if(isset($_GET['id'])) print $list[$current][7] ?></textarea>
            </li>
            <li>Сокращенное описание на английском:</li>
            <li style="padding-top: 4px;">
                <textarea name="materialPrewContentEN" class="ckeditor" id="editor1"><?php if(isset($_GET['id'])) print $list[$current][10] ?></textarea>
            </li>
            <li>Полное описание:</li>
            <li style="padding-top: 4px;">
            	<textarea name="materialContent" class="ckeditor" id="editor"><?php if(isset($_GET['id'])) print $list[$current][5] ?></textarea>
            </li>
            <li>Полное описание на украинском:</li>
            <li style="padding-top: 4px;">
                <textarea name="materialContentUA" class="ckeditor" id="editor"><?php if(isset($_GET['id'])) print $list[$current][8] ?></textarea>
            </li>
            <li>Полное описание на английсом:</li>
            <li style="padding-top: 4px;">
                <textarea name="materialContentEN" class="ckeditor" id="editor"><?php if(isset($_GET['id'])) print $list[$current][11] ?></textarea>
            </li>
            <li><input type="submit" value="Отправить"></li>
    	</ul>
    </form>
    <div class="popShadow">
    	<div class="popup">
        	<span class="closePopup" title="Закрыть окно" onClick="$('.popShadow').css('display','')">x</span>
        	<div class="popTitle">Выбор картинки <span>(/images/)</span></div>
            <ul>
                <?php
                $base = '../images/articles/';
                $scan = scandir($base);
                for($i=2; $i<count($scan); $i++) { ?>
                    <li class="selectImgURLBlock">
                        <img <?php if(strripos($scan[$i],'.') !== false) print 'src="'.$base.$scan[$i].'"'; else print 'src="style/img/folder.jpg" class="folder"';?> alt="preview">
                        <div class="imgsFolderFileName"><?= $scan[$i] ?></div>
                    </li>
                <?php }
                ?>
            </ul>
        </div>
    </div>
</article>


