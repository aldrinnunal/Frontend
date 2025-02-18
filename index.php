<?php
include('connections/connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<!-- MYCSS -->
	<link href="css/login1.css" rel="stylesheet" type="text/css" /></link>
	<link href="css/style.css" rel="stylesheet" type="text/css" /></link>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<!-- JS -->

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="login.js"></script>
	<script src="https://kit.fontawesome.com/9fb78288eb.js" crossorigin="anonymous"></script>
	<script src="includes/modal.js"></script> 
	
</head>
<body>
	<!-- NAVBAR -->
		<nav>
			<div class="navbar-wrapper"><div><img src="/img/Glogo-white.png" alt=""  class="logo" srcset=""></div>
			<a href="#" class="toggle-button" onclick="myFunction()">
				<span class="bar"></span>
				<span class="bar"></span>
				<span class="bar"></span>
			</a>
			<div class="navbars-links" id="links">
				<ul>
					<li><a href="#head">HOME</a></li>
					<li><a href="#steps">STEPS</a></li>
					<li><a href="#aboutus">ABOUT US</a></li>
					<li><a href="#contact">CONTACT</a></li>
				</ul>
			</div>
		</div>
		</nav>
		
	<header>
		<div class="nav-wrapper" id="head">
			<div class="hero-section" >
			<div class="hero-col1">
				<h1>SEGREGATE WASTE<br> EARN POINTS<br> CLAIM PRIZES!!!</h1>
				<div class="hero-btn">
				<input type="button" value="SIGN UP" class="btn1" ></input>
				<button class="btn2"><a href="validate.php">Log In</a></button>
				</div>
			</div>
			<div class="hero-col2">
				<img src="img/grewardwhite.png" class="right-image">
			</div>
		</div>
		</div>
		<section class="title-card" id="steps">
			<div class="title-card-wrapper">
				<div><img src="img/Procedures.gif" class="title-card-img" id = "img"></div>
				<div class="title-card-text">
					<h1>GETTING STARTED</h1>
					<h3>Follow This Easy Steps To Claim Your Points. Prizes May Vary Monthly</h3>
				</div>
			</div>
		</section>
		<section class = "card-content">
			<div class="card-content-box">
				<div class="card-1 card-box">
					<img src="img/signup.png" alt="" srcset="">
					<h3>REGISTER</h3>
					<p>Create an account before segregating your non profitable and profitable waste</p>
				</div>
				<div class="card-2 card-box">
				<img src="img/login.png" alt="" srcset="">
					<h3>LOG IN</h3>
					<p>Log your account to your respective barangay for identification</p>
				</div>
				<div class="card-3 card-box" >
					<img src="img/throw.png" alt="" srcset="">
					<h3>DROP</h3>
					<p>Once the system recognized your identity, you can now drop all your trash in the bins.</p>
				</div>
			</div>
		</section>
		<!-- END OF CARD CONTENT -->
		<section class="about-us" id="aboutus">
			<div class="about-us-wrapper">
				<h1 > ABOUT US</h1>
				<p>G-Reward Is made by a group of students in Polytechnic University Of The Philippines - San Pedro Campus. We believe that we can motivate people to throw their garbage in a proper way and earning Cash or Prize in exchange. Our mission is to help the community in terms of cleanliness. It also helps the local government to earn funds for their future projects. We're excited and striving for a change in the environment of the community.</p>
			</div>
			<div class="aboutus-img"><img src="img/About us page.gif"></div>
		</section>
		<!-- END OF ABOUT US -->
		<section class="contact-us" id="contact">
			<div class="contact-us-wrapper">
			<img src="img/Contact us-pana.png" alt="">
			
			<form action="">
			<div class="form-group">
			<h1>CONTACT US</h1>
			<h3>Have any questions? Send a message</h3>
				<div class="form-group">
					
					<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Full Name">
				</div>
				<div class="form-group">
					
					<input type="email" class="form-control" id="exampleInputPassword1" placeholder="Email">
				</div>
				<div class="form-group">
				
					<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Subject">
				</div>
				<div class="form-group">
					
						<textarea class="form-control" id="exampleFormControlTextarea1" rows="3 fixed"placeholder="Message" ></textarea>
					</div><br>
				<button type="submit" class="btn btn-primary">Submit</button>
				</form>
				
			</div>
		</section>

		<section class="footer">
		<div class="footer-wrapper">
			<img src="img/Glogo-white.png" alt="">

	
			<ul class="footer-nav">
				<li><a href="">Home</a></li>
				<li><a href="">Steps</a></li>
				<li><a href="">About Us</a></li>
				<li><a href="">Contact Us</a></li>
			</ul>
		
			
			
			<ul class="footer-icons">
				 <li><a href=""><i class="fa-brands fa-github-square fa-lg"></i></a></li>
				 <li><a href=""><i class="fa-brands fa-facebook-square fa-lg"></i></a></li>
				 <li><a href=""><i class="fa-brands fa-instagram fa-lg"></i></a></li>
				 <li><a href=""><i class="fa-brands fa-twitter-square fa-lg"></i></a></li>
			</ul>

		
		</div>
		</section>



	</header>
</body>
</html>