<?php 
	session_start();
?>
<!DOCTYPE html>
<html lang='en'>
	<head>
		<title>Patients Reports</title>
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
		<h2 style="padding-left:50%">REPORTS</h2>
		<form method="post" enctype="multipart/form-data">
			<img src="../gallery/image16.jpg" style='height:250px';>
			
			<?php if(isset($_GET['id'])){
				$id = $_GET['id'];

				$query = "SELECT * FROM report WHERE id='$id'";
				$res = mysqli_query($conn, $query);

				$row = mysqli_fetch_array($res);
			}
			?>
			<div class="table-section">
			<table>
				<tr>
					<th colspan="2" style="text-decoration:underline;">PATIENTS REPORTS</th>
				</tr>
				<tr>
					<th>Title</th>
					<td><?php echo $row['title'];?></td>
				</tr>
				<tr>
					<td>Message</td>
					<td><?php echo $row['message'];?></td>
				</tr>
				<tr>
					<td>Surname</td>
					<td><?php echo $row['surname'];?></td>
				</tr>
				<tr>
					<td>Date Sent</td>
					<td><?php echo $row['date_sent'];?></td>
				</tr>
			</table>
		</div>
	</form>
</div>
	</body>
</html>