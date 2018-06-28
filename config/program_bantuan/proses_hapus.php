<?php 
include '../koneksi.php';

$id = $_GET['id'];

if (mysqli_query($koneksi, "DELETE FROM program_bantuan where id= '$id'"))
	$_SESSION['pesan'] = "Berhasil hapus data program_bantuan";
else
	$_SESSION['pesan'] = "Gagal hapus data program_bantuan";

header('location:/spk_pro/index.php?url=data_program_bantuan');
 ?>