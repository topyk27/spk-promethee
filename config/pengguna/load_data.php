<?php 
include 'config/koneksi.php';

$hasil = mysqli_query($koneksi, "SELECT * FROM PENGGUNA where level <> 'superadmin'");

while ($data = mysqli_fetch_assoc($hasil)) {
	$datas[] = $data;
}

 ?>