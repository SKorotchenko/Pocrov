<nav>
	<a href="?page=main"			<?php if($_GET['page'] == 'main')				    print 'class="active"'; ?>>Главная</a>
    <a href="?page=exit">Выйти</a>
    <a href="<?= $SITE_CONST['base_path'] ?>"><img src="<?= $SITE_CONST['base_path'] ?>/images/Logotype.png" alt="logo"></a>
    <a href="?page=newslist"		<?php if($_GET['page'] == 'newslist')			    print 'class="active"'; ?>>Новости</a>
    <a href="?page=gallerylist"		<?php if($_GET['page'] == 'gallerylist')			print 'class="active"'; ?>>Фотогалереея</a>

</nav>
