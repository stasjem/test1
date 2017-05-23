<?php
	$posts = getArticles();
	$isAuth = isAuth();

	$title = 'Список статей';
	$inner = template('v_index', [
		'isAuth' => $isAuth,
		'posts' => $posts
	]);


