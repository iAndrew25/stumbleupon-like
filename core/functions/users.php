<?php
function userExists($email){
	$email = sanitize($email);
	return (mysql_result(mysql_query("SELECT count(*) FROM udt WHERE email = '$email'"), 0) == 1) ? true : false;
}
function userIDFromUsername($username){
	$username = sanitize($username);
	return mysql_result(mysql_query("SELECT `id` FROM `udt` WHERE `Email` = '$username'"), 0, 'id');
}
function login($username, $password){
	$userID = userIDFromUsername($username);
	$username = sanitize($username);
	return (mysql_result(mysql_query("SELECT COUNT(id) FROM udt WHERE `email` = '$username' AND `password` = '$password'"), 0) == 1) ? $userID : false;
}
function loggedIn(){
	return (isset($_SESSION['userID'])) ? true : false;
}
function userData($userID){
	$userID = (int)$userID;
	$result = mysql_fetch_array(mysql_query("SELECT * FROM udt WHERE id = $userID"));
	return $result;
}
function totaludt(){
	return mysql_result(mysql_query("SELECT COUNT(`id`) FROM `udt` WHERE `Active` = 1"),0);
}
function Visits($userID){
	$userID = (int)$userID;
	return mysql_result(mysql_query("SELECT Visited FROM udt WHERE id = '$userID'"), 0);	
}
function getInterests($userID){
	$userID = (int)$userID;
	return mysql_result(mysql_query("SELECT interests FROM udt WHERE id = '$userID'"), 0);
}
function setInterests($interests, $userID){
	$interests = sanitize($interests);
	$userID = (int)$userID;
	mysql_query("UPDATE udt SET interests = '$interests' WHERE id = '$userID'");
}
function getLikes($userID){
	$userID = (int)$userID;
	$likes = explode(", ", mysql_result(mysql_query("SELECT likes FROM udt WHERE id = '$userID'"), 0));
	if($likes[0] == "")
		return "You didn't like any page yet.";
	return '<ul><li>' . implode('</li><li>', $likes) . '</li></ul>';
}
?>