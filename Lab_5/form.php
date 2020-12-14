<?php

	include_once 'C:/xampp/htdocs/Lab_5/bd.php';

	if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['text']) && isset($_POST['submit']))
	{	
		$name 	= filter($_POST['name']);
		$email 	= filter($_POST['email']);
		$text 	= filter($_POST['text']);
		
		save($name, $email, $text);
		
		header("Location: index.php?id=gbook");
	}
?>
