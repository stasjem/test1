<?php

	if(isset($params[1]) && $params[1] != '' && is_numeric($params[1])){
	    $id = $params[1];
		$article = getArticle($id);

		if($article === false){
			$error404 = true;
		}
	}else{
		$error404 = true;
	}

	$title = "Просмотр статьи - ".$article['title'];
	$inner = $error404 ?
			template('v_404') :
			template('v_post', ['article' => $article]);


