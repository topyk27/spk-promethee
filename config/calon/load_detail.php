<?php 
include 'config/koneksi.php';

$id = $_GET['id'];

$hasil = mysqli_query($koneksi, "SELECT * FROM CALON where id='$id'");

while ($data = mysqli_fetch_assoc($hasil)) {
	$data_calon[] = $data;
}

 ?>