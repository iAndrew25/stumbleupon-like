<?php
include '../core/init.php';
	$email = $_POST['email'];
	$password = $_POST['password'];

	if($email != "admin@mail.com" && $password != "admin")
		$errors[] = "Wrong combination!";
	if(empty($errors))
	{
		$_SESSION['userID'] = $login;
		header('Location: admin.php');
		exit();
	}
	else
	{
		$_SESSION['errors'] = $errors;
		header('Location: index.php');	
		exit();
	}
?>