<?php
	include 'db.php';

	$user = $_POST['user'];
	$pass = $_POST['pass'];

	$cek = mysqli_query($conn, "select * from user where user='$user' and pass='$pass'");
	$sesi = mysqli_num_rows($cek);
	if ($sesi == 1){
		$_SESSION['user'] = $user;
		echo say("selamat Datang", "index.php");
	}
?>