<?php 
include 'config/koneksi.php';

$hasil = mysqli_query($koneksi, "SELECT * FROM program_bantuan");

while ($data = mysqli_fetch_assoc($hasil)) {
	$datas[] = $data;
}

 ?>