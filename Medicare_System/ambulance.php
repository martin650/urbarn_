<?php 
	include './resources/config.php';

	if(isset($_POST['book'])){
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$location = $_POST['location'];

		$error = array();

		if(empty($fname)){
			$error['ac'] = "Enter firstname";
		}else if(empty($lname)){
			$error['ac'] = "Enter lastname";
		}else if(empty($email)){
			$error['ac'] = "Enter email";
		}else if(empty($phone)){
			$error['ac'] = "Enter phone number";
		}else if(empty($location)){
			$error['ac'] = "Enter location";
		}
		if(count($error)==0){
			$query = "INSERT INTO ambulance (firstname,lastname,email,phone,location,time_booked) 
						VALUES ('$fname','$lname','$email','$phone','$location',NOW())";
			$res = mysqli_query($conn, $query);
			if($res){
				header("location:./ambulance.php");
			}else{
				echo "<script>alert('Failed')</script>";
			}
		}

	}
?><!DOCTYPE html>
<html lng='en'>
	<head>
		<title>Ambulance</title>
		<link rel="stylesheet" href="./css/navbar.css">
		<link rel="stylesheet" href="./css/footer.css">
		<link rel="stylesheet" href="./css/main.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
	</head>
	<body>
		<?php include './includes/navbar.php';?>

		<section class="book-appointment" style="padding-top:6%;">
			<h1 class="head"><span>BOOK AMBULANCE</span> SERVICES</h1>
			<div class="appoint">
				<div class="image">
					<img src="./gallery/image.jpg">
				</div>

				<form method="post">
					<div class="inputBox">
						<input type="text" class="form-control" name="fname" placeholder="firstname" required>
						<input type="text" class="form-control" name="lname" placeholder="lastname" required>
					</div>
					<div class="inputBox">
						<input type="email" class="form-control" name="email" placeholder="email" required>
						<input type="text" class="form-control" name="phone" placeholder="mobile number" required>

					</div>
					<textarea placeholder="location" name="location" class="form-control" cols="30" rows="10" required></textarea>
						<input type="submit" name="book" class="btn" value="REQUEST AMBULANCE">
				</form>
			</div>
		</section>

		<?php include './includes/footer.php';?>
	</body>
</html>