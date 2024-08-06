<?php 
	session_start();
?>
<!DOCTYPE html>
<html lang='en'>
	<head>
		<title>Appointment Info</title>
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
		<h2 style="padding-left:50%">Appointment Info</h2>
		<form method="post" enctype="multipart/form-data">
			<img src="./image17.jpg" style='height:250px';>
			<?php if(isset($_GET['id'])){
				$id = $_GET['id'];

				$query = "SELECT * FROM appointment WHERE id='$id'";
				$res = mysqli_query($conn, $query);

				$row = mysqli_fetch_array($res);
			}
			?>
			<div class="table-section">
			<table>
				<tr>
					<th colspan="2" style="text-decoration:underline;">Appointment Details</th>
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
					<td>Gender</td>
					<td><?php echo $row['gender'];?></td>
				</tr>
				<tr>
					<td>Phone</td>
					<td><?php echo $row['phone'];?></td>
				</tr>
				<tr>
					<td>Appointment Date</td>
					<td><?php echo $row['appointment_date'];?></td>
				</tr>
				<tr>
					<td>Symptoms</td>
					<td><?php echo $row['symptoms'];?></td>
				</tr>
				<tr>
					<td>Status</td>
					<td><?php echo $row['status'];?></td>
				</tr>
				<tr>
					<td>Date Booked</td>
					<td><?php echo $row['date_booked'];?></td>
				</tr>
			</table>
		</div>
	</form>
</div>
	</body>
</html>