<?php 
	include './config.php';

	if(isset($_POST['subscribe'])){
		$email = $_POST['email'];
		

		$error = array();

		if(empty($email)){
			$error['ac'] = "Enter email";
		}
		if(count($error)==0){
			$query = "INSERT INTO subscribers (email,date_subscribed) 
						VALUES ('$email',NOW())";
			$res = mysqli_query($conn, $query);
			if($res){
				header("location:../index.php");
			}else{
				echo "<script>alert('Failed')</script>";
			}
		}

	}
?>