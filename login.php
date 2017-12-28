<?php
include 'core/init.php';
	$email = $_POST['email'];
	$password = $_POST['password'];

	if(!userExists($email))
		$errors[] = "The e-mail you entered does not exist in our database.";
	else{
		$login = login($email, $password);
		if($login === false)
			$errors[] = "Incorrect password.";
	}
	if(empty($errors))
	{
		$_SESSION['userID'] = $login;
		header('Location: stumble.php');
		exit();
	}
	else
	{
		$_SESSION['errors'] = $errors;
		header('Location: index.php');	
		exit();
	}
?>