<form action="" method = "POST">
	<p>Ваш логин:</p>
	<input type="text" name="login" value = "<?=$_POST['login']?>">
	<p>Ваш email:</p>
	<input type="text" name="email" value = "<?=$_POST['email']?>">
	<p>Ваш пароль:</p>
	<input type="password" name="password">
	<p>Введите ваш пароль еще раз:</p>
	<input type="password" name="password2">
	<p><button type="submit" name="signup">Зарегистрироваться</button></p>
</form>
<?=$msg?>
<br>
<a href="<?=ROOT?>">Вернуться на главную страницу</a>
