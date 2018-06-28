<?php 
include 'config/koneksi.php';

$id = $_GET['id'];

$hasil = mysqli_query($koneksi, "SELECT * FROM pengguna where id='$id'");

while ($data = mysqli_fetch_assoc($hasil)) {
	$data_pengguna[] = $data;
}

 ?>