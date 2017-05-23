<?php

	if(isset($params[1]) && $params[1] != ''){
		$id = $params[1];
		delArticle($id);

		header('Location: ' . ROOT);
		exit();
	}
