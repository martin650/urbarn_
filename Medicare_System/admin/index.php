<?php 
	session_start();
	include("../resources/config.php");

	if(isset($_POST['login'])){
		$username = $_POST['username'];
		$password = $_POST['password'];

		$error = array();

		if(empty($username)){
			$error['admin'] = "Kindly enter username";
		}else if(empty($password)){
			$error['admin'] = "KIndly enter password";
		}
		if(count($error)==0){
			$query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
			$result = mysqli_query($conn, $query);

			if(mysqli_num_rows($result)==1){
				echo "<script>alert('Successfully logged in as administrator')</script>";
				$_SESSION['admin'] = $username;
				header("location:./home.php");
			}else{
				echo "<script>alert('Invalid credentials')";
			}
		}
	}

?>
<!DOCTYPE html>
<html lang='en'>
	<head>
		<title>ADMIN SECTION</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
	</head>
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Advent+Pro:wght@200&family=Barlow:wght@100&family=Dosis:wght@200&family=Fira+Sans+Extra+Condensed:wght@200&family=Oswald:wght@200;300&family=PT+Sans&family=PT+Sans+Narrow&family=Roboto+Condensed:wght@300&family=Ubuntu+Condensed&display=swap');
		*{
			font-family: 'Advent Pro', sans-serif;
		}
		body{
			
			color:#333;
			font-size:14px;
			margin:0;
		}
		.error{
			margin:0px auto;
			padding:10px;
			color:red;
			border-radius:5px;
			text-align:left;
		}
		input{
			font-size:16px;
		}
		h3{
			margin:0;
		}
		img{
			max-width:100%;
		}
		:focus{
			outline:none;
		}
		.login-container{
			min-height:70vh;
			background-size:cover;
			background-repeat:no-repeat;
			display:flex;
			align-items:center
			justify-content:center;
		}
		.user{
			padding:20px;
			background:#fff;
			max-width:850px;
			margin:auto;
			display:flex;
		}
		.user .user-holder{
			width:50%;
		}
		.user form{
			width:50%;
			padding-top:1px;
			padding-left:45px;
			padding-right:45px;
		}
		.user h3{
			text-transform:uppercase;
			font-size:24px;
			text-align:center;
			margin-bottom:28px;
		}
		.form-group{
			position:relative;
		}
		.form-control{
			border:1px solid #333;
			border:none;
			border-bottom:1px solid #333;
			display:block;
			width:100%;
			height:30px;
			padding-right:0;
			margin-bottom:25px;
		}
		.btn{
			padding:9px 30px;
			margin-top:2px;
			background-color:#333;
			color:#fff;
			border:none;
			outline:none;
			border-radius:20px;
			width:48%;
			font-weight:bold;
		}		
		.btn:hover{
			cursor:pointer;
			background:dodgerblue;
		}
		.eye{
			position:absolute;
			right:0;
		}
		::placeholder{
			font-weight:200;
		}
		.footer{
			padding:5px 0;
			background:#fff;
		}
		.footer .social{
			text-align:center;
			padding-bottom:5px;
			color:#4b4c4d;
		}
		.footer .social a{
			font-size:20px;
			text-decoration:none;
			color:inherit;
			width:40px;
			height:40px;
			line-height:30px;
			display:inline-block;
			text-align:center;
			border-radius:50%;
			opacity:0.75;
			margin:0 8px;
			font-size:1.6rem;
		}
		.footer .social a:hover{
			opacity:0.9;
		}
		.footer ul{
			margin-top:0;
			padding:0;
			list-style:none;
			font-size:16px;
			line-height:1.6;
			margin-bottom:0;
			text-align:center;
		}
		.footer ul li a{
			color:inherit;
			text-decoration:none;
			opacity:0.8;
		}
		.footer ul li{
			display:inline-block;
			padding:0 15px;
		}
		.footer ul li a:hover{
			opacity:1;
		}
		.footer .copyright{
			margin-top:14px;
			text-align:center;
			font-size:12px;
			color:royalblue;
		}


	</style>
	<body>


		<div class="login-container">
			<div class="user">
				<div class="user-holder">
					<img src="./profile15.jpg" alt="admin">
				</div>

		<form method="post">
			<h3>Administrator Login</h3>
			<div class="error">
				<?php 
					if(isset($error['admin'])){

						$show = $error['admin'];
					}else{
						$show = "";
					}
					echo $show;
				?>
			</div>
			<div class="form-group">
				<input type="text" name="username" class="form-control" autocomplete="off" placeholder="enter username">
			</div>

			<div class="form-group">
				<span class="eye" onclick="myFunction()">
					<i class="fas fa-fingerprint" id="show1"></i>
				</span>
				<input type="password" id="myInput" class="form-control" name="password" placeholder="enter password">
				
			</div>
			<input type="submit" class="btn" name="login" value="login">
		</form>
	</div>
	</div>

	<?php include './includes/footer.php';?>
	<script src="./js/showpass.js"></script>
	</body>
</html>