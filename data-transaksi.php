<center>
	<table class = "tabel" style= "width: 50%;">
		<tr>
			<th>kode Tiket</th>
			<th>Status</th>
			<th>Total</th>
		</tr>
			<?php
				$q = mysqli_query($conn, "select * from transaksi");
				while($a = mysqli_fetch_array($q)){
					@$total= $total + $a['total'];
			?>
		<tr>
			<td><?= $a['kodeTiket']?></td>
			<td><?= $a['status']?></td>
			<td style= "text-align: right;">Rp.<?= number_format($a['total'],0,'.','.')?>,-</td>
		</tr>
			<?php }?>
			<tr bgcolor= "#eee">
				<td colspan="2" style = "text-align: center;"><b>TOTAL</b></td>
				<td style= "text-align: right;">Rp.<?= number_format($total,0,'.','.')?>,-</td>
			</tr>
	</table>
</center>