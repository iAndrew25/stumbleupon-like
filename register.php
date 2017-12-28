<?php
	include 'core/init.php';

	$email = $_POST['email'];
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$password = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 10);

	$email = trim($email);
	$firstName = trim($firstName);
	$lastName = trim($lastName);

	if(strlen($firstName) == 0 || strlen($email) == 0 || strlen($lastName) == 0)
		$errors[] = "You need to enter a valid name.";
	if(userExists($email))
		$errors[] = "There is already an account registered with this e-mail.";
	echo $email . '<br>';
	echo $password . '<br>';
	echo $firstName . '<br>';
	echo $lastName . '<br>';
	print_r($errors);
if(empty($errors))
{
	$email = htmlspecialchars(sanitize($email));
	$firstName = htmlspecialchars(sanitize($firstName));
	$lastName = htmlspecialchars(sanitize($lastName));
	mysql_query("INSERT INTO udt(firstName, lastName, email, password) VALUES('$firstName', '$lastName', '$email', '$password')");

	$to = $email;
	$subject = "Welcome to 1doi3.xyz";
	$message = "<h1>Welcome to 1doi3.xyz!</h1><p>You can now log out with the following credentials: <br /><b>Username: " + $email + "<br />Password: " + $password;         
	$header = "From:no-reply@1doi3.xyz \r\n";         
	mail($to,$subject,$message,$header);

	header('Location: account-created.php');
	exit();
}
else{
	$_SESSION['Rerrors'] = $errors;
	header('Location: index.php');
	exit();
}

?>