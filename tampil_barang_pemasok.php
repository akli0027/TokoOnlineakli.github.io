<!DOCTYPE html>
<html>
<head>
	<title>Barang</title>
	<link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<style type="text/css">
		table {
  font-family: Times New Roman, Helvetica, sans-serif;
  color: #666;
  text-shadow: 1px  #fff;
  background: #eaebec;
  border: #ccc 1px solid;
}

table th {
  padding: 10px 10px;
  border-top: 1px solid #e0e0e0;
  border-left:1px solid #e0e0e0;
  border-bottom: 1px solid #e0e0e0;
  background: #ededed;
}

table th:first-child{  
  border-left:none;  
}

table tr {
  text-align: center;
  padding-left: 10px;
}

table td:first-child {
  text-align: left;
  padding-left: 10px;
  border-left: 0;
}

table td {
  padding: 10px 10px;
  border-top: 1px solid #e0e0e0;
  border-left:1px solid #e0e0e0;
  border-bottom: 1px solid #e0e0e0;
  background: #ededed;
  background: -webkit-gradient(linear, left top, left bottom, from(#fbfbfb));
}
	</style>
</head>
<body>
	<table cellspacing='2' align="center">
		<tr>
			<td>No.</td>
			<td>Kode Barang</td>
			<td>Nama</td>
			<td>Harga</td>
			<td>Ukuran</td>
			<td>Merk</td>
			<td>Model</td>
			<td>Diskon</td>
			<td>Warna</td>
			<td>gambar</td>
			<td>
				<a href="index.php" class="btn btn-primary">Logout </a>
        <a href="tambah.php" class="btn btn-primary">Kembali </a>
			
			</td>
		</tr>
		<?php
		  include 'koneksi.php';
	    $i=1;
	    $link = mysqli_query($connect,"select *from barang");
	    while ($tampung=mysqli_fetch_object($link)){
      ?>
 	 <tbody>
    <tr>
      <th scope="row"><?=$i++;?>.</th>
      <td><?=$tampung->kode_barang?></td>
      <td><?=$tampung->nama_barang?></td>
      <td><?=$tampung->harga?></td>
      <td><?=$tampung->ukuran?></td>
      <td><?=$tampung->merk?></td>
      <td><?=$tampung->model?></td>
      <td><?=$tampung->diskon?></td>
      <td><?=$tampung->warna?></td>
      <td><img src="<?="img/".$tampung->gambar?>" alt="data" width="100"></td>
      <td>
      		<a href="edit_barang.php?kode_barang=<?=$tampung->kode_barang?>" class="btn btn-primary">Edit</a>
      		<a href="hapus_barang.php?kode_barang=<?=$tampung->kode_barang?>" class="btn btn-danger">Delete</a>
      </td> 
    </tr>
    <?php
  	}
    ?>
	</tbody>
	</table>

</body>
</html>
