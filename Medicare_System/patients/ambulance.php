<?php 
	session_start();
	include '../resources/config.php';
?>
<!DOCTYPE html>
<html lang='en'>
	<head>
		<title>Book Appointment</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
	</head>
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Oswald:wght@200&family=Roboto:wght@100&display=swap');
		*{
		text-transform:uppercase;
		font-family: 'Oswald', sans-serif;
		font-weight:normal;
		box-sizing:border-box;
		}
		a{
			text-decoration:none;
		}
		li{
			list-style:none;
		}
		h1{
			color:#eee;
		}
		.side-menu{
			position:fixed;
			background:royalblue;
			color:#eee;
			width:20vw;
			top:0;
			display:flex;
			min-height:100vh;
			flex-direction:column;
		}
		.side-menu .brand-name{
			height:10vh;
			display:flex;
			align-items:center;
			justify-content:center;
		}
		.side-menu li{
			font-size:20px;
			padding:10px 20px;
			display:flex;
			align-items:center;
		}
		.side-menu li:hover{
			background:#eee;
			color:#333;
		}
		.container{
			position:absolute;
			right:0;
			width:80vw;
			height:100vh;
			background:#f1f1f1;
		}
		.container .header{
			position:fixed;
			top:0;
			right:0;
			width:80vw;
			height:10vh;
			background:#eee;
			display:flex;
			align-items:center;
			justify-content:center;
			box-shadow:0 4px 8px 0 rgba(0,0,0,.2);
		}
		.container .header .nav{
			width:90%;
			display:flex;
			align-items:center;
		}
		.container .header .nav .search{
			flex:3;
			display:flex;
			justify-content:center;
		}
		.container .header .nav .search input[type="text"]{
			border:none;
			background:#f1f1f1;
			padding:10px;
			width:50%;
		}
		.container .header .nav .search button{
			width:40px;
			height:40px;
			border:none;
			align-items:center;
			justify-content:center;
		}
		.container .header .nav .search button i{
			width:30px;
			height:30px;
		}
		.container .header .nav .user{
			flex:1;
			display:flex;
			justify-content:space-between;
			align-items: center;
		}
		.btn{
			background:#333;
			color:#fff;
			padding:5px 10px;
			text-align:center;
		}
		.btn:hover{
			padding:3px 8px;
			cursor:none;
		}
		.container .header .nav .user .img-case{
			position:relative;
			width:80px;
			height:50px;
		}
		.container .header .nav .user img{
			width:40px;
			height:40px;
		}
		.container .header .nav .user .img-case img{
			position:absolute;
			top:0;
			left:0;
			width:100%;

		}
		.profile{
			padding-top:2%;
		}
		.profile img{
			padding-left:30%;
		}
		.table-section{
			padding-left:30%;
			padding-top:10px;
		}
		.Appointment{
			padding-left:20%;
			padding-top:10%;
		}
		form{
			background: teal;
			width: 740px;
			margin: 50px auto;
			max-width: 97%;
			border-radius:4px;
			padding: 55px 30px;
		}
		form .title h2{
			letter-spacing:6px;
			border-bottom:1px solid white;
			display:inline-block;
			padding-bottom:8px;
			margin-bottom: 32px;

		}
		form .half{
			display:flex;
			justify-content:space-between;
		}
		form .half .item{
			display:flex;
			flex-direction:column;
			margin-bottom:24px;
			width: 100%;
		}
		form label{
			display:block;
			color: #eee;
			font-size: 13px;
			letter-spacing:3px;
			margin-bottom:16px;
		}
		form .half .item input{
			border-radius:4px;
			border: 1px solid white;
			outline: none;
			padding: 12px;
			width: 100%;
			height: 44px;
			background:#fff;
		}
		form .full{
			margin-bottom:24px;
		}
		form .full input{
			background:#fff;
			border-radius:4px;
			border: 1px solid white;
			outline: none;
			padding: 12px 16px;
			width: 100%;
			height: 50px;
			font-size: 17px;
		}
		form .action{
			margin-bottom: 32px;
		}
		form .action input{
			background:#ffff;
			color: #333;
			border-radius:4px;
			border: 1px solid white;
			cursor:pointer;
			font-size: 13px;
			font-weight:normal;
			height:40px;
			letter-spacing:3px;
			outline:0;
			padding: 0 20px 0 22px;
		}
		h3{
			color:#000;
		}
	</style>
	
	<body>

		<div class="side-menu">
	<div class="brand-name">
		<h1>PATIENT</h1>
	</div>
	<ul>
		<li><a href="./patient_index.php" style="color:#fff;text-decoration:none;"><i class="far fa-clipboard"></i>&nbsp;Dashboard</a></li>
		<li><a href="./patient_profile.php" style="color:#fff;text-decoration:none;"><i class="far fa-address-card"></i>&nbsp;my Profile</a></li>
		<li><a href="./appointment.php" style="color:#fff;text-decoration:none;"><i class="far fa-calendar"></i>&nbsp;Book Appointment</a></li>
		<li><a href="./view_appointment.php" style="color:#fff;text-decoration:none;"><i class="far fa-calendar"></i>&nbsp;My Appointment</a></li>
		<li><a href="./invoice.php" style="color:#fff;text-decoration:none;"><i class="fas fa-book-reader"></i>&nbsp;my Invoice</a></li>
		<li><a href="./send_report.php" style="color:#fff;text-decoration:none;"><i class="fas fa-bell"></i>&nbsp;Send Reports</a></li>
		<li><a href="./view_report.php" style="color:#fff;text-decoration:none;"><i class="fas fa-bell"></i>&nbsp;View Reports</a></li>
		<li><a href="./logout.php" class="logout" style="color:#fff;text-decoration:none;"><i class="fas fa-sign-out-alt"></i>&nbsp;Logout</a></li>
	</ul>
</div>

<div class="container">
	<div class="header">
		<div class="nav">
			<div class="search">
				
			</div>
			<div class="user">
				<a href="#" class="btn" style="background:#eee;color:#eee;">Add</a>
				<!--<img src="./image.jpg" alt="">-->
				<div class="img-case" style="padding-top:5%;display:flex;">
					<?php

			if(isset($_SESSION['patient'])){
			$sname = $_SESSION['patient'];
			echo '
				<li><a><i class="far fa-user"></i>'.$sname.'</a></li>
				';
			}else{
				echo '

				';
			}

		?>
				</div>
			</div>
		</div>
	</div>
<div class="profile">
	<?php 
		$pat = $_SESSION['patient'];
		$sel = mysqli_query($conn,"SELECT * FROM patients WHERE surname='$pat'");

		$row = mysqli_fetch_array($sel);

		$surname = $row['surname'];
		$phone = $row['phone'];

		if(isset($_POST['request'])){
			$area = $_POST['location'];

			if(empty($area)){

			}else{
				$query = "INSERT INTO emergency(surname,phone,location,status,date_booked)VALUES('$surname','$phone','$area','Pending',NOW())";
				$res = mysqli_query($conn, $query);
				if($res){
					header("location:./patient_index.php");
					echo "<script>alert('You have booked successfully')</script>";

				}
			}
		}
	?>
	<form method="post">
		<div class="title">
			<h2>BOOK AMBULANCE NOW</h2>
		</div>
		
		<div class="full">
			<label>ENTER LOCATION</label>
				<input type="text" name="location" class="form-control" placeholder="enter location" required>
			</div>

		<div class="action">
			<input type="submit" name="request" value="book">
		</div>
	</form>
</div>
</div>
</html>