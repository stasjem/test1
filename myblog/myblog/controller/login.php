<?php

$msg = '';
if(count($_POST) > 0){
	$user = getUser($_POST['login']);
	if($user === false){
		$msg = 'Пользователь с указанным логином не существует!';
	}else{
		if($_POST['login'] == $user['login'] && myCrypt($_POST['password']) == $user['password']){
			$_SESSION['auth'] = true;
			$_SESSION['login'] = $user['login'];

			if(isset($_POST['remember'])){
			setcookie('login', $user['login'], time() + 3600 * 24 * 365);
			setcookie('password', $user['password'], time() + 3600 * 24 * 365);
			}
			header('Location: ' . ROOT);
			exit;
		}else{
			$msg = 'Неправильный пароль!';
		}
	}
}else{
	unset($_SESSION['auth']);
	session_destroy();
	deleteCookie('login');
	deleteCookie('password');
}

	$title = 'Авторизация';

	$inner = template('v_login', [
				'msg' => $msg,
				'login' => $login,
				'password' => $password
			]);