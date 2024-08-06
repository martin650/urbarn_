<!DOCTYPE html>
<html lang='en'>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>OUR GALLERY</title>
		<link rel="stylesheet" href="./css/navbar.css">
		<link rel="stylesheet" href="./css/footer.css">
		<link rel="stylesheet" href="./css/main.css">
		<link rel="stylesheet" href="./css/gallery.css">
		<!--fontawesome cdn-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
	</head>
	<style>
		@media(max-width:800px){
			.gallery{
				padding-top:20%;
			}	
		}
		@media(max-width:450px){
			.head{
				padding-top:15%;
			}
		}
	</style>
	<body>
		<?php include './includes/navbar.php';?>

		<div class="gallery" style="padding-top:7%;">
			<h1 class="head"><span>AFIACARE</span>GALLERY</h1>
			<div class="image-container">
				<div class="image"><img src="./gallery/image2.jpg"></div>
				<div class="image"><img src="./gallery/image3.jpg"></div>
				<div class="image"><img src="./gallery/image4.jpg"></div>
				<div class="image"><img src="./gallery/image5.png"></div>
				<div class="image"><img src="./gallery/image6.jpg"></div>
				<div class="image"><img src="./gallery/image7.jpg"></div>
				<div class="image"><img src="./gallery/image8.jpg"></div>
				<div class="image"><img src="./gallery/image9.jpg"></div>
				<div class="image"><img src="./gallery/image10.jpg"></div>
				<div class="image"><img src="./gallery/image11.jpg"></div>
				<div class="image"><img src="./gallery/image12.jpg"></div>
				<div class="image"><img src="./gallery/image13.jpg"></div>
				<div class="image"><img src="./gallery/image14.jpg"></div>
				<div class="image"><img src="./gallery/image15.jpg"></div>
				<div class="image"><img src="./gallery/image16.jpg"></div>
				<div class="image"><img src="./gallery/image17.jpg"></div>
				<div class="image"><img src="./gallery/image19.jpg"></div>
				<div class="image"><img src="./gallery/remedy1.jpg"></div>
				<div class="image"><img src="./gallery/remedy2.jpg"></div>
				<div class="image"><img src="./gallery/image20.jpg"></div>
				
			</div>
				<div class="popup-image">
					<span>&times;</span>
				<div class="image"><img src="./blog/profile16.jpg"></div>
				</div>
				</div>
		<?php include './includes/footer.php';?>
		<script>
			document.querySelectorAll('.image-container img').forEach(image =>{
				image.onclick=()=>{
					document.querySelector('.popup-image').style.display='block';
					document.querySelector('.popup-image img').src = image.getAttribute('src');
				}
			});
			document.querySelector('.popup-image span').onclick = ()=>{
				document.querySelector('.popup-image').style.display='none';
			}
		</script>
	</body>
</html>