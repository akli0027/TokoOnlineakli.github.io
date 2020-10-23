<?php
     include 'koneksi.php';

    $kode_barang = $_GET['kode_barang'];

    $query = mysqli_query($connect, "DELETE FROM barang WHERE kode_barang='$kode_barang'");

    if ($query) {
        header('Location: tampil_barang_pemasok.php');
    }
?>
