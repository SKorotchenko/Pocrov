<article class="main">
	<h1>Изменить параметры входа</h1>
	<ul class="status">
		<li style="display: none">Текущий логин или пароль введены не верно</li>
		<li style="display: none">Подтверждение пароля введено не верно</li>
		<li style="display: none">Данные успешно сохранены</li>
	</ul>
	<form id="changePassForm">
		<ul>
			<li>Текущий логин:</li>
			<li><input type="text" name="oldLogin" required></li>
			<li>Текущий пароль:</li>
			<li><input type="password" name="oldPass" required></li>
			<li>Новый логин:</li>
			<li><input type="text" name="newLogin" required></li>
			<li>Новый пароль:</li>
			<li><input type="password" name="changePass" required></li>
			<li>Повторите новый пароль:</li>
			<li><input type="password" name="submitPass" required></li>
			<li><input type="submit" value="Отправить"></li>
		</ul>
	</form>

	<h1>Изменить параметры восстановления</h1>
	<form id="changeRestoreForm">
		<ul>
			<li>Ссылка для сброса пароля:</li>
			<li><input type="text" value="<?= $SITE_CONST['base_path'] ?>admin/?page=restore" title="Введите этот адрес в браузер, чтоб сбросить пароль" readonly></li>
			<li>Текущий логин:</li>
			<li><input type="text" name="restoreLogin" required></li>
			<li>Текущий пароль:</li>
			<li><input type="password" name="restorePass" required></li>
			<li>Новый email для сброса:</li>
			<li><input type="email" name="newMail" title="При сбросе, новый пароль будет отправляться на этот email" required></li>
			<li><input type="submit" value="Отправить"></li>
		</ul>
	</form>
</article>

