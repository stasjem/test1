<?php
function dbConnect(){
	static $db;
	if($db == null){
		$dsn = sprintf('mysql:host=%s;dbname=%s', HOST, DBNAME);
 		$db = new PDO($dsn, DBLOGIN, DBPASS);
 		$db->exec("SET NAMES UTF8");
	}
	return $db;
}

function dbCheckError($query){
	$err = $query->errorInfo();
	if($err[0] != PDO::ERR_NONE){
		exit($err[2]);
	}
}

function dbQuery($sql, $params = []){
	$db = dbConnect();
	$query = $db->prepare($sql);
	$query ->execute($params);

	dbCheckError($query);

	return $query;
}
