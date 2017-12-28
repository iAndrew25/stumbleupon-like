<?php
	include 'core/init.php';
	isLoggedOut();
	if (isset($_REQUEST['changed'])) {
		echo "<div id='passwordChanged'>Your password has been changed</div>";
	}
	else if (isset($_REQUEST['wrong'])) {
		echo "<div id='passwordNotChanged'>You entered a wrong password</div>";
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>1doi3</title>
	<link rel="stylesheet" href="assets/style/bootstrap.css" />
	<link rel="stylesheet" href="assets/style/style.css" />
</head>
<body style="background-color:#fff">
	<!-- Settings Modal Begin-->
	<div id="myModal" class="modal">
		<div class="modal-content">
			<span id="close" class="glyphicon glyphicon-remove"></span>
			<div style="clear:both"></div>
<!-- 			<h3>Settings</h3>
<label for="email">Change e-mail:</label>
<input type="email" id="email" placeholder="New e-mail" /> -->
			<div id="myLikes" hidden>
				<?php echo getLikes($userID); ?>
			</div>
			<div id="addSettings" hidden>
				<h3>Settings</h3>
				<form action="add-settings.php" method="post">
				<p><b>Email:</b></p>
					<input type="text" name="addSettings" class="inputSettings" placeholder="Website" value='<?php echo  $userData[3];?>' readonly/>
				<p><b>Change password:</b></p>
					<p><input type="password" name="password" class="inputSettings" placeholder="Current password"/>
					<input type="password" name="newPassword" class="inputSettings" placeholder="New password"/></p>
					<p><input type="submit" value="Submit" class="addPageSubmit" /></p>
				</form>
			</div>
			<div id="addAPage" hidden>
				<h3>Add a page</h3>
				<form action="add-page.php" method="post">
					<input type="text" id="addPageWebsite" name="addPageWebsite" class="inputSettings" placeholder="Website" required/>
					<select class="inputSettings" name="addLink" required>
						<option selected disabled>Category</option>
						<option value="Music">Music</option>
						<option value="TV Series">TV Series</option>
						<option value="Fashion &amp; Beauty">Fashion &amp; Beauty</option>
						<option value="Sport">Sport</option>
						<option value="Traveling">Traveling</option>
						<option value="Online Games">Online Games</option>
						<option value="Book &amp; Culture">Book &amp; Culture</option>
						<option value="Food &amp; Beverage">Food &amp; Beverage</option>
						<option value="Learning">Learning</option>
						<option value="Computer &amp; Internet">Computer &amp; Internet</option>
						<option value="Ancient History">Ancient History</option>
						<option value="Animals">Animals</option>
						<option value="Arts">Arts</option>
						<option value="Cars">Cars</option>
						<option value="Magic &amp; Ilusions">Magic &amp; Ilusions</option>
						<option value="Logic">Logic</option>
						<option value="Nature">Nature</option>
						<option value="Photography">Photography</option>
						<option value="Video Games">Video Games</option>
						<option value="Social network">Social network</option>
						<option value="Funny">Funny</option>
						<option value="Astronomy">Astronomy</option>
						<option value="Anime &amp; cartoons">Anime &amp; cartoons</option>
						<option value="Babes">Babes</option>
						<option value="Shopping">Shopping</option>
						<option value="Business">Business</option>
						<option value="Mythology">Mythology</option>
						<option value="Alchoolic Driks">Alchoolic Driks</option>
						<option value="Gadgets">Gadgets</option>
						<option value="Board games">Board games</option>
						<option value="Hacks">Hacks</option>
						<option value="Tips &amp; tricks">Tips &amp; tricks</option>
						<option value="Lifestyle">Lifestyle</option>
						<option value="Outdoor Activities">Outdoor Activities</option>
						<option value="Religion">Religion</option>
						<option value="Oddly satisfying ">Oddly satisfying </option>
						<option value="Hot Workout">Hot Workout</option>
						<option value="Breaking news">Breaking news</option>
					</select>
					<button class="addPageSubmit" type="submit">Submit</button>
				</form>
			</div>
			<div id="addInterests" hidden>
				<h3>Add interests</h3>
				<b>Click on the interests to add to your list.</b>
				<ul id="compInt">
					<li><span class="interestsKeys">Music</span></li>
					<li><span class="interestsKeys">TV Series</span></li>
					<li><span class="interestsKeys">Fashion &amp; Beauty</span></li>
					<li><span class="interestsKeys">Sport</span></li>
					<li><span class="interestsKeys">Traveling</span></li>
					<li><span class="interestsKeys">Online Games</span></li>
					<li><span class="interestsKeys">Book &amp; Culture</span></li>
					<li><span class="interestsKeys">Food &amp; Beverage</span></li>
					<li><span class="interestsKeys">Learning</span></li>
					<li><span class="interestsKeys">Computer &amp; Internet</span></li>
					<li><span class="interestsKeys">Ancient History</span></li>
					<li><span class="interestsKeys">Animals</span></li>
					<li><span class="interestsKeys">Arts</span></li>
					<li><span class="interestsKeys">Cars</span></li>
					<li><span class="interestsKeys">Magic &amp; Ilusions</span></li>
					<li><span class="interestsKeys">Logic</span></li>
					<li><span class="interestsKeys">Nature</span></li>
					<li><span class="interestsKeys">Photography</span></li>
					<li><span class="interestsKeys">Video Games</span></li>
					<li><span class="interestsKeys">Social network</span></li>
					<li><span class="interestsKeys">Funny</span></li>
					<li><span class="interestsKeys">Astronomy</span></li>
					<li><span class="interestsKeys">Anime &amp; cartoons</span></li>
					<li><span class="interestsKeys">Babes</span></li>
					<li><span class="interestsKeys">Shopping</span></li>
					<li><span class="interestsKeys">Business</span></li>
					<li><span class="interestsKeys">Mythology</span></li>
					<li><span class="interestsKeys">Alchoolic Driks</span></li>
					<li><span class="interestsKeys">Gadgets</span></li>
					<li><span class="interestsKeys">Board games</span></li>
					<li><span class="interestsKeys">Hacks</span></li>
					<li><span class="interestsKeys">Tips &amp; tricks</span></li>
					<li><span class="interestsKeys">Lifestyle</span></li>
					<li><span class="interestsKeys">Outdoor Activities</span></li>
					<li><span class="interestsKeys">Religion</span></li>
					<li><span class="interestsKeys">Oddly satisfying </span></li>
					<li><span class="interestsKeys">Hot Workout</span></li>
					<li><span class="interestsKeys">Breaking news</span></li>
				</ul>
				<b>Your interests:</b>
				<form action="add-interests.php" method="post">
					<textarea id="interestsList" name="interestsList" readonly><?php echo getInterests($userID); ?></textarea>
					<span style="font-size: 12px; float:right"><i>*Click again on the interest to remove it from the list</i></span>
					<button class="addPageSubmit" type="submit">Save interests</button>
				</form>
<!-- 				<span class="interestsKeys">car</span> 
				<span class="interestsKeys">computer</span> 
				<span class="interestsKeys">it</span> -->
			</div>
		</div>
	</div>
	<!-- Settings Modal End-->
	<header id="stumbleHeader">
		<div class="container">
			<div style="float:left;"><button id="stmbSh" class="stmb"><span class="glyphicon glyphicon-share"></span></button></div>
			<div id="stmbWraper">
				<button class="stmb" id="likeBtn"><span class="glyphicon glyphicon-thumbs-up"></span></button>
				<button id="stumble">1doi3</button>		
				<button class="stmb" id="dislikeBtn"><span class="glyphicon glyphicon-thumbs-down"></span></button>
			</div>			
			<div style="float:right">
				<button id="stmbComm" class="stmb"><span class="glyphicon glyphicon-comment"></span></button>
				<button id="stmbAcc" class="stmb"><span class="glyphicon glyphicon-user"></span></button>
			</div>
		</div>
		<div id="stmbProfile">
			<ul id="menuProfile">
				<li><span id="profileMyLikes">My Likes</span></li>
				<li> | </li>
				<li><span id="profileAddPage">Add a Page</span></li>
				<li> | </li>
				<li><span id="profileAddInterests">Add Interests</span></li>
				<li> | </li>
				<li><span id="profileSettings">Settings</span></li>
				<li> | </li>
				<li><a href="logout.php">Log Out</a></li>
			</ul>
		</div>
		<div id="stmbShare">
			<div id="socialMediaPics">
				<a href="#" id="shareOnFacebook" target="_blank"><img src="assets/images/socialMedia/facebook.png" alt="Facebook logo" /></a>
				<a href="#" id="shareOnGoogle" target="_blank"><img src="assets/images/socialMedia/google.png" alt="Google logo" /></a>
				<a href="#" id="shareOnTwitter" target="_blank"><img src="assets/images/socialMedia/twitter.png" alt="Twitter logo" /></a>
				<a href="#" id="shareOnVk" target="_blank"><img src="assets/images/socialMedia/vk.png" alt="Vk logo" /></a>
			</div>
		</div>
	</header>
	<div id="comments">
		<h3>Comments</h3>
<!-- 	<p><b><?php echo $userData[1]; ?></b></p>
<p><textarea name="" id="" style="resize: none;width:100%; padding:10px; height: 100px" placeholder="Your comment..." ></textarea></p>
<p><input type="submit" value="Submit" class="addPageSubmit" /></p>
<p><b>Stefan</b></p>
<p>Mișto chestii.. bv.</p> -->
<div id="tlkio" data-channel="1doi3" data-theme="theme--minimal" style="width:100%;height:100%;"></div><script async src="http://tlk.io/embed.js" type="text/javascript"></script>
	</div>
	<section>
	    <iframe src="" frameborder="0" id="ifr"></iframe>
	</section>
<script src="assets/script/jquery.js"></script>
<script src="assets/script/stumble.js"></script>
<script src="assets/script/main.js"></script>
</body>
</html>