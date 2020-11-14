<?php
	include_once './dbconnect.php';

	$tendn= $_POST["tendn"];
	$password = $_POST["pass"];
	$repassword = $_POST["rpass"];
	$sdt = $_POST["sdt"];
	$email = $_POST["email"];

	if (isset($_POST['submit']) &&
		isset($tendn) &&
		isset($password) &&
		isset($repassword) &&
		isset($sdt) &&
		isset($email)) {
			
			if($password != $repassword){
				header("location:dangky.php");
			} else {
				$sql="SELECT * FROM dangki WHERE tendn='$tendn' ";
				$old=mysqli_query($ketnoi,$sql);
				$password=md5($pass);
				if (mysqli_num_rows($old)>0) {
						header("location:dangky.php");
				}
				$sql = "INSERT INTO dangki (tendn,pass,rpass,sdt,email) VALUES ('$tendn','$password','$repassword','$sdt','$email')";
				mysqli_query($ketnoi,$sql);
				header("location:index.php");
			}
			
	} else {
		header("location:dangky.php");
	}
?>
