<article class="other">
	<h1>Редактирование материала</h1>
	<form method="post" action="php/changeOtherBase.php" id="addOtherForm">
		<input type="hidden" name="materialID" value="<?= $_GET['id'] ?>">
		<ul>
			<li>Контент:</li>
			<li style="padding-top: 4px;">
				<textarea name="materialContent" class="ckeditor" id="editor"><?= $otherElm[2] ?></textarea>
			</li>
			<li><input type="submit" value="Отправить"></li>
		</ul>
	</form>
</article>