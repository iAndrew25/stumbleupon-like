<?php
	include 'core/init.php';
	isLoggedIn();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>1doi3</title>
	<link rel="stylesheet" href="assets/style/bootstrap.css" />
	<link rel="stylesheet" href="assets/style/style.css" />
</head>
<body id="index">
<div class="container">
	<div class="mainBox">
		<div class="regLog tabSelected" id="register">Register</div>
		<div class="regLog" id="login">Log In</div>
		<div style="clear:both"></div>
		<div id="reg">
				<h2>Register for Free!</h2>
				<?php
					if(isset($_SESSION['Rerrors']))
						echo "<div class='errorRegister'>" . outputErrors(($_SESSION['Rerrors'])) . "</div>";
				?>
			<form action="register.php" method="post">
				<div class="row">
					<div class="col-md-6"><input type="text" name="firstName" class="inp" placeholder="First name" required></div>
					<div class="col-md-6"><input type="text" name="lastName" class="inp" placeholder="Last name" required></div>
				</div>
				<div class="row">
					<div class="col-md-12"><input type="email" name="email" class="inp" placeholder="E-mail" required></div>
				</div>
			<!--<div class="row">
					<div class="col-md-12"><input type="password" class="inp" placeholder="Password" required></div>
				</div> -->
				<div class="row">
					<div class="col-md-12"><button type="submit" class="logRegBtn">REGISTER</button></div>
				</div>
			</form>
		</div>
		<div id="log" hidden>
				<h2>Welcome back!</h2>
								<?php
					if(isset($_SESSION['errors']))
						echo "<div class='errorRegister'>" . outputErrors(($_SESSION['errors'])) . "</div>";
				?>
			<form action="login.php" method="post">
				<div class="row">
					<div class="col-md-12"><input type="email" name="email" class="inp" placeholder="E-mail" required></div>
				</div>
				<div class="row">
					<div class="col-md-12"><input type="password" name="password" class="inp" placeholder="Password" required></div>
				</div>
				<div class="row">
					<div class="col-md-12"><button type="submit" class="logRegBtn">LOGIN</button></div>
				</div>
				<span style="float:right; margin-top:10px;font-size: 12px;"><a href="admin/index.php" id="cp">Control Panel</a></span>
			</form>
		</div>
	</div>
</div>
<script src="assets/script/jquery.js"></script>
<script src="assets/script/script.js"></script>
</body>
</html>