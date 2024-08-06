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
			$query = "SELECT * FROM doctors WHERE surname='$sname' AND password='$pass'";
			$res = mysqli_query($conn, $query);

			if(mysqli_num_rows($res)==1){
				header("location:./doctor/doc_index.php");
				$_SESSION['doctor'] = $sname;
			}else{
				echo "<script>alert('Invalid ')</script>";
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
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
	</head>
	<style>
		*{
			margin:0;
			padding:0;
		}
		.head{
			text-align:center;
			padding-bottom:2rem;
			text-transform:uppercase;
			color:#333;
			font-size:3.5rem;
			letter-spacing:.4rem;
		}
		.head span{
			color:blue;
			background:lightblue;
			display:inline-block;
			padding:.2rem 1rem;
			clip-path:polygon(100% 0, 93% 50%, 100% 99%, 0% 100%, 7% 50%, 0% 0%);
		}
		.eye{
			position:absolute;
			right:0;
			padding:5px;
			font-size:15px;
			}
		main{
			height:55vh;
			width:100%;
			background:linear-gradient(45deg, #E91E63, #42A5F5)
		}
		.login-container{
			display:flex;
			flex-direction:column;
			justify-content:center;
			align-items:center;
			height:100%;
			width:100%;
		}
		.login-box{
			padding:70px 70px 50px 70px;
			background:#eee;
			display:flex;
			flex-direction:column;
			align-items:center;
			justify-content:center;
			position:relative;
			width:700px;
			font-size:10px;
		}
		.user-icon{
			background:blue;
			color:#fff;
			border-radius:50%;
			width:100px;
			height:100px;
			display:flex;
			align-items:center;
			justify-content:center;
			position:absolute;
			top:-50px;
		}
		.user-icon i{
			font-size:30px;
			color:#fff;
		}
		.login{
			width:100%;
		}
		.form-group{
			margin-bottom:5px;
		}
		input[type="text"].form-control, input[type="password"].form-control{
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
		label{
			display:flex;align-items:center;
			cursor:pointer;
		}
		label input[type="checkbox"]{
			width:20px;
			height:20px;
			margin-right:10px;
			cursor:pointer;
		}
		.form-group .btn{
			background:dodgerblue;
			color:#fff;
			padding:16px;
			display:block;
			width:100%;
			border:none;
			text-transform:uppercase;
			font-size:16px;
			cursor:pointer;
			transition:all .3s ease;
		}
		.form-group .btn:hover{
			box-shadow:2px 2px 2px blue;
		}
		.form-group a{
			color:blue;
		}
		.separater{
			width:100%;
			border-top:1px solid #f1f1f1;
			border-bottom:1px solid #f1f1f1;
			padding:7px 0;
			text-align:center;
			margin:8px 0;
			font-size:12px;
		}
		.social-login{
			display:flex;
			width:100%;
			justify-content:center;
		}
		.social-login a{
			display:inline-block;
			background:dodgerblue;
			color:#fff;
			padding:5px;
			margin-right:20px;
			text-decoration:none;
			transition:all .3s ease;
		}
		.error{
			margin:0px auto;
			padding:10px;
			color:red;
			border-radius:5px;
			text-align:left;
		}
		@media(max-width:800px){
		.login-container{
			padding-top:25%;
			height:50vh;
			width:100%;
			}	
		.form-group{
			padding-left:10%;
			padding-right:5%;
		}
		footer{
			padding-top:5%;
		}
		}
		@media(max-width:450px){
			.remedies-heading{
				padding-top:15%;
			}
		}	
	</style>
	<body>
		<?php include './includes/navbar.php';?>

		<main style="padding-top: 25%; padding-bottom: 18%;">
		<div class="login-container" >
			<div class="login-box">
				<div class="user-icon">
					<i class="fas fa-user-md"></i>
				</div>
				<form class="login" method="post">
					<div class="error">
			</div>
					<div class="form-group">
						<input type="text" name="sname" placeholder="surname" class="form-control" required>
					</div>
					<div class="form-group">
						<input type="password" name="pass" placeholder="password" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="remember me" style="left:0;">
							<input type="checkbox" name="remember me">Remember me
						</label>
					</div>
					<div class="form-group">
						<button class="btn" name="login">Login</button>
					</div>
					<div class="form-group">
						<p>Not yet Registered? <a href="./doc_signup.php">register here</a></p>
					</div>
				</form>
				<div class="separater">
					Or Login via Social Platforms
				</div>
				<div class="social-login">
					<a href="#">
						<i class="fab fa-facebook"></i>
						Facebook
					</a>
					<a href="#">
						<i class="fab fa-twitter"></i>
						Twitter
					</a>
				</div>
			</div>
		</div>
	</main>
		<?php include './includes/footer.php';?>
		<script src="./js/passshow.js"></script>
		<script src="./js/main.js"></script>
	</body>
</html>
