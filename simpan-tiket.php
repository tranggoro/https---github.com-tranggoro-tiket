<?php
include 'db.php';

$kodeTiket = $_POST['kodeTiket'];
$kodeKapal = $_POST['kodeKapal'];
$namaPembeli = $_POST['namaPembeli'];
$berangkat = $_POST['berangkat'];
$tujuan = $_POST['tujuan'];
$tglBerangkat = $_POST['tglBerangkat'];
$waktuBerangkat = $_POST['waktuBerangkat'];
$waktuSampai = $_POST['waktuSampai'];
$harga = $_POST['harga'];
$noKursi = $_POST['noKursi'];
$kelas = $_POST['kelas'];
$total = $harga;

//$q = mysqli_query($conn, "insert to tiket values(NULL, '$kodeTiket','$kodeKapal','$namaPembeli','$tglBerangkat','$waktuBerangkat','$waktuSampai','$harga','$noKursi','$kelas','$berangkat','$tujuan','$total')");

$q = mysqli_query($conn, "INSERT INTO `tiket` (`kodeTiket`, `kodeKapal`, `namaPembeli`, `tglBerangkat`, `waktuBerangkat`, `waktuSampai`, `harga`, `noKursi`, `kelas`, `berangkat`, `tujuan`, `total`) VALUES ('$kodeTiket', '$kodeKapal`', '$namaPembeli', '$tglBerangkat', '$waktuBerangkat', '$waktuSampai', '$harga', '$noKursi', '$kelas', '$berangkat', '$tujuan', '$total');");

if($q){
	$p = mysqli_query($conn, "INSERT INTO transaksi (kodeTiket,total,status) VALUES ('$kodeTiket', '$total','belum lunas')");
	echo "INSERT INTO transaksi (`kodeTiket`, `total`,'status') VALUES ('$kodeTiket', '$total','belum lunas')";
	if($p){
		echo say("Berhasil", 'index.php?act=data-tiket');
}
}
?>
