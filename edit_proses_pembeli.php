<?php
    include 'koneksi.php';
   $id_pembeli = $_GET['id_pembeli'];
   $nama = $_POST['nama'];
   $no_telepon = $_POST['no_telepon'];
   $alamat = $_POST['alamat'];
   $email = $_POST['email'];
 
    

   $query = mysqli_query($connect, "UPDATE pembeli SET id_pembeli=$id_pembeli, nama='$nama', no_telepon='$no_telepon', alamat='$alamat',email='$email' WHERE id_pembeli='$id_pembeli'");
    
   if ($query) {
       header('Location: pembeli.php');
   } else {
       header('Location: edit_pembeli.php');
   }
?>