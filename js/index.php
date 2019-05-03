<!DOCTYPE html>
<html>
<head>
	<title>Owl Academy</title>
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Baloo" rel="stylesheet">

</head>
<body>
<div class="flex-center first-container" id="home">
	<div class="container">
		<div class="menu flex-center">
			<div class="menu-logo heading">Owl Academy</div>
			<div class="menu-content heading">
				<ul>
					<li><a href="#home">Home</a></li>
					<li><a href="#about">About Us</a></li>
					<li><a href="#contact">Contact Us</a></li>
				</ul>
			</div>
		</div>
		<div class="flex-top">
			<div class="first-container-content">
				<h1 class="heading heading-text">Online Learning</h1>
				<hr class="line-design">
				<p class="description"><strong style="font-weight:bold">Owl Academy</strong> give students the opportunity to plan study time around the rest of their day, instead of the other way around. Students can study and work at their convenience.</p>
				<br>
				<span class="button-container">
					<button class="btn-fill login">LOGIN</button>
					<button class="btn-transparent">REGISTER</button>
				</span>
				
			</div>
			<div class="first-container-image">
				<img class="img-responsive" src="img/First-Image.png">
			</div>
		</div>
	</div>
</div>
<div class="wave-container" id="about">
	<svg class="wave-qsoVIt"  viewBox="0 0 1440 100" preserveAspectRatio="none"><path class="wavePath-22lfEN" d="M826.337463,25.5396311 C670.970254,58.655965 603.696181,68.7870267 447.802481,35.1443383 C293.342778,1.81111414 137.33377,1.81111414 0,1.81111414 L0,150 L1920,150 L1920,1.81111414 C1739.53523,-16.6853983 1679.86404,73.1607868 1389.7826,37.4859505 C1099.70117,1.81111414 981.704672,-7.57670281 826.337463,25.5396311 Z" fill="currentColor"></path></svg>
</div>
<div class="flex-center second-container" >
	<div class="container">
		<div class="flex-center">
			<div class="second-container-image">
				<img class="img-responsive-2" src="img/Second-Image.png">
			</div>
			<div class="second-container-content">
				<h1 class="heading heading-text">Why Choose<br>Owl Academy?</h1>
				<hr class="line-design">
				<p class="description"><strong style="font-weight:bold">Owl Academy</strong> give students the opportunity to plan study time around the rest of their day, instead of the other way around. Students can study and work at their convenience.</p>
				<br>
				<span class="button-container">
					<button class="btn-fill">REGISTER NOW</button>
					
				</span>
			</div>
		</div>
	</div>
</div>
<div class="flex-center third-container" id="contact">
	<div class="container">
		<div class="third-container-title">
			<h1 class="heading heading-text" style="margin:0">Feedback Form</h1>
			<p class="description" style="margin:0">Come and give us a Feedback</p>
			<hr class="line-design-2">
		</div>
		
		<div class="flex-center">
			<div class="third-container-input-2 input-container">
				<label class="heading input-label">First Name:</label>
				<input class="input-design" type="text" name="" required="">
			</div>
			<div class="third-container-input-2 input-container">
				<label class="heading input-label">Last Name:</label>
				<input class="input-design" type="text" name="" required="">
			</div>
		</div>
		<div class="third-container-input" style="margin-bottom:20px;">
			<div class="input-container">
				<label class="heading input-label">Email:</label>
				<input class="input-design" type="text" name="" required>
			</div>
		</div>
		<div class="third-container-input">
			<div class="input-container">
				<label class="heading input-label">Message:</label>
				<textarea class="input-design" style="height:200px;resize:none;" name="" required=""></textarea>
			</div>
		</div>
	</div>
</div>
<footer class="flex-center">
	<div class="container">
		Owl Academy © 2019
	</div>
</footer>
<div class="modal-overlay">
	<div class="modal-setter flex-center">
		<div style="width:500px;height:500px;" class="tester">
			
		</div>
	</div>
</div>
</body>
<script src="js/jquery.js"></script>
<script type="text/javascript">
	$(function(){
		$(".login").click(function(){
			$(".modal-overlay").fadeIn(300);
		});
		$(".tester").click(function(){
			$(".modal-overlay").fadeOut(300);
		});
	});
</script>
</html>