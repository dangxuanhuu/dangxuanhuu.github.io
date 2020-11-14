<?php
    include_once './dbconnect.php';

    $tenkh= $_POST["tenkh"];
    $diachi = $_POST["diachi"];
    $dienthoai = $_POST["dienthoai"];
    $email = $_POST["email"];
    $ykien = $_POST["ykien"];

    if (isset($_POST['submit']) &&
		isset($tenkh) &&
		isset( $diachi) &&
		isset($dienthoai) &&
		isset($email) &&
		isset($ykien)) {
			
            $sql = "INSERT INTO lienhe (tenkh,diachi,dienthoai,email,ykien) VALUES ('$tenkh','$diachi','$dienthoai','$email','$ykien')";
            mysqli_query($ketnoi,$sql);
            header("location:index.php");
		
	} else {
		header("location:lienhe.php");
    }

?>
