<?php
function isLoggedIn(){
	if(loggedIn())
	{
		header('Location: stumble.php');
		exit();
	}
}
function isLoggedOut(){
	if(!loggedIn())	
	{
		header('Location: index.php');
		exit();
	}
}
function sanitize($data){
	return mysql_real_escape_string($data);	
}
function outputErrors($errors){
	return '<ul><li>' . implode('</li><li>', $errors) . '</li></ul>';
}
?>