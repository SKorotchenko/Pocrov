<article class="main">
	<h1>Изменить пароль</h1>
    <ul class="status">
    	<li style="display: none">Текущий пароль введен не верно</li>
        <li style="display: none">Подтверждение пароля введено не верно</li>
        <li style="display: none">Пароль изменен успешно</li>
    </ul>
	<form method="post" id="changePassForm">
    	<ul>
            <li>Старый пароль:</li>
            <li><input type="password" name="oldPass" required></li>
            <li>Новый Пароль:</li>
            <li><input type="password" name="changePass" required></li>
            <li>Повторите новый пароль:</li>
            <li><input type="password" name="submitPass" required></li>
            <li><input type="submit" value="Отправить"></li>
        </ul>
    </form>
</article>

