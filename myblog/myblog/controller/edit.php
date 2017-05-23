<?php

	if(!isAuth()){
		header('Location: ' . ROOT . login.php);
		exit();
	}

	if(isset($params[1])){
		$id = $params[1];
		$articleInfo = getArticle($id);
		$artTitle = $articleInfo['artTitle'];
		$text = $articleInfo['text'];
	}
	
	if(isset($articleInfo['id'])){
		if(count($_POST) > 0){
			$artTitle = htmlspecialchars(trim($_POST['artTitle']));
			$text = htmlspecialchars(trim($_POST['text']));
			$msg = '';
			if(empty($artTitle) || empty($text)){
				$msg = 'Заполните все поля!';
			}else{
				editArticle($artTitle, $text, $id);
				header('Location: ' . ROOT);
				exit();
			}
		}
	}else{
		$error404 = true;
	}	

	$title = 'Редактирование статьи';

	$inner = $error404 ?
		template('v_404') :
		template('v_edit', [
				'msg' => $msg,
				'articleInfo' => $articleInfo
		]);


