<?php 
	session_start();
	include '../resources/config.php';
?>
<!DOCTYPE html>
<html lang='en'>
	<head>
		<title>Book Appointment</title>
		<link rel="stylesheet" href="../css/bookbed.css">
		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
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
		$gender = $row['gender'];

		if(isset($_POST['book'])){
			$ward = $_POST['ward'];
			$type = $_POST['type'];
			$food = $_POST['food'];
			$date = $_POST['date'];

			$error = array();

			if($ward == ""){
				$error['ac'] = "Select Ward name";
			}else if($type ==""){
				$error['ac'] = "Select Room Type";
			}else if($food == ""){
				$error['ac'] = "Select one option";
			}if(count($error)==0){

				$query = "INSERT INTO bed(surname,phone,gender,ward,type,catering,dob,status,date_booked)
					VALUES('$surname','$phone','$gender','$ward','$type','$food','$date','Active',NOW())";
				$res = mysqli_query($conn, $query);
				if($res){
					header('location:./bed_discharge.php');
					echo "<script>alert('You have booked successfully')</script>";
				}
			}
		}
	?>
		<div class="form">
		<div class="form-text">
			<h1 class="head"><span>Book Now<i class="fa fa-h-square" aria-hidden="true"></i></span></h1>
			<p>Book a bed and instantly get a reply on the bed number allocated</p>
		</div>
		<div class="form-main">
			<form method="post">
				<div>
					<span>WARD NAME</span>
					<select name="ward" id="ward">
						<option value="">--select ward--</option>
						<option value="kenyaward">Kenya Ward</option>
						<option value="mother&baby">Mother and Baby Ward</option>
						<option value="mentalunit">Mental Unit Ward</option>
						<option value="emergency">Emergency Ward</option>
						<option value="general">General Ward</option>
						<option value="theatre">Theatre Ward</option>
					</select>
				</div>
				<div>
					<span>ROOM TYPE</span>
					<select name="type">
						<option value="">--select room type--</option>
						<option value="special">Special Room</option>
						<option value="common">Common Room</option>
						
					</select>
				</div>
				<div>
					<span>Need of catering services</span>
					<select name="food">
						<option value="">--Choose an option--</option>
						<option value="yes">Yes</option>
						<option value="no">No</option>
						
					</select>
				</div>
				<div>
					<span><i class="far fa-calendar"></i>DATE OF BIRTH</span>
					<input type="text" class="disableFuturedate" name="date" id="date" placeholder="date of birth" required>
				</div>
				<input type="submit" value="Book Bed" name="book" class="submit">

			</form>
		</div>
	</div>
</div>
</div>
</body>
<script>
   $(document).ready(function () {
      var currentDate = new Date();
      $('.disableFuturedate').datepicker({
      format: 'dd/mm/yyyy',
      autoclose:true,
      endDate: "currentDate",
      maxDate: currentDate
      }).on('changeDate', function (ev) {
         $(this).datepicker('hide');
      });
      $('.disableFuturedate').keyup(function () {
         if (this.value.match(/[^0-9]/g)) {
            this.value = this.value.replace(/[^0-9^-]/g, '');
         }
      });
   });
</script>
</html>