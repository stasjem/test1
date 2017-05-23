<?php

  function addUser($login, $email, $password){
		$sql = "INSERT INTO users (login, email, password) VALUES (:login, :email, :password)";
		$params = ['login' => $login, 'email' => $email, 'password' => $password];
		dbQuery($sql, $params);

		return true;
	}

	function getUser($login){
		$sql = "SELECT * FROM users WHERE login = :login";
		$params = ['login' => $login];
		$query = dbQuery($sql, $params);

		return $query->fetch();
	}

	function uniqueUser($login){
		$sql = "SELECT count(*) as cnt FROM users WHERE login = :login";
		$params = ['login' => $login];
		$query = dbQuery($sql, $params);
		return $query -> fetch();
	}