<?php
include 'koneksi.php';
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$no_telepon = $_POST['no_telepon'];
$email = $_POST['email'];
$password = $_POST['password'];

$query = mysqli_query($connect, "INSERT INTO pembeli VALUES (NULL,'$nama','$no_telepon','$alamat','$email','$password')");

	header('location: index.php');

?>
