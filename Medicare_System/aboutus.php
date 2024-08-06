<!DOCTYPE html>
<html lang='en'>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>EQUITY AFIA</title>
		<link rel="stylesheet" href="./css/navbar.css">
		<link rel="stylesheet" href="./css/footer.css">
		<link rel="stylesheet" href="./css/main.css">
		<!--fontawesome cdn-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
	</head>
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Oswald:wght@200&family=Roboto:wght@100&display=swap');
		*{
			font-family: 'Oswald', sans-serif;
			font-weight:normal;
			margin:0;
			padding:0;
			box-sizing:border-box;
			text-transform:uppercase;
		}
		html{
			
		}
		.about{
			display:flex;
			align-items:center;
			flex-wrap:wrap;
			background:#eee;
			padding:3rem 10rem;
			gap:2rem;
			margin:5rem auto;
		}
		.about .image{
			flex:1 1 1rem;
		}
		.about .image img{
			width:350px;
			align-items:center;
			padding:0.1rem;
			border:3px solid royalblue;
		}
		.about .content{
			flex:1 1 40rem;
		}
		.about .content .head{
			font-size:4rem;
			color:#222;
			text-transform:uppercase;
		}
		.about .content p{
			color:#666;
			font-size:1.9rem;
			padding:1rem 0;
			line-height:2;
		}
		button{
			width:140px;
			height:45px;
			font-size:23px;
			cursor:pointer;
			border:none;
			outline:none;
			color:rgb(94,92,92);
			font-weight:600;
			position:relative;
			transition:all .5s;
			z-index:1;
		}
		button::before{
			content:"";
			position:absolute;
			top:0;
			height:100%;
			left:-3px;
			width:5px;
			background:royalblue;
			z-index:-1;
			transition:all .5s;
		}
		button:hover::before{
			width:100%;
		}
		button:hover{
			color:#000;
		}
		button:active::before{
			background:#b9b9b9;
		}
		.about-icon{
			display:flex;
			flex-wrap:wrap;
			gap:2;
			margin-top:3rem;
		}
		.about-icon .icons{
			flex:1 1 16rem;
			text-align:center;
			background:#fff;
			padding:3rem 2rem;
		}
		.about-icon .icons i{
			font-size:3rem;
			height:5rem;
			color:dodgerblue;
		}
		.about-icon .icons h3{
			padding-top:1rem;
			font-size:2rem;
			color:#666;
			font-weight:normal;
		}
		@media(max-width:800px){
		.image{
			padding-top:15%;
			}	
		}
		@media(max-width:450px){
			.services{
			padding-top:15%;
			}
		}
	</style>
	<body>
		<?php include './includes/navbar.php';?>

		<div class="about" style="padding-top:4%;">
			<div class="image">
				<img src="./gallery/image10.jpg" alt="aboutus">
			</div>
			<div class="content">
				<h1 class="head"><span>ABOUT</span> AFIACARE</h1>
				<p>Our Mission is to deliver quality, customer-focused municipal services with an emphasis on <br> public safety, neighborhood livability, job creation, responsible planning for economic growth,<br> infrastructure improvements, transportation systems, public health, and the environment.</p>
				<button>LEARN MORE</button>

				<div class="about-icon">
					<div class="icons">
						<i class="fas fa-diagnoses"></i>
						<h3>Best Research Facility</h3>
					</div>
					<div class="icons">
						<i class="fas fa-crutch"></i>
						<h3>Best Treatment Services</h3>
					</div>
					<div class="icons">
						<i class="fas fa-capsules"></i>
						<h3>Quality Prescription</h3>
					</div>
				</div>
			</div>
		</div>

		<?php include './includes/footer.php';?>
		<script src="./js/main.js"></script>
	</body>
</html>