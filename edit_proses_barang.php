<?php

   include 'koneksi.php';
   $kode_barang = $_GET['kode_barang'];
   $nama_barang = $_POST['nama_barang'];
   $harga = $_POST['harga'];
   $ukuran = $_POST['ukuran'];
   $merk = $_POST['merk'];
   $model = $_POST['model'];
   $diskon = $_POST['diskon'];
   $warna = $_POST['warna'];
 

   $query = mysqli_query($connect, "UPDATE barang SET  nama_barang='$nama_barang', harga='$harga', ukuran='$ukuran', merk='$merk', model='$model', diskon='$diskon', warna='$warna' WHERE kode_barang='$kode_barang'");
    
   if ($query) {
       header('Location: tampil_barang_pemasok.php');
   } else {
       header('Location: edit_barang.php');
   }
?>
