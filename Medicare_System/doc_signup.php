<?php 
	include './resources/config.php';

	if(isset($_POST['create'])){
		$fname = $_POST['fname'];
		$sname = $_POST['sname'];
		$email = $_POST['email'];
		$gender = $_POST['gender'];
		$phone = $_POST['phone'];
		$department = $_POST['department'];
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
		}else if(empty($password)){
			$error['ac'] = "Enter password";
		}else if($con_pass != $password){
			$error['ac'] = "Both passwords don't match";
		}
		if(count($error)==0){
			$password = md5($password);
			$query="INSERT INTO doctors(firstname,surname,email,gender,phone,department,password) 
						VALUES ('$fname','$sname','$email','$gender','$phone','$department','$password')";
			$res = mysqli_query($conn, $query);
			if($res){
				header("location:./doc_login.php");
			}else{
				echo "<script>alert('Failed')</script>";
			}
		}

	}
?>
<!DOCTYPE html>
<html lang='en'>
	<head>
		<title>Doctors Signup</title>
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
	.error{
		margin:0px auto;
		padding:10px;
		color:red;
		border-radius:5px;
		text-align:left;
	}
	.eye{
		position:absolute;
		right:0;
		font-size:15px;
	}
	</style>
	
	<body>
		<?php include './includes/navbar.php';?>

		<div class="signup" style="padding-top:5%">
			<div class="signup-holder">
				<div class="image-holder">
					<img src="./image12.jpg" alt="doctor-signup" style="padding-top:12%;">
				</div>
			<form method="post">
				<h1 class="head"><span>DOCTORS REGISTRATION</span></h1>
				<div class="error">
				<?php 
					if(isset($error['login'])){

						$show = $error['login'];
					}else{
						$show = "";
					}
					echo $show;
				?>
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
					<option>Select Gender</option>
					<option value="Male">Male</option>
					<option value="Female">Female</option>
				</select>
				</div>

				<div class="form-class">
				<select name="department" class="form-control">
					<option>Select Department</option>
					<option value="Mental Unit">Mental Unit</option>
					<option value="Chronic Diseases">Chronic Diseases</option>
					<option value="Psychology">Psychology</option>
					<option value="Rehabilitation">Rehabilitation</option>
					<option value="Cancer Facility">Cancer Facility</option>
					<option value="Martenity">Martenity</option>
					<option value="Mother and Baby">Mother and Baby</option>
					<option value="Ear Nose & Throat">Ear Nose & Throat</option>
					<option value="Upendo">Upendo</option>
					<option value="Out Patient">Out Patient</option>
				</select>
				</div>

				<div class="form-class">
				<span class="eye" onclick="myFunction()">
					<i class="fas fa-fingerprint" id="show1"></i>
				</span>
					<input type="password" id="myInput" class="form-control" name="pass" placeholder="enter password" required>
				</div>

				<div class="form-class">
					<input type="password" class="form-control" name="con_pass" placeholder="confirm password" required>
				</div>

				<input type="submit" name="create" value="register">
				<p style="font-size:14px; padding-top:2rem;">Already have an account ? <a href="./doc_login.php">login</a></p>
			</form>
		</div>
		</div>
		<?php include './includes/footer.php';?>
		<script src="./js/passshow.js"></script>
		<script src="./js/main.js"></script>
	</body>
</html>