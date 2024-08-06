<?php 
	session_start();
	include './resources/config.php';

	if(isset($_POST['login'])){

		$sname = $_POST['sname'];
		$pass = $_POST['pass'];

		if(empty($sname)){
			echo "<script>alert('Enter surname')</script>";
		}else if(empty($pass)){
			echo "<script>alert('enter password')</script>";
		}else{
			$pass = md5($pass);
			$query = "SELECT * FROM patients WHERE surname='$sname' AND password='$pass'";
			$res = mysqli_query($conn, $query);

			if(mysqli_num_rows($res) == 1){
				header("location:./patient/patient_index.php");
				echo "<script>alert('You have logged in successfully')</script>";

				$_SESSION['patient'] = $sname;
			}else{
				echo "<script>alert('Invalid ')</script>";
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
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">


		<!--fontawesome cdn-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">s
	</head>
	<style>

		.body{
			display:grid;
			align-items:center;
			justify-content:center;
			height:80%;
		}
		.signin{
			width:580px;
			background:#fff;
			border-radius:15px;
			box-shadow:0px 15px 20px rgba(0,0,0,0.1);
		}
		.signin .title{
			line-height:40px;
			font-size:25px;
			font-weight:normal;
			text-align:center;
			border-radius:15px 15px 0px 0px;
			background:linear-gradient(-135deg, #c850c0, #4158d0)
		}
		.signin form{
			padding:10px 30px 50px 30px;
		}
		.signin form .field{
			height:50px;
			position:relative;
			width:100%;
			margin-top:20px;
		}
		.signin form .field input{
			height:100%;
			padding-left:20px;
			border-radius:25px;
			border:1px solid gray;
			outline:none;
			font-size:20px;
			width:100%;
			transition:all 0.3s ease;

		}
		a{
			text-decoration:none;
		}
		.signin form .field label{
			position:absolute;
			top:50%;
			left:20px;
			font-size:15px;
			color:#999;
			transform:translateY(-50%);
			pointer-events:none;
			transition:all 0.3s ease;
		}
		.sigin form .field input:focus{
			border-color:#4158d0;
		}
		.signin form .field input:focus ~ label{
			top:0%;
			color:#4158d0;
			font-size:14px;
			background:#fff;
			transform:translateY(-50%);
		}
		.signin form .signup-link,
		.signin form .pass-link{
			color:#4158d0;
			font-size:15px;
			margin:5px 0 0 10px;
		}
		.signin form .field input[type="submit"]{
			color:#fff;
			background:linear-gradient(-135deg, #c850c0,#4158d0);
			font-size:18px;
			font-weight:500;
			border:none;
			padding-left:0px;
			cursor:pointer;
		}
		
	</style>
	<body>
		<?php include './includes/navbar.php';?>
		<div class="body" style="padding-top:5%">
		<div class="signin" style="">
			<div class="title">Login</div>
			<form method="post">
				<div class="field">
					<input type="text" name="sname" class="form-control" placeholder="Surname" required>
					
				</div>

				<div class="field">
					<input type="password" name="pass" placeholder="Password" required>
					
				</div>
				<div class="pass-link"><a href="#">Forgot Password ?</a></div>
				<div class="field">
					<input type="submit" name="login" class="btn">
				</div>
				<div class="signup-link">Not yet a member ?<a href="./patient_signup.php">click here.</a></div>
			</form>
			
		</div>
	</div>
		<?php include './includes/footer.php';?>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
		<script src="./js/main.js"></script>
	</body>
</html>