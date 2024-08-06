<?php 
	session_start();
?>
<!DOCTYPE html>
<html lang='en'>
	<head>
		<title>Total Incomes</title>
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
				<p style="padding-left:40%;">Total Income</p>
				</div>
		</div>
				<?php 
					$query = "SELECT * FROM income";
					$res = mysqli_query($conn, $query);

					$output = "";
					$output .="
						<table>
						<thead>
							<tr>
								<th>ID</th>
								<th>Doctor</th>
								<th>Patient</th>
								<th>Date Discharged</th>
								<th>Amount Paid</th>
								<th>Description</th>
							<tr>
							";
					if(mysqli_num_rows($res)< 1){
						$output .= "<tr><td>No record</td></tr>";
					}
					while($row = mysqli_fetch_array($res)){
						$id = $row['id'];
						$doctor = $row['doctor'];
						$patient = $row['patient'];
						$date_discharged = $row['date_discharged'];
						$amount_paid = $row['amount_paid'];
						$description = $row['description'];

						$output .="
						<tbody>
							<tr>
								<td>$id</td>
								<td>$doctor</td>
								<td>$patient</td>
								<td>$date_discharged</td>
								<td>$amount_paid</td>
								<td>$description</td>

								";
					}
					$output .="
						</tr>
						</table>";
					echo $output;

				?>
			
	</body>
</html>