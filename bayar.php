<link rel="stylesheet" href="tampilan.css">
<center>
    <?php
    include_once 'db.php';
    $data = mysqli_query($conn,"SELECT * FROM transaksi WHERE kodeTiket = '$_GET[kodeTiket]'");
    $item = mysqli_fetch_assoc($data);
?>
    <table class="khusus" style="margin-top: 80px;">
        <form action="" method="post">
            <tr>
                <td>Kode Tiket</td>
                <td>:</td>
                <td><input type="text" name="kodeTiket" class="input" value="<?= $item['kodeTiket'] ?>"
                        disabled></input></td>
            </tr>
            <tr>
                <td>Total</td>
                <td>:</td>
                <td><input type="text" name="namaPembeli" class="input" value="<?= $item['total']?>" disabled></input>
                </td>
            </tr>
            <tr>
                <td>No Rekening</td>
                <td>:</td>
                <td><input type="text" name="norek" class="input"></input></td>
            </tr>
            <tr>
                <td>Atas Nama</td>
                <td>:</td>
                <td><input type="text" name="atasnama" class="input" placeholder="Atas Nama"></input></td>
            </tr>
            <tr>
                <td>Jumlah Yang Dibayarkan</td>
                <td>:</td>
                <td><input type="number" placeholder="Jumlah Yang Dibayarkan" name="jumlah" class="input"></input></td>
            </tr>
            <tr>
                <td colspan="3"><input type="submit" name="simpan" class="submit kanan" value="simpan" required=""></input></td>
            </tr>
        </form>
    </table>
</center>
<?php
    if (isset($_POST['simpan'])) {
        $kodeTiket = $_GET['kodeTiket'];
        $norek = $_POST['norek'];
        $atasnama = $_POST['atasnama'];
        $jumlah = $_POST['jumlah'];
        $sql = mysqli_query($conn,"INSERT INTO bukti_pembayaran(kodeTiket,norekening,atasnama,jumlah) VALUES('$kodeTiket','$norek','$atasnama','$jumlah')");
        echo "INSERT INTO bukti_pembayaran(kodeTiket,norekening,atasnama,jumlah) VALUES('$kodeTiket','$norek','$atasnama','$jumlah')";
        var_dump($sql);
        // header('location:index.php');
    }
?>