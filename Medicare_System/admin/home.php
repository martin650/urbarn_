<?php
	session_start(); 

?>
<!DOCTYPE html>
<html lang='en'>
	<head>
		<title>ADMIN SECTION</title>
		<link rel="stylesheet" href="./css/home.css">
		<link rel="stylesheet" href="./css/sidebar.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
	</head>
	<body>

		<?php include './includes/sidebar.php';?>

			<h3 class="name"><i class="fas fa-chalkboard"></i>DASHBOARD</h3>

			<?php
				include '../resources/config.php';
				$query = mysqli_query($conn, "SELECT * FROM admin");
				$number = mysqli_num_rows($query);
			?>
			<?php 
				include '../resources/config.php';
				$doctors = mysqli_query($conn, "SELECT * FROM doctors");
				$number1 = mysqli_num_rows($doctors);
			?>
			<?php 
				include '../resources/config.php';
				$patient = mysqli_query($conn, "SELECT * FROM patients");
				$number2 = mysqli_num_rows($patient);
			?>
			<?php 
				include '../resources/config.php';
				$appointment = mysqli_query($conn, "SELECT * FROM appointment");
				$number3 = mysqli_num_rows($appointment);
			?>
			<?php 
				include '../resources/config.php';
				$ambulance = mysqli_query($conn, "SELECT * FROM emergency");
				$number4 = mysqli_num_rows($ambulance);
			?>
						<?php 
				include '../resources/config.php';
				$subs = mysqli_query($conn, "SELECT * FROM subscribers");
				$number5 = mysqli_num_rows($subs);
			?>
			<?php 
				include '../resources/config.php';
				$booked_bed = mysqli_query($conn, "SELECT * FROM bed");
				$number7 = mysqli_num_rows($booked_bed);
			?>

			<div class="info">
				<div class="info-box">
					<i class="fas fa-users"></i>
					<div>
						<a href="./admin.php">
							<h3><?php echo $number;?></h3>
							<span>Total Admin</span>
						</a>
					</div>
				</div>

				<div class="info-box">
					
					<i class="fas fa-user-md"></i>
					<div>
						<a href="./doctors.php">
							<h3><?php echo $number1;?></h3>
							<span>Total Doctors</span>
						</a>
					</div>
				</div>
				<div class="info-box">
					<i class="fas fa-user-injured"></i>
					<div>
						<a href="./patient.php">
							<h3><?php echo $number2;?></h3>
							<span>Total Patients</span>
						</a>
					</div>
				</div>
				<div class="info-box">
					<i class="fas fa-book-medical"></i>
					<div>
						<a href="./appointment.php">
							<h3><?php echo $number3;?></h3>
							<span>Total Appointments</span>
						</a>
					</div>
				</div>
				<div class="info-box">
					<i class="fas fa-ambulance"></i>
					<div>
						<a href="./ambulance_req.php">
							<h3><?php echo $number4;?></h3>
							<span>Ambulance Request</span>
						</a>
					</div>
				</div>
				
				<div class="info-box">
					<i class="fas fa-sign-in-alt"></i>
					<div>
						<a href="./subscribers.php">
							<h3><?php echo $number5;?></h3>
							<span>Subscribers</span>
						</a>
					</div>
				</div>

				<div class="info-box">
					<i class="fas fa-procedures"></i>
					<div>
						<a href="./bed.php">
							<h3><?php echo $number7;?></h3>
							<span>Booked Bed</span>
						</a>
					</div>
				</div>
				
			</div>
		</section>
	
	</body>
</html>