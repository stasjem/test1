<?php

	include_once('model/db_functions.php');

    function template($path, $vars = []){
        extract($vars);
        ob_start();
        include("view/$path.php");
        return ob_get_clean();
    }

    function myCrypt($str){
		return hash('sha256', $str . SALT);
	}

	function checkName($name){
		return preg_match("/^[a-z0-9-]+$/i", $name);
	}
