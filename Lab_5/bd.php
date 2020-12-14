<?php
	$dbName = 'lab5' ;
	$dbHost = 'localhost' ;
	$dbUsername = 'root';
	$dbUserPassword = '';
	$cont = null;
	$cont = new PDO("mysql:host=".$dbHost.";"."dbname=". $dbName, $dbUsername, $dbUserPassword);
	
	if ($cont == FALSE) {
		echo('Не удалось подключиться');
		exit();
	}
	
	function save($name, $email, $text)
	{
		global $cont;
		$sql = $cont->prepare("INSERT INTO lab5 (name, email,text) values (?, ?, ?)");
		$result = $sql->execute( array($name, $email,$text) );
	}
	
	function filter($name)
	{
		$result = htmlspecialchars( strip_tags( trim($name)));
		return $result;
	}
	
	function getAll()
	{
		global $cont;
		$result = $cont->query("SELECT * from 'lab5'");
		return $result;
	}
?>