<?php
    include 'koneksi.php';
   $id_admin = $_GET['id_admin'];
   $nama_admin = $_POST['nama_admin'];
   $password_admin = $_POST['password_admin'];
   $email_admin = $_POST['email_admin'];
 
    

   $query = mysqli_query($connect, "UPDATE admin SET id_admin=$id_admin, nama_admin='$nama_admin',password_admin='$password_admin',email_admin='$email_admin' WHERE id_admin='$id_admin'");
    
   if ($query) {
       header('Location: admin.php');
   } else {
       header('Location: edit_admin.php');
   }
?>
