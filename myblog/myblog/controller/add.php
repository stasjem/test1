<?php

	if(!isAuth()){
		header('Location: ' . ROOT . login.php);
		exit();
	}

	if(count($_POST) > 0){
		$artTitle = htmlspecialchars(trim($_POST['artTitle']));
		$text = htmlspecialchars(trim($_POST['text']));
		$msg = '';

		if(empty($artTitle) || empty($text)){
			$msg = 'Заполните все поля!';
		}else{
			addArticle($artTitle, $text);
			
			header('Location: ' . ROOT);
			exit();
		}
	}else{
		$msg = 'Для добавления статьи заполните форму!';
	}

	$title = 'Добавление статьи';

	$inner = template('v_add', [
				'msg' => $msg,
				'artTitle' => $artTitle,
				'text' => $text
			]);
