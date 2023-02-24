<?php
	$conn = mysqli_connect('localhost', 'root', '','tiket');

	session_start();

	function say($pesan, $lokasi){
		$a = "<script>
				window.alert('$pesan');
				window.location='$lokasi';
			</script>";
			return $a;
	}
?>