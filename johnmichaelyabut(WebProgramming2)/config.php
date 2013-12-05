<?php 
	/*
	* Array $config(configuration) for the Datas
	* Building Connection to the Database
	* Selwcting of Database
	*/
	$config = array('file' => 'localhost', 'username' => 'root', 'password' => '', 'database' => 'webprog2' );
	mysql_connect($config['file'], $config['username'], $config['password']);
	mysql_select_db($config['database']);

	require_once('Message.php');
	require_once('MessageDAO.php');
 ?>