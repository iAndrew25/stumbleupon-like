<?php
session_start();
//error_reporting(0);
require 'database/connect.php';
require 'functions/general.php';
require 'functions/users.php';

if(loggedIn())
{
	$userID = $_SESSION['userID'];
	$userData = userData($userID);
}

$errors = array();
?>