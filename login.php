<?php
	include 'db.php';
	if(isset($_SESSION['user'])){
		?>
		<script> window.location= "index.php" </script>
		<?php
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Darma Ferry</title>
	<link rel= "stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class ="box-log">
	<h1 class= "title">Login jjjjjAkun</h1>
	<form action="cek-login.php" method="post">
		<table class= "khusus">
			<tr>
				<td>Username</td>
				<td>:</td>
				<td><input type="text" name="user" required= ""></input></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input type="password" name="pass" required= ""></input></td>
			</tr>
			<tr>
				<td colspan ="3"><input type="submit" class="submit kanan" value="Masuk" required= ""></input></td>
			</tr>
		</table>
	</form>
</div>
</body>
</html>