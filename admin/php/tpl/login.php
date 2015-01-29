<article class="login">
	<form method="post" action="php/models/loginTest.php">
		<div class="title">Авторизация</div>
		<ul>
			<li>Логин:</li>
			<li><input type="text" name="login" required></li>
			<li>Пароль:</li>
			<li><input type="password" name="pass" required></li>
			<li><input type="submit" value="Отправить"></li>
		</ul>
	</form>
</article>
<?php
if(isset($_GET['error'])){
	if($_GET['error'] = 'auth')
		print '<script type="text/javascript">
			alert("Логин пользователя или его пароль введены не верно!");
		</script>';
}
if(isset($_GET['message'])){
	if($_GET['message'] = 'restore')
		print '
			<script type="text/javascript">
				alert("Параметры входа успешно изменены и отправлены на почту администратора.");
			</script>
		';
}
?>
