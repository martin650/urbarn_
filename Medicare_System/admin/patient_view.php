<?php 
	session_start();
?>
<!DOCTYPE html>
<html lang='en'>
	<head>
		<title>Patient Info</title>
		<link rel="stylesheet" href="./css/home.css">
		<link rel="stylesheet" href="./css/sidebar.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
	</head>
	<style>
		.profile{
			padding-top:5%;
		}
		.profile img{
			padding-left:30%;
		}
		.table-section{
			padding-left:30%;
			padding-top:10px;
		}
	</style>
	<body>
		<?php include './includes/sidebar.php';
			include '../resources/config.php';
		?>
		<div class="profile">
		<h2 style="padding-left:50%">Patient Profile</h2>
		<form method="post" enctype="multipart/form-data">
			<img src="./image9.jpg" style='height:250px';>
			<?php if(isset($_GET['id'])){
				$id = $_GET['id'];

				$query = "SELECT * FROM patients WHERE id='$id'";
				$res = mysqli_query($conn, $query);

				$row = mysqli_fetch_array($res);
			}
			?>
			<div class="table-section">
			<table>
				<tr>
					<th colspan="2" style="text-decoration:underline;">Patient DETAILS</th>
				</tr>
				<tr>
					<td>FIRST NAME</td>
					<td><?php echo $row['firstname'];?></td>
				</tr>
				<tr>
					<td>SURNAME</td>
					<td><?php echo $row['surname'];?></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><?php echo $row['email'];?></td>
				</tr>
				<tr>
					<td>Phone</td>
					<td><?php echo $row['phone'];?></td>
				</tr>
				<tr>
					<td>Gender</td>
					<td><?php echo $row['gender'];?></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><?php echo $row['password'];?></td>
				</tr>
				<tr>
					<td>Date Registered</td>
					<td><?php echo $row['date_reg'];?></td>
				</tr>
			</table>
		</div>
	</form>
</div>
	</body>
</html>