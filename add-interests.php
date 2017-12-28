<?php
	include 'core/init.php';
	$interests = $_POST['interestsList'];
	setInterests($interests, $userID);
	header('Location: index.php');
	exit();
?>