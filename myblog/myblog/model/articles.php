<?php

  function getArticles(){
		$sql = "SELECT * FROM articles ORDER BY dt DESC";
		$query = dbQuery($sql);
		
		return $query->fetchAll();
	}

	function getArticle($id){
		$sql = "SELECT * FROM articles WHERE id = :id LIMIT 1";
		$params = ['id' => $id];
		$query = dbQuery($sql, $params);

		return $query->fetch();
	}

	function addArticle($title, $text){
		$sql = "INSERT INTO articles (title, text) VALUES (:title, :text)";
		$params = ['title' => $title, 'text' => $text];
		dbQuery($sql, $params);

		return true;
	}

	function editArticle($title, $text, $id){
		$sql = "UPDATE articles SET title=:title, text=:text WHERE id=:id";
		$params = ['title' => $title, 'text' => $text, 'id' => $id];
		dbQuery($sql, $params);

		return true;
	}

	function delArticle($id){
		$sql = "DELETE FROM articles WHERE id = :id";
		$params = ['id' => $id];
		dbQuery($sql, $params);

		return true;
	}