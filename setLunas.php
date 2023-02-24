<?php
    include 'db.php';
    if (isset($_GET['kodeTiket'])) {
        $kodeTiket = $_GET['kodeTiket'];
        $sql = mysqli_query($conn,"UPDATE transaksi SET status='lunas' WHERE kodeTiket = '$kodeTiket' ");
        if ($sql){
            header('location:index.php');
        }
    }

?>