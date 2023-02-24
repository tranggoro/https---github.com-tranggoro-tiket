<?php
$idTiket = $_GET['detail'];
$q = mysqli_query($conn, "select * from tiket where idTiket='$idTiket'");
$a = mysqli_fetch_array($q);
$d = mysqli_query($conn, "select * from transaksi where kodeTiket='$a[kodeTiket]'");
$b = mysqli_fetch_array($d);
?>
<center>
	<table class="tabel"style = "width: 50%;">
		<tr>
			<td>kode Tiket</td>
			<td>:</td>
			<td><?= $a['kodeTiket']?></td>
		</tr>
		<tr>
			<td>kode Kapal</td>
			<td>:</td>
			<td><?= $a['kodeKapal']?></td>
		</tr>
		<tr>
			<td>Nama Penumpang</td>
			<td>:</td>
			<td><?= $a['namaPembeli']?></td>
		</tr>
		<tr>
			<td>Tanggal Pemberangkatan</td>
			<td>:</td>
			<td><?= $a['tglBerangkat']?></td>
		</tr>
		<tr>
			<td>Waktu Berangkat</td>
			<td>:</td>
			<td><?= $a['waktuBerangkat']?></td>
		</tr>
		<tr>
			<td>Waktu Sampai</td>
			<td>:</td>
			<td><?= $a['waktuSampai']?></td>
		</tr>
		<tr>
			<td>Berangkat</td>
			<td>:</td>
			<td><?= $a['berangkat']?></td>
		</tr>
		<tr>
			<td>Tujuan</td>
			<td>:</td>
			<td><?= $a['tujuan']?></td>
		</tr>
		<tr>
			<td>Harga Tiket</td>
			<td>:</td>
			<td>Rp.<?=number_format($a['harga'] ,0,'.','.')?>,-</td>
		</tr>
		<tr>
			<td>No Kursi</td>
			<td>:</td>
			<td><?= $a['noKursi']?></td>
		</tr>
		<tr>
			<td>Kelas Kapal</td>
			<td>:</td>
			<td><?= $a['kelas']?></td>
		</tr>
		<tr>
			<td>Status Pembayaran</td>
			<td>:</td>
			<td><?= $b['status']?></td>
		</tr>
		<?php
			if ($b['status'] != 'lunas') { ?>
			<td colspan = "3"><a href="bayar.php?kodeTiket=<?= $b['kodeTiket'] ?>"> <input type= "botton" class= "submit" value= "Bayar"></a></td>
		<?php } else{  ?>
		<tr>
			<td colspan = "3"><a onclick="window.print()"><input type= "botton" class= "submit" value= "Cetak"></a></td>
		</tr>
		<?php } ?>

	</table>
</center>