<?php
session_start();
 include 'koneksi.php';
$id_pemasok = $_POST['id_pemasok'];
$password = $_POST['password'];
$query = mysqli_query($connect,"SELECT *FROM pemasok WHERE id_pemasok=$id_pemasok");
$row= mysqli_fetch_object($query);
	
	if ($row->id_pemasok==$id_pemasok){
		if($row->password==$password){
			$_SESSION['id_pemasok']=$id_pemasok;
			header('location: pemasok_barang.php');
		}
	}
		else {
		echo "data salah";
         header('location: index.php');
      
	}
?>