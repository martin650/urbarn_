<!DOCTYPE html>
<html lang='en'>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>EQUITY AFIA</title>
		<link rel="stylesheet" href="./css/navbar.css">
		<link rel="stylesheet" href="./css/footer.css">
		<link rel="stylesheet" href="./css/main.css">
		<!--fontawesome cdn-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
	</head>
	<body>
		<?php include './includes/navbar.php';?>

		<section class="home" style="background-image: url('./Hospital.jpeg'); font-style:bold;">
			<div class="main">
				<h3>QUALITY <span>HEALTH CARE</span> QUALITY LIFE</h3>
				<p>
					The art of medicine consists of amusing the patient while nature cures the disease.
				</p>
				<a href="./patient_signup.php" class="main-btn">BOOK APPOINTMENT</a>		
			</div>
		</section>
		<section class="facility">
			<h1 class="head"><span>AFIACARE</span> INFRASTRUCTURE</h1>
			<div class="facility-container">

			<div class="facility-box">
					<i class="fas fa-user-md"></i>
					<p>Doctors</p>
				</div>
				<div class="facility-box">
					<i class="fas fa-user-nurse"></i>
					<p>Nurses</p>
				</div>
				<div class="facility-box">
					<i class="fas fa-person-booth"></i>
					
					<p>Social workers</p>
					
				</div>
				<div class="facility-box">
					<i class="fas fa-diagnoses"></i>		
					
					<p>Surgeons</p>
				</div>
				<div class="facility-box">
					<i class="fas fa-diagnoses"></i>		
				
					<p>Labartories</p>
				</div>
				<div class="facility-box">
					<i class="fas fa-ambulance"></i>
					<p>Ambulances</p>
				</div>
				<div class="facility-box">
					<i class="fas fa-bed" aria-hidden="true"></i>
					<p>Ward rooms</p>
				</div>
				<div class="facility-box">
					<i class="fas fa-capsules"></i>
					<p>Pharmacy's</p>
				</div>
				<div class="facility-box">
					<i class="fas fa-stethoscope"></i>
					<p>Radiology</p>
				</div>
				<div class="facility-box">
					<i class="fab fa-laravel"></i>
					<p>Intensive care unit</p>
				</div>
		</section>

		<?php include './includes/footer.php';?>
		<script src="./js/main.js"></script>
	</body>
</html>