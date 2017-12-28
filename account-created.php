<?php
	include 'core/init.php';
	isLoggedIn();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="assets/style/bootstrap.css" />
	<link rel="stylesheet" href="assets/style/style.css" />
</head>
<body id="index">
<div class="container">
	<div class="mainBox">
		<div id="log">
		<p>Your account had been created. Check your e-mail for the password.</p>
			<form action="login.php" method="post">
				<div class="row">
					<div class="col-md-12"><input type="email" class="inp" placeholder="E-mail" name="email" required></div>
				</div>
				<div class="row">
					<div class="col-md-12"><input type="password" name="password" class="inp" placeholder="Password" required></div>
				</div>
				<div class="row">
					<div class="col-md-12"><button type="submit" class="logRegBtn">LOGIN</button></div>
				</div>
			</form>
		</div>
	</div>
</div>
<script src="assets/script/jquery.js"></script>
<script src="assets/script/script.js"></script>
</body>
</html>