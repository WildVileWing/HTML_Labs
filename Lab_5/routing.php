<?php
	$id = null;
	if(isset($_GET['id']) && !empty($_GET['id'])) 
		$id = ($_GET['id']);
	switch($id)
	{
		case 'about': include 'inc/about/about.inc.php'; break;
		case 'contact': include 'inc/contact/contact.inc.php'; break;
		case 'gbook': include 'inc/about/gbook.inc.php'; break;
		default: include 'inc/index/index.inc.php'; break;
	}
?>