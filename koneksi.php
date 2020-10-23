<?php 
$connect = new mysqli ('db4free.net','laptop_bekas','.GLnvd3yZa89k.u','laptop_bekas');
if ($connect->connect_error) {
	//jika terjadi error, matikan proses dengan die() atau exit()
	die('Maaf koneksi gagal: '. $connect->connect_error);
}
?>