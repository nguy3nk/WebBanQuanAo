<?php

	$dsn = 'mysql:host=localhost;dbname=demoshop';
	$option = [
		PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
		PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
	];
	$conn = new PDO($dsn,'root','',$option);
 ?>