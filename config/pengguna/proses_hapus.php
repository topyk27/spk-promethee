<?php 
include '../koneksi.php';

$id = $_GET['id'];

if (mysqli_query($koneksi, "DELETE FROM PENGGUNA where id= '$id'"))
	$_SESSION['pesan'] = "Berhasil hapus data pengguna";
else
	$_SESSION['pesan'] = "Gagal hapus data pengguna";

header('location:/spk_pro/index.php?url=data_pengguna');
 ?>