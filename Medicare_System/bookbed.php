<?php 
	include './resources/config.php';

	if(isset($_POST['book'])){
		$name = $_POST['name'];
		$phone = $_POST['phone'];
		$gender = $_POST['gender'];
		$ward_name = $_POST['ward'];
		$room_type = $_POST['room'];
		$date = $_POST['date'];
		
		

		$error = array();

		if(empty($name)){
			$error['ac'] = "Enter name";
		}else if(empty($phone)){
			$error['ac'] = "Enter phone number";
		}else if($gender == ""){
			$error['ac'] = "Select gender";
		}else if($ward == ""){
			$error['ac'] == "Select ward";
		}else if($room == ""){
			$error['ac'] = "Select room";
		}
		if(count($error)==0){
			$query = "INSERT INTO booked_bed (name,phone,gender,ward_name,room_type,dob,date_booked) 
						VALUES ('$name','$phone','$gender','$ward_name','$room_type','$date',NOW())";
			$res = mysqli_query($conn, $query);
			if($res){
				header("location:./bookbed.php");
			}else{
				echo "<script>alert('Failed')</script>";
			}
		}

	}
?>
<!DOCTYPE html>
<html lang='en'>
<head>
	<title>AFIA CARE</title>
	<link rel="stylesheet" href="./css/main.css">
	<link rel="stylesheet" href="./css/footer.css">
	<link rel="stylesheet" href="./css/navbar.css">
	<link rel="stylesheet" href="./css/bookbed.css">
	<!--bootstrap-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
	<!--fontawesome-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

</head>
<body>

	<?php include './includes/navbar.php';?>

	<div class="book-bed">
		<div class="form">
		<div class="form-text">
			<h1 class="head"><span>Book Now<i class="fa fa-h-square" aria-hidden="true"></i></span></h1>
			<p>Book a bed and instantly get a reply on the bed number allocated</p>
		</div>
		<div class="form-main">
			<form action="" method="post">
				<div>
					<span><i class="fa fa-male" aria-hidden="true"></i>PATIENT NAME</span>
					<input type="text" name="name" id="name"  placeholder="patient name" required>
				</div>
				<div>
					<span><i class="fa fa-mobile" aria-hidden="true"></i>MOBILE NUMBER</span>
					<input type="text" name="phone" id="number" placeholder="mobile number" required>
				</div>
				<div>
					<span>Gender</span>
					<select name="gender" id="ward">
						<option>--select gender--</option>
						<option value="male">male</option>
						<option value="female">female</option>
						
					</select>
				</div>
				<div>
					<span>WARD NAME</span>
					<select name="ward" id="ward">
						<option>--select ward--</option>
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
					<select name="room" id="ward">
						<option>--select room type--</option>
						<option value="special">Special Room</option>
						<option value="common">Common Room</option>
						
					</select>
				</div>
				<div>
					<span><i class="far fa-calendar"></i>DATE OF BIRTH</span>
					<input type="date" name="date" id="date" placeholder="date of birth" required>
				</div>
				

				<input type="submit" value="Book Bed" name="book" class="submit">

			</form>
		</div>
	</div>
	</div>

	<?php include './includes/footer.php';?>
</body>

<script src="./js/main.js"></script>
</body>
</html>


