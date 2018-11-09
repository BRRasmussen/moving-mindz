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
		<!-- CSS only for this page -->
		<link rel="stylesheet" href="css-files/tutoring-style.css">

		<script>
			$(document).ready(function(){
				var pageWidth = $(window).width();
				// or maybe have only a row with the subjects and the topic section
				// can show the available grade levels
				//
				// Carousel wheel for mobile version?

				if (pageWidth < 769){
					//displays math information on mobile when clicked on
					$("#sub-math-img").on("click", function(){
						$("#eng-info, #sci-info, #prep-info, #topic-head").hide()

							$("#math-info").css({
							"display": "block"
						})
					})
					$("#form-bg-img").css({
						"background-image": "none"
					})

					// display math information (mobile)
					$("#sub-math-img-mobile").on("click", function(){
						$("#eng-info, #sci-info, #prep-info, #topic-head").hide()
						$("#math-info").toggle();
					})

					// displays english information
					$("#sub-eng-img-mobile").on("click", function(){
						$("#math-info, #sci-info, #prep-info, #topic-head").hide()
						$("#eng-info").toggle();
					})

					// displays science information
					$("#sub-sci-img-mobile").on("click", function(){
						$("#math-info, #eng-info, #prep-info, #topic-head").hide()
						$("#sci-info").toggle();
					})

					// displays test prep information
					$("#sub-prep-img-mobile").on("click", function(){
						$("#math-info, #sci-info, #eng-info, #topic-head").hide()
						$("#prep-info").toggle();
					})
				} else{
					// on click makes other topics transparent and changes
					// the background image of the section next to the topics to a
					// picture of the selected topic
					$("#sub-math-img").on("click", function(){
						$(this).css({
							"filter": "none"
						})
						$("#sub-eng-img, #sub-sci-img, #sub-prep-img").css({
							"filter": "opacity(.5)"
						})
						$("#form-bg-img").css({
							"background-image": "url(images/tutoring/math-subjects.png)",
						})
					})

					// changes english icon when scrolled over
					$("#sub-eng-img").on("click", function(){
						$(this).css({
							"filter": "none"
						})
						$("#sub-math-img, #sub-sci-img, #sub-prep-img").css({
							"filter": "opacity(.5)"
						})
						$("#form-bg-img").css({
							"background-image": "url(images/tutoring/reading-subjects.png)"
						})
					})

					$("#sub-sci-img").on("click", function(){
						$(this).css({
							"filter": "none"
						})
						$("#sub-math-img, #sub-eng-img, #sub-prep-img").css({
							"filter": "opacity(.5)"
						})
						$("#form-bg-img").css({
							"background-image": "url(images/tutoring/science-subjects.png)"
						})
					})

					$("#sub-prep-img").on("click", function(){
						$(this).css({
							"filter": "none"
						})
						$("#sub-eng-img, #sub-sci-img, #sub-math-img").css({
							"filter": "opacity(.5)"
						})
						$("#form-bg-img").css({
							"background-image": "url(images/tutoring/test-prep-subjects.png)"
						})
					})
				};
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
							<a class="dropdown-toggle" data-toggle="dropdown" href="#">Camps
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
									<li><a href="school-location.html" class="clubs-hover">School Locations</a></li>
									<li><a href="available-clubs.html" class="clubs-hover">Available Clubs</a></li>
								</ul>
						</li>

						<li><a href="form-sign-up.html" id="end">Contact</a></li>
					</ul>
				</div>
			</nav>
		<!-- Main Section -->
			<div>
				<div class="container-fluid">
                    <h1 id="mobile-title">Tutoring</h1>
					<div id="subject-row" >
						<!-- id has background-image: tutoring-head.png -->
						<div class="body-text">
							<div class="row">
								<div class="col-sm-6">
									<img src="images/tutoring/tutoring-header.png" style="width: 100%;">
								</div>
								<div class="col-sm-6">

									<!--
										I believe we need to create a database first with dream host after
										that we take the information (server name, username, and password)
										and that should allow us to connect the php to the database we setup
										after that is all done we connect the forms with php and we should be
										good to go

										Maybe see if I can meet john on monday, tuesday, or wednesday
										(or go to the office each day to work on the site) to set that all up

										also can't login to dreamhost that needs to be resolved unless I need to use SSH to access the site

										also thinking about creating the database it might be a good idea for each 
										form filled out to have the date that it was added to the database
										as I imagine after a while it might become a mess if there is no data to show the date or a number system idk


										********* MySQL Database instructions *************
										https://help.dreamhost.com/hc/en-us/articles/221691727-Creating-a-MySQL-database
									-->

									<!-- FORM FOR MORE INFORMATION -->
									<!-- NEED TO FILL OUT ACTION SECTION ONCE FRONTEND IS DONE -->
									<form class="more-info-form" action="tutoring-info.php" method="post">
										<!-- Change font for more information title to Spy Agency font -->
										<img src="images/tutoring/want-more-info-white.svg" id="form-title-img">
										<div class="form-group">
											<div class="row">
												<label for="inlineFormFirstName" class="col-sm-2">Name:</label>
												<div class="col-sm-10">
													<input type="text" name="name-tutor" class="form-control" id="formFullName-Tutor" placeholder="Your Name">
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="row">
												<label for="inlineFormEmail" class="col-sm-2">Email:</label>
												<div class="col-sm-10">
													<input type="text" name="email-tutor" class="form-control" id="formEmail-Tutor" placeholder="Your Email">
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="row">
												<label for="inlineFormPhone" class="col-sm-2">Phone:</label>
												<div class="col-sm-10">
													<input type="text" name="phone-tutor"class="form-control" id="formPhone-Tutor" placeholder="(000) 000 - 0000">
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
										// need to create a sql connection


									?>
								</div>
							</div>
						</div>
						<div class="row body-text" id="topic-box-background">

                            <div class="col-sm-6">
							<!-- List of topics header -->
							<img src="images/tutoring/click-for-topics.svg" id="topic-select-img">
                                <div class="row">
									<!-- First row of topics (Math and English) -->
									<div class="col-sm-2">
										<!-- EMPTY SPACE -->
									</div>
                                    <div class="offset-sm-2 col-sm-5">
                                        <!-- Math image -->
                                        <div  class="tutor-img" id="sub-math-img">
                                            <img src="images/subject-icons/math.svg">
                                            <br>
                                            <b>Math</b>
                                        </div>
                                        <img src="images/subject-icons/math-mobile.png" class="tutor-img-mobile" id="sub-math-img-mobile">
                                        <div id="math-info">								
                                            <ul class="topics" id="math-list">
                                                <li>Calculus</li>
                                                <li>Pre-Calculus</li>
                                                <li>Trigonometry</li>
                                                <li>Geometry</li>
                                                <li>Algebra I/II</li>
                                                <li>Pre-Algebra</li>
                                                <li>General Math (TK-8)</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <!-- English image -->
                                        <div class="tutor-img" id="sub-eng-img">
                                            <img src="images/subject-icons/reading.svg">
                                            <br>
                                            <b>English</b>
                                        </div>
                                        <img src="images/subject-icons/english-mobile.png" class="tutor-img-mobile" id="sub-eng-img-mobile">
                                        <div id="eng-info">
                                            <ul class="topics" id="eng-list">
												<li>Reading</li>
												<li>Writing</li>
												<li>Spelling & Vocabulary</li>
												<li>Grammer</li>
												<li>Essay Prep</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
									<!-- Second row of topics (Science and Test Prep) -->
									<div class="col-sm-2">
										<!-- EMPTY SPACE -->
									</div>
									<div class="offset-sm-2 col-sm-5">
                                        <!-- Science image -->
                                        <div class="tutor-img" id="sub-sci-img">
                                            <img src="images/subject-icons/science.svg">
                                            <br>
                                            <b>Science</b>
                                        </div>
                                        <img src="images/subject-icons/science-mobile.png" class="tutor-img-mobile" id="sub-sci-img-mobile">
                                        <div id="sci-info">
                                            <ul class="topics" id="sci-list">
												<li>Physics</li>
												<li>Chemistry</li>
												<li>Biology</li>
												<li>Environmental Science</li>
												<li>General Science</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <!-- Test Prep image -->
                                        <div class="tutor-img" id="sub-prep-img">
                                            <img src="images/subject-icons/testprep.svg">
                                            <br>
                                            <b>Test Prep</b>
                                        </div>
                                        <img src="images/subject-icons/testprep-mobile.png" class="tutor-img-mobile" id="sub-prep-img-mobile">
                                        <div id="prep-info">
                                            <ul class="topics" id="prep-list">
												<li>A.C.T. Math</li>
												<li>P.S.A.T. Math</li>
												<li>S.A.T. Math</li>
												<li>S.A.T. II Math</li>
												<li>AP Calculus AB/BC</li>
												<li>AP Statistics</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div id="form-bg-img">
                                </div>
                            </div>
						</div>
					</div>

					<!-- Topic info and more info form -->
				</div>
				<!-- Section about our tutors -->
				<div class="body-text">
					<img src="images/tutoring/meet-the-tutors.svg" id="meet-tutor-img">
					<div class="row tutor-desc">
						<div class="col-sm-8">
							<!--
								id="tutor-name" replace tutor name with the name of the tutor
							-->
							<h2 class="tutor-name" id="tutor-name">Lauren Yates<i class="caret-mobile"></i></h2>
							<ul class="tutor-info-mobile" id="tutor-name">
								<li><b>Background:</b> Graduated from California State University, Long Beach with a Bachelor of Science: focus on Human Resources.
									<p>Currently earning a middle school science teaching crednetial</li>
								<li><b>Tutor Categories:</b> SAT prep, English, Science, and Math up to algebra 2</li>
							</ul>
						</div>
						<div class="offset-sm-1 col-sm-3">
							<img src="images/tutoring/tutor-img/lauren-y.jpg" class="tutor-face-img">
						</div>
					</div>
					<div class="row tutor-desc">
						<div class="col-sm-4">
							<img src="images/tutoring/tutor-img/lauren-s.jpg" class="tutor-face-img">
						</div>
						<div class="col-sm-8">
							<h2 class="tutor-name" id="tutor-name">Lauren S<i class="caret-mobile"></i></h2>
							<ul class="tutor-info-mobile" id="tutor-name">
								<li><b>Background:</b> Currently pursuing a degree in Mechanical Engineering</li>
								<li><b>Tutor Categories:</b> SAT prep</li>
							</ul>
						</div>
					</div>
				</div>
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