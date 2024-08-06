<!DOCTYPE html>
<html lan='en'>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Comptible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>AFIA CARE</title>
		<link rel="stylesheet" href="./css/main.css">
		<link rel="stylesheet" href="./css/navbar.css">
		<link rel="stylesheet" href="./css/aboutus.css">
		<link rel="stylesheet" href="./css/footer.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
	</head>
	<style>
	@media(max-width:800px){
		.head{
			padding-top:15%;
		}	
	}
	@media(max-width:450px){
		.services{
			padding-top:15%;
		}
	}
	</style>
	<body>
		<?php include './includes/navbar.php';?>
		
		<section class="doctors" style="padding-top:7%;">
			<h1 class="head"><span>Health workers of the month</span></h1>
			<div class="box-container">
				<div class="doctors-box">
					<img src="./team/image1.jpg">
					<h3>Dr. Carly Lever</h3>
					<div class="social">
						<a href="#" class="fab fa-facebook-f"></a>
						<a href="#" class="fab fa-twitter"></a>
						<a href="#" class="fab fa-instagram"></a>
						<a href="#" class="fas fa-envelope"></a>
					</div>
				</div>
				<div class="doctors-box">
					<img src="./team/image2.jpeg">
					<h3>Dr. Aaron Glassman</h3>
					<div class="social">
						<a href="#" class="fab fa-facebook-f"></a>
						<a href="#" class="fab fa-twitter"></a>
						<a href="#" class="fab fa-instagram"></a>
						<a href="#" class="fas fa-envelope"></a>
					</div>
				</div>
				<div class="doctors-box">
					<img src="./team/image3.jpg">
					<h3>r. Alex Park</h3>
					<div class="social">
						<a href="#" class="fab fa-facebook-f"></a>
						<a href="#" class="fab fa-twitter"></a>
						<a href="#" class="fab fa-instagram"></a>
						<a href="#" class="fas fa-envelope"></a>
					</div>
				</div>
				<div class="doctors-box">
					<img src="./team/image4.jpg">
					<h3>Dr. Marcus Andrews</h3>
					<div class="social">
						<a href="#" class="fab fa-facebook-f"></a>
						<a href="#" class="fab fa-twitter"></a>
						<a href="#" class="fab fa-instagram"></a>
						<a href="#" class="fas fa-envelope"></a>
					</div>
				</div>
				<div class="doctors-box">
					<img src="./team/image5.jpg">
					<h3>Dr. Elle McLean</h3>
					<div class="social">
						<a href="#" class="fab fa-facebook-f"></a>
						<a href="#" class="fab fa-twitter"></a>
						<a href="#" class="fab fa-instagram"></a>
						<a href="#" class="fas fa-envelope"></a>
					</div>
				</div>
				<div class="doctors-box">
					<img src="./team/image6.png">
					<h3>Dr. Jared Kalu</h3>
					<div class="social">
						<a href="#" class="fab fa-facebook-f"></a>
						<a href="#" class="fab fa-twitter"></a>
						<a href="#" class="fab fa-instagram"></a>
						<a href="#" class="fas fa-envelope"></a>
					</div>
				</div>
				<div class="doctors-box">
					<img src="./team/image7.png">
					<h3>Dr. Claire Browne</h3>
					<div class="social">
						<a href="#" class="fab fa-facebook-f"></a>
						<a href="#" class="fab fa-twitter"></a>
						<a href="#" class="fab fa-instagram"></a>
						<a href="#" class="fas fa-envelope"></a>
					</div>
				</div>
				<div class="doctors-box">
					<img src="./team/image8.jpeg">
					<h3>Dr. Neil Melendez</h3>
					<div class="social">
						<a href="#" class="fab fa-facebook-f"></a>
						<a href="#" class="fab fa-twitter"></a>
						<a href="#" class="fab fa-instagram"></a>
						<a href="#" class="fas fa-envelope"></a>
					</div>
				</div>
				
			</div>
		</section>
		<?php include './includes/footer.php';?>
	<script>
		let navbar=document.querySelector('.navbar');
		document.querySelector('#menu-btn').onclick = () =>{
			navbar.classList.toggle('active')
		}
		window.onscroll = () =>{
			navbar.classList.remove('active')
		}
	</script>
	</body>
</html>