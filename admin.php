<!DOCTYPE html>
<html>
<head>
	<title>Daftar Admin</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	<table class="table">
		<tr>
			<td>Id Admin</td>
			<td>Nama</td>
			<td>Password</td>
			<td>email</td>
			<td>
				<a href="index.php">
					<button class="btn btn-primary">Logout</button>
				</a>
				<a href="tambah.php">
					<button class="btn btn-primary">Menu Admin</button>
				</a>
			</td>
		</tr>
		<?php

		include 'koneksi.php';

		$query = mysqli_query($connect,"SELECT *FROM admin");
		while($row=mysqli_fetch_array($query)){
			?>
			<tr>
				<td><?=$row['id_admin']?></td>
				<td><?=$row['nama_admin']?></td>
				<td><?=$row['password_admin']?></td>
				<td><?=$row['email_admin']?></td>
				<td>
					<a href="edit_admin.php?id_admin=<?=$row['id_admin']?>"> 

					<button class="btn btn-primary">Edit</button>
					</a>
					<a href="hapus_admin.php?id_admin=<?=$row['id_admin']?>">
					<button class="btn btn-danger">Hapus</button>
					</a>
				</td>
			</tr>
		<?php
		}
		?>
	</table>

</body>
</html>
