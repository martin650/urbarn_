<?php 
	include './resources/config.php';

	if(isset($_POST['create'])){
		$fname = $_POST['fname'];
		$sname = $_POST['sname'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$gender = $_POST['gender'];
		$password = $_POST['pass'];
		$con_pass = $_POST['con_pass'];

		$error = array();

		if(empty($fname)){
			$error['ac'] = "Enter firstname";
		}else if(empty($sname)){
			$error['ac'] = "Enter surname";
		}else if(empty($email)){
			$error['ac'] = "Enter email";
		}else if(empty($phone)){
			$error['ac'] = "Enter phone number";
		}else if($gender == ""){
			$error['ac'] = "Select gender";
		}else if(empty($password)){
			$error['ac'] = "Enter password";
		}else if($con_pass != $password){
			$error['ac'] = "Both passwords donot match";
		}
		if(count($error)==0){
			$password = md5($password);
			$query = "INSERT INTO patients (firstname,surname,email,phone,gender,password,date_reg,profile) 
						VALUES ('$fname','$sname','$email','$phone','$gender','$password',NOW(),'image1.jpg')";
			$res = mysqli_query($conn, $query);
			if($res){
				echo "<script>alert('You have registered successfully')</script>";
				header("location:./patient_signin.php");
			}else{
				echo "<script>alert('Failed')</script>";
			}
		}

	}
?>
<!DOCTYPE html>
<html lang='en'>
	<head>
		<title>Patients Signup</title>
		<link rel="stylesheet" href="./css/doc_signup.css">
		<link rel="stylesheet" href="./css/navbar.css">
		<link rel="stylesheet" href="./css/footer.css">
		<!--fontawesome cdn-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">s
	</head>
	<style>
		.head{
		text-align:center;
		padding-bottom:2rem;
		text-transform:uppercase;
		color:#333;
		font-size:1.2rem;
		letter-spacing:.4rem;
	}
	.head span{
		color:blue;
		background:lightblue;
		display:inline-block;
		padding:.2rem 5rem;
		clip-path:polygon(100% 0, 93% 50%, 100% 99%, 0% 100%, 7% 50%, 0% 0%);
	}
	img{
		max-width:100%;
	}
	:focus{
		outline:none;
	}
	.signup{
		min-height:100vh;
		background:cover;
		background-repeat:no-repeat;
		display:flex;
		align-items:center;
		justify-content:center;
	}
	.signup-holder{
		padding:20px;
		background:#fff;
		max-width:850px;
		margin:auto;
		display:flex;
	}
	.signup-holder .image-holder{
		width:50%;
		height:300px;
	}
	.signup-holder form{
		width:50%;
		padding-top:10px;
		padding-left:45px;
		padding-right:45px;
	}
	.signup-holder form h1{
		text-transform: uppercase;
		font-size:14px;
		text-align:center;
		margin-bottom:5px;
	}
	.form-group{
		display:flex;
	}
	.form-group input{
		width:50%;
	}
	.form-group input:first-child{
		margin-right:25px;
	}
	.form-class{
		position:relative;
	}
	.form-control{
		border:1px solid #333;
		background:#fff;
		border:none;
		border-bottom:1px solid #333;
		display:block;
		width:100%;
		height:30px;
		padding-right:0;
		margin-bottom:20px;
	}
	select{
		cursor:pointer;

	}
	select option[value=""][disabled]{
		display:none;
	}
	.eye{
			position:absolute;
			right:0;
			font-size:15px;
		}
	#message{
		position:absolute;
		display:none;
		bottom:-20px;
		color:#333;
		font-size:10px;
	}

	</style>
	
	<body>
		<?php include './includes/navbar.php';?>

		<div class="signup" style="padding-top:5%">
			<div class="signup-holder">
				<div class="image-holder">
					<img src="./patient.jpg" alt="doctor-signup" style="padding-top:12%;">
				</div>
			<form method="post">
				<div class="error">
					<?php ;?>
				</div>
				<div class="form-group">
					<input type="text" name="fname" class="form-control" placeholder="enter firstname" required>
					<input type="text" name="sname" class="form-control" placeholder="enter surname" required>
				</div>
				<div class="form-class">
					<input type="email" name="email" class="form-control" placeholder="enter email" required>
				</div>

				<div class="form-class">
					<input type="text" class="form-control" placeholder="enter phone number" name="phone" required>
				</div>
				<div class="form-class">
				<select name="gender" class="form-control">
					<option value="">Select Gender</option>
					<option value="male">Male</option>
					<option value="female">Female</option>
				</select>
				</div>
				<div class="form-class">
					<span class="eye" onclick="myFunction()">
					<i class="fas fa-fingerprint" id="show1"></i>
				</span>
					<input type="password" id="myInput" class="form-control" name="pass" placeholder="enter password" required>
					<p id="message">Password is <span id="strength"></span></p>
				</div>
				<div class="form-class">
					<input type="password" class="form-control" name="con_pass" placeholder="confirm password" required>
				</div>
				<input type="submit" name="create" value="register">
				<p style="font-size:14px; padding-top:2rem;">Already have an account ? <a href="./patient_signin.php">login</a></p>
			</form>
		</div>
	</div>
		<?php include './includes/footer.php';?>
		<script src="./js/passshow.js"></script>
		<script src="./js/main.js"></script>
	</body>
</html>