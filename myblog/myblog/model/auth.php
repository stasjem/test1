<?php

	function isAuth(){
		if(!isset($_SESSION['auth'])){
			$login = getCookie('login');
			$password = getCookie('password');

			if($user = getUser($login)){
				if($login == $user['login'] && $password == $user['password']){
					$_SESSION['auth'] = true;
					$_SESSION['login'] = $user['login'];

					return true;
				}
				return false;
			}
			return false;
		}
		return true;	

	}

	function getCookie($name){
		return isset($_COOKIE[$name]) ? $_COOKIE[$name] : null;
	}

	function deleteCookie($name){
		setcookie($name, '', time() - 1);
		unset($_COOKIE[$name]);
	}