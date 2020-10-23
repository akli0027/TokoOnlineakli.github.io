<?php
session_start();
 include 'koneksi.php';
$nama = $_POST['nama'];
$harga= $_POST['harga'];
$ukuran= $_POST['ukuran'];
$merk= $_POST['merk'];
$model= $_POST['model'];
$diskon= $_POST['diskon'];
$warna= $_POST['warna'];
$id_pemasok = $_SESSION ['id_pemasok'];

$gambar = $_FILES['gambar']['name']; 
$file_tmp = $_FILES['gambar']['tmp_name'];
move_uploaded_file($file_tmp,'img/'.$gambar);


   $query = mysqli_query($connect,"INSERT INTO barang VALUES (NULL,'$nama','$harga','$ukuran','$merk','$model','$diskon','$warna','$gambar','$id_pemasok')");
    
    if ($query) {
       header('Location:tampil_barang.php');
    } else {
      echo "gagal";
    }
?> 
