<?php
session_start();
 include 'koneksi.php';
$email_admin = $_POST['email_admin'];
$password_admin = $_POST['password_admin'];
$query = mysqli_query($connect, "SELECT *FROM admin WHERE email_admin='$email_admin'");
$row= mysqli_fetch_object ($query);

	if ($row->email_admin==$email_admin){
		if($row->password_admin==$password_admin){
			$_SESSION['id_admin']=$row->id_admin;
			header('location: tambah.php');
		}
	
	else {
		echo "data salah";
         header('location: login_admin.php');
      }
  }
  
?>