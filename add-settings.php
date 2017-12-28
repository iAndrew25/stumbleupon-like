<?php
	include 'core/init.php';	
	$password = $_POST['password'];
	$newPassword = $_POST['newPassword'];
	if($password == $userData[4]){
		$password = $newPassword;
		mysql_query("UPDATE udt SET password = '$password' WHERE id='$userData[0]'");
		header('Location: stumble.php?changed');
	}
	else{
		header('Location: stumble.php?wrong');
	}
	
?>