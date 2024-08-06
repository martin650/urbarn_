<?php 
	session_start();
?>
<!DOCTYPE html>
<html lang='en'>
	<head>
		<title>ADMIN LIST</title>
		<link rel="stylesheet" href="./css/sidebar.css">
		<link rel="stylesheet" href="./css/home.css">
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
        .center{
            position:absolute;
            top:60%;
            left:50%;
            transform:translate(-50%, -50%);
            width:400px;
            background:white;
            border-radius:10px;
        }
        .center h1{
            text-align:center;
            padding:0 0 20px 0;
            border-bottom:1px solid silver;
        }
        .center form{
            padding:0 40px;
            box-sizing:border-box;
        }
        form .txt_field{
            position:relative;
            border-bottom:2px solid #adadad;
            margin:30px 0;
        }
        .txt_field input{
            width:100%;
            padding:0 5px;
            height:40px;
            font-size:16px;
            border:none;
            background:none;
            outline:none;
        }
        .txt_field label{
            position:absolute;
            top:50%;
            left:5px;
            color:#adadad;
            transform:translateY(-50%);
            font-size:16px;
            pointer-events:none;
            transition:.5s;
        }
        .txt_field span::before{
            content:'';
            position:absolute;
            top:40px;
            left:0;
            width:100%;
            height:2px;
            background:#2691d9;
        }
        .txt_field input:focus ~ label,
        .txt_field input:valid ~ label{
            top:-5px;
            color: #262626;
        }
        .submit{
            width:100%;
            height:40px;
            border:1px solid green;
            bottom:10px;
        }
	</style>
	<body>
		<?php 

			include './includes/sidebar.php';
			include '../resources/config.php';
		
		?>

		<div class="admin">
			<div class="admin-header">
				<p style="padding-left:40%;">Add ADMINISTRATORS</p>
				<div>
				</div>
			</div>
		</div>
			<div class="center">
                <h1>Add Admin</h1>
						<?php 
							if(isset($_POST['add'])){
								$uname = $_POST['uname'];
								$pass = $_POST['pass'];

								$error = array();
								if(empty($uname)){
									$error['u'] = "Enter Admin name";
								}else if(empty($pass)){
									$error['u'] = "Enter Password";
								}
								if(count($error) == 0){
									$q = "INSERT INTO admin(username,password) VALUES ('$uname','$pass')";
									mysqli_query($conn, $q);
									header('location:./home.php');
								}
							}
							
							if(isset($error['u'])){
								$er = $error['u'];
								$show = "<h5>$er</h5>";
							}else{
								$show = "";
							}
						?>
							<form method="post">
                                <div class="txt_field">
								    <input type="text" name="uname" required>
                                    <span></span>
                                    <label>Username</label>
                                </div>
                                <div class="txt_field">
								    <input type="password" name="pass" required>
                                    <span></span>
                                    <label>Password</label>
                                </div>
                                
								<input type="submit" name="add" class="submit" value="add admin">
							</form>
						
	
				</div>
			</div>
		</div>
	</body>
</html>