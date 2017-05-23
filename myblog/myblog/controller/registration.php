<?php

	$success = false;
	if(isset($_POST['signup'])){
		$msg = '';
		$message = array();
		$uniqueLogin = uniqueUser($_POST['login']);
		if(trim($_POST['login']) == ''){
			$message[] = 'Введите логин!';
		}
		if($uniqueLogin['cnt'] != 0){
			$message[] = 'Пользователь с таким логином уже существует!';
		}
		if(trim($_POST['email']) == ''){
			$message[] = 'Введите ваш email!';
		}
		if($_POST['password'] == ''){
			$message[] = 'Введите пароль!';
		}
		if($_POST['password2'] != $_POST['password']){
			$message[] = 'Повторный пароль введен неверно!';
		}
		
		if(empty($message)){
			$login = $_POST['login'];
			$email = $_POST['email'];
			$password = myCrypt($_POST['password']);
			addUser($login, $email, $password);
			$success = true;
		}else{
			$msg = array_shift($message);
		}
	}

	$title = 'Регистрация пользователя';

	if($success){
		$inner = template('v_registration2', [
				'message' => 'Вы успешно зарегистрировались!'
			]);
	}else{
		$inner = template('v_registration', [
				'msg' => $msg,
				'login' => $login,
				'email' => $email,
				'password' => $password,
				'password2' => $password2
			]);
	}
