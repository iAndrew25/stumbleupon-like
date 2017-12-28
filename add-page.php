<?php
	include 'core/init.php';
	$link = $_POST['addPageWebsite'];
	$category = $_POST['addLink'];
	mysql_query("INSERT INTO links(url, category) VALUES('$link', '$category')");
	$linksId = mysql_result(mysql_query("SELECT id FROM links WHERE url = '$link'"), 0);
	header('Location: index.php');
	exit();
?>