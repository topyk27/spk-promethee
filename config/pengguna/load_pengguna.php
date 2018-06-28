<?php 
include 'config/koneksi.php';

$id = $_SESSION['id'];

$hasil = mysqli_query($koneksi, "SELECT * FROM pengguna where id='$id'");

while ($data = mysqli_fetch_assoc($hasil)) {
	$data_pengguna[] = $data;
}

 ?>