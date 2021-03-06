<!doctype html>
<html lang="en">
	<head>

		<title>Moving Mindz</title>

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

		<!-- Allows bootstrap to scale to mobile verison -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<!-- Custom CSS -->
		<link rel="stylesheet" href="css-files/style.css">

		<script>
			$(document).ready(function(){
			});
		</script>
		
	</head>
	<body>
		<div class="container-fluid">
		<!-- Navbar section -->
			<nav class="navbar navbar-default">
				<div class="nav navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#MyNavbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar navbar-brand" href="index.html">
						<!-- This image will appear when viewed from mobile -->
						<img class="visible-xs" src="images/MMZ-logos/MMZ-logo-mobile.png" id="NavLogoMobile"> 
						<!-- This image will appear when viewed from desktop -->
						<img class="hidden-xs" src="images/MMZ-logos/MMZ-logo-mobile.png" id="NavLogo">
					</a>
				</div>
				
				<div class="collapse navbar-collapse" id="MyNavbar">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="index.html">Home</a></li>

						<li><a href="team-info.html">Team</a></li>

						<!-- Dropdown Menu / Tutoring -->
						<li><a href="tutoring-info.php" class="tutor-hover">Tutoring</a></li>
						
						<!-- Dropdown Menu / Camp
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#"  id="active">Camps
                            <i class="caret" id="camp-caret"></i></a>
                                <ul class="dropdown-menu">
									<li><a href="camps-info.html" class="camps-hover">Camp Information</a></li>
									<li class="divider" id="camps-div"></li>
                                    <li><a href="#" class="camps-hover">Summer</a></li>
                                    <li><a href="#" class="camps-hover">Spring</a></li>
                                    <li><a href="#" class="camps-hover">Winter</a></li>
								</ul>
						</li>
						 -->

						<!-- Dropdown Menu / After School Clubs -->
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#">Clubs
								<i class="caret" id="clubs-caret"></i></a>
								<ul class="dropdown-menu">
									<li><a href="clubs-info.html" class="clubs-hover">Clubs Information</a></li>
									<li class="divider" id="clubs-div"></li>
									<li><a href="school-location.html" class="clubs-hover">School Locations<i class="caret" id="clubs-caret"></i></a></a></li>
									<li><a href="available-clubs.html" class="clubs-hover">Available Clubs<i class="caret" id="clubs-caret"></i></a></a></li>
								</ul>
						</li>

						<li><a href="form-sign-up.php" id="end">Contact</a></li>
					</ul>
				</div>
			</nav>
		
        <!-- Main Section -->
            <div class="body-text">
                <!--
                    Have the interest form contain the forms for all sign ups?
                    User can select club, camp, or tutoring and jquery will show the proper form for that user
                -->
                <form class="club-info-form" action="form-sign-up.php" method="post">
					<h2>Interest Form</h2>
					<div class="form-group">
						<div class="row">
							<input type="checkbox" name="info-about" value="tutor" class="col-sm-4">Tutoring<br>
							<input type="checkbox" name="info-about" value="camps" class="col-sm-4">Camps<br>
							<input type="checkbox" name="info-about" value="starting-clubs" class="col-sm-4">Starting clubs at my school<br>
						</div>
					</div>
			    	<div class="form-group">
						<div class="row">
							<label for="inlineFormFirstName" class="col-sm-2">Name:</label>
							<div class="col-sm-10">
								<input type="text" name="name-contact" class="form-control" id="formFullName-Tutor" placeholder="Your Name">
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<label for="inlineFormEmail" class="col-sm-2">Email:</label>
							<div class="col-sm-10">
						    	<input type="text" name="email-contact" class="form-control" id="formEmail-Tutor" placeholder="Your Email">
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<label for="inlineFormPhone" class="col-sm-2">Phone:</label>
							<div class="col-sm-10">
							    <input type="text" name="phone-contact" class="form-control" id="formPhone-Tutor" placeholder="(000) 000 - 0000">
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<label for="inlineFormSchool" class="col-sm-2">School:</label>
							<div class="col-sm-10">
								<input type="text" name="school-contact" class="form-control" id="formSchool-club" placeholder="Your School">
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<label for="inlineFormSchoolRole" class="col-sm-2">Your Role:</label>
							<div class="col-sm-4">
								<input type="radio" name="school-role-student" value="student"> Student<br>
							</div>
							<div class="col-sm-4">
								<input type="radio" name="school-role-parent" value="parent"> Parent<br>
							</div>
							<div class="row">
								<div class="col-sm-4">
									<input type="radio" name="school-role-teacher" value="teacher"> Teacher<br>
								</div>
								<div class="col-sm-4">
									<input type="radio" name="school-role-principal" value="principal"> Principal<br>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-2">
									<!-- EMPTY SPACE -->
								</div>
								<div class="col-sm-4 offset-sm-2">
									<input type="radio" name="school-role-admin" value="districtadmin"> District Admin<br>
								</div>
								<div class="col-sm-4">
									<input type="radio" name="school-role-other" value="other"> Other<br>
								</div>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="input-group-btn">
								<button type="submit" name="submit" class="form-control" id="form-submit"><b>Submit</b></button>
							</div>
						</div>
					</div>
				</form>
				<?php


					$conn = mysqli_connect($servername, $username, $password, $dbname);

					// variables for php
					$username = mysqli_real_escape_string($conn, $_POST["name-contact"]);
					$email = mysqli_real_escape_string($conn, $_POST["email-contact"]);
					$phone = mysqli_real_escape_string($conn, $_POST["phone-contact"]);
					$school = mysqli_real_escape_string($conn, $_POST["school-contact"]);
					$rolestudent = mysqli_real_escape_string($conn, $_POST["school-role-student"]);
					$roleparent = mysqli_real_escape_string($conn, $_POST["school-role-parent"]);
					$roleteacher = mysqli_real_escape_string($conn, $_POST["school-role-teacher"]);
					$roleprincipal = mysqli_real_escape_string($conn, $_POST["school-role-principal"]);
					$roleadmin = mysqli_real_escape_string($conn, $_POST["school-role-admin"]);
					$roleother = mysqli_real_escape_string($conn, $_POST["school-role-other"]);
				?>
            </div>
        </div>
	</body>
	<footer>
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-3 footer-text">
					&copy;2017 Moving Mindz LLC
				</div>

				<div class="col-sm-6 center">
					<a href="https://www.facebook.com/movingmindz" target="_blank"><img src="images/social/facebook.png" class="social-img"></a>
					<a href="https://twitter.com/Moving_Mindz" target="_blank"><img src="images/social/twitter.png" class="social-img"></a>
					<a href="https://www.linkedin.com/company/moving-mindz/" target="_blank"><img src="images/social/linkedin.png" class="social-img"></a>
					<a href="https://www.instagram.com/movingmindz/" target="_blank"><img src="images/social/instagram.png" class="social-img"></a>
					<a href="https://www.youtube.com/channel/UCcuU9063487uOW15m0ELkeQ" target="_blank"><img src="images/social/youtube.png" class="social-img"></a>
					<a href="mailto:info@movingmindz.com" target="_blank"><img src="images/social/mail.png" class="social-img"></a>
				</div>

				<div class="col-sm-3 footer-text">
					<a href="#">Contact us</a>
					|
					<a href="#">Careers</a>
					|
					<a href="#">Locations</a>
				</div>

			</div>
		</div>
	</footer>
</html>