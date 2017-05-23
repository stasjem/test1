<div id="login_form">
	<div><?=$msg?></div>
	<div>
		<form action="" method="post">
			<input type="text" name="login" placeholder = "Логин" class="field"><br>
			<input type="password" name="password" placeholder="Пароль" class="field"><br>
			<input type="checkbox" name="remember">Запомнить меня<br>
			<input type="submit" value="Войти" class="field">
		</form>
	</div>	
		<a href="<?=ROOT?>" class="btn">Вернуться на главную страницу</a>
</div>