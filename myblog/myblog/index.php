<?php
	session_start();
	include_once('config.php');
	include_once('model/system.php');
	include_once('model/auth.php');
	include_once('model/articles.php');
	include_once('model/users.php');

	$params = explode('/', $_GET['q']);
	$params_cnt = count($params);

	if($params[$params_cnt - 1] == ''){
		unset($params[$params_cnt - 1]);
	}

	$isAuth = isAuth();
	$cname = isset($params[0]) ? $params[0] : 'index';
	$inc = "controller/$cname.php";

	if(file_exists($inc) && checkName($cname)){
		include_once($inc);
	}else{
		$title = 'Ошибка 404';
		$inner = template('v_404');	
	}

	$html = template('v_main', [
		'title' => $title,
		'content' => $inner
	]);

	echo $html;
