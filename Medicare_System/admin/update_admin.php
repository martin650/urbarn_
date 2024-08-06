<?php 
	session_start();
?>
<!DOCTYPE html>
<html lang='en'>
	<head>
		<title>Doctors Reviews</title>
		<link rel="stylesheet" href="./css/home.css">
		<link rel="stylesheet" href="./css/sidebar.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
	</head>
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Oswald:wght@200&family=Roboto:wght@100&display=swap');
		*{
		font-family: 'Oswald', sans-serif;
		}
		.table-section{
			height:auto;
			overflow:auto;
		}
		table{
			width:100%;
			table-layout:fixed
			min-width:1000px;
			border-collapse:collapse;
		}
		thead th{
			position:sticky;
			top:0;
			background:#0298cf;
			color:#fff;
			font-size:15px;
		}
		th,td{
			border-bottom:1px solid #dddddd;
			padding:10px 20px;
			word-break:break-all;
			text-align:center;
		}
		tr:hover td{
			color:#0298cf;
			cursor:pointer;
			background:#f6f9fc;
		}
		button{
			outline:none;
			border:none;
			border-radius:6px;
			cursor:pointer;
			padding:10px;
		}
		button .edit{
			background:#0298cf;
		}
		.admin{
			width:100%;
		}
		.admin-header{
			display:flex;
			justify-content:space-between;
			align-items:center;
			padding:20px;
			background:rgb(240,240,240);
		}
		.admin-header p{
			color:#000000;
		}

		.add-new{
			padding:10px 20px;
			color:#fff;
			background:blue;
		}
		.new-admin{
			position:absolute;
			top:28%;
			right:.5rem;
			width:25rem;
			box-shadow:0 .5rem 1rem rgba(0,0,0,.1);
			padding:2rem;
			background:whitesmoke;
			text-align:center;
		}
		.new-admin h3{
			font-size:2rem;
			text-transform:uppercase;
			color:#333;
		}
		.new-admin .form-control{
			margin:.7rem;
			background:#eee;
			border-radius:.5rem;
			padding:1rem;
			font-size:.9rem;
			text-transform:none;
			width:100%;
		}
	</style>
	<body>
		<?php include './includes/sidebar.php';
			include '../resources/config.php';
		?>

		<div class="admin">
			<div class="admin-header">
				<p style="padding-left:40%;">EDIT ADMIN DETAILS</p>
				<div>
				</div>
			</div>
		</div>
		<?php 
			if(isset($_POST['edit'])){
				$id = $_GET['updateid'];

				$sql="Select * from `admin` where id=$id";
				$result=mysqli_query($conn, $sql);
				$row = mysqli_fetch_assoc($result);
				$username = $row['username'];
				$password = $row['password'];

				$username =$_POST['username'];
				$password = $_POST['password'];

				$sql = "update `admin` set id=$id, username='$username', password='$password' where id=$id";
				$result = mysqli_query($conn, $sql);
				if($result){
					header("location:./admin.php");
				}
			}
		?>
        <form method ="post" class="new-admin" enctype="multipart/form-data">
							<h3>EDIT ADMIN</h3>

								<input type="text" vaue="<?php echo $username;?>" placeholder="Enter admin username" name="username" class="form-control" required>
								<input type="password" placeholder="Enter admin password" name="password" class="form-control" required>
							<input type="submit" name="edit" value="edit admin">
						</form>
		

	</body>
</html>