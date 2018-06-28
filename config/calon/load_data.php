<?php 
include 'config/koneksi.php';

$hasil = mysqli_query($koneksi, "SELECT * FROM CALON");

while ($data = mysqli_fetch_assoc($hasil)) {
	$datas[] = $data;
}

 ?>