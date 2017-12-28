<?php
	include '../core/init.php';
	if (isset($_REQUEST['deleteUser'])) {
		$id = $_REQUEST['deleteUser'];
		mysql_query("DELETE FROM udt WHERE id='$id'");
		header('Location: admin.php');
	}
	else if(isset($_REQUEST['deleteLink'])) {
		$id = $_REQUEST['deleteLink'];
		mysql_query("DELETE FROM links WHERE id='$id'");
		header('Location: admin.php');
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>1doi3</title>
	<link rel="stylesheet" href="../assets/style/bootstrap.css" />
	<link rel="stylesheet" href="../assets/style/style.css" />
</head>
<body style="background-image: url('../assets/images/wbackground.jpg')">
	<!-- Settings Modal Begin-->
	<div id="myModal" class="modal">
		<div class="modal-content">
			<span id="close" class="glyphicon glyphicon-remove"></span>
			<div style="clear:both"></div>
<!-- 			<h3>Settings</h3>
<label for="email">Change e-mail:</label>
<input type="email" id="email" placeholder="New e-mail" /> -->
			<div id="myLikes" hidden>
				<h3>Administrate users</h3>
	<?php 
		$query = mysql_query("SELECT * FROM udt");

		while ($rows = mysql_fetch_array($query)){
				$id=$rows['id'];
				$firstName = $rows['firstName'];
				$lastName = $rows['firstName'];
				$email = $rows['email'];
				echo "<p><b>$firstName $lastName</b> - <u>$email</u> - <a href='admin.php?deleteUser=$id'><span style='color:red'>Delete user</span></a></p>";
		}
	?>
			</div>
			<div id="addAPage" hidden>
				<h3>Administrate links</h3>
	<?php 

		$query = mysql_query("SELECT * FROM links");

		while ($rows = mysql_fetch_array($query)){
				$id=$rows['id'];
				$url = $rows['url'];
				echo "<p><b>$url</b> - <a href='admin.php?deleteLink=$id'><span style='color:red'>Delete link</span></a></p>";
		}
	?>
			</div>
			<div id="addInterests" hidden>
				<h3>Add interests</h3>
				asf
			</div>
		</div>
	</div>
	<!-- Settings Modal End-->
	<header id="stumbleHeader">
		<div class="container">
			<div style="float:left">
				<h2 style="line-height:0; color: #fff">Welcome to the admin control panel</h2>
			</div>
			<div style="float:right">
				<button id="stmbComm" class="stmb"><span class="glyphicon glyphicon-comment"></span></button>
				<button id="stmbAcc" class="stmb"><span class="glyphicon glyphicon-user"></span></button>
			</div>
		</div>
		<div id="stmbProfile" style="display:block">
			<ul id="menuProfile">
				<li><span id="profileMyLikes">Administrate users</span></li>
				<li> | </li>
				<li><span id="profileAddPage">Administrate links</span></li>
				<li> | </li>
				<li><a href="../logout.php">Log Out</a></li>
			</ul>
		</div>

	</header>
	<div id="comments" style="display:block">
		<h3>Comments</h3>
<!-- 	<p><b><?php echo $userData[1]; ?></b></p>
<p><textarea name="" id="" style="resize: none;width:100%; padding:10px; height: 100px" placeholder="Your comment..." ></textarea></p>
<p><input type="submit" value="Submit" class="addPageSubmit" /></p>
<p><b>Stefan</b></p>
<p>Mișto chestii.. bv.</p> -->
<div id="tlkio" data-channel="1doi3" data-theme="theme--minimal" style="width:100%;height:100%;"></div><script async src="http://tlk.io/embed.js" type="text/javascript"></script>
	</div>
<script src="../assets/script/jquery.js"></script>
<script src="../assets/script/main.js"></script>
</body>
</html>