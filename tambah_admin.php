<?php
 include 'koneksi.php';
$nama_admin = $_POST['nama_admin'];
$password_admin = $_POST['password_admin'];
$email_admin = $_POST['email_admin'];


$query = mysqli_query($connect,"INSERT INTO admin VALUES (NULL,'$nama_admin','$password_admin','$email_admin')");
if ($query) {
  header('location:admin.php');
}
?> 
