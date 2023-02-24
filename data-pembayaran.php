<center>
	<table class = "tabel" style= "width: 50%;">
		<tr>
			<th>kode Tiket</th>
			<th>No Rekening</th>
			<th>No Atas Nama</th>
			<th>jumlah Yang Dibayarkan</th>
			<th>jumlah Yang harus dibayar</th>
			<th>opsi</th>
		</tr>
			<?php
				$q = mysqli_query($conn, "SELECT * FROM `transaksi` INNER JOIN bukti_pembayaran ON bukti_pembayaran.kodeTiket = transaksi.kodeTiket WHERE status = 'belum lunas'");
				while($a = mysqli_fetch_assoc($q)){
			?>
		<tr>
			<td><?= $a['kodeTiket']?></td>
			<td><?= $a['norekening']?></td>
			<td><?= $a['atasnama']?></td>
			<td style= "text-align: right;">Rp.<?= number_format($a['jumlah'],0,'.','.')?>,-</td>
            <td style= "text-align: right;">Rp.<?= number_format($a['total'],0,'.','.')?>,-</td>
            <td><a href="setLunas.php?kodeTiket=<?=$a['kodeTiket'] ?>">Lunas</a> </td>
		</tr>
			<?php }?>
	</table>
</center>