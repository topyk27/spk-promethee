<?php 
include '../koneksi.php';

$id = $_GET['id'];

if (mysqli_query($koneksi, "DELETE FROM kriteria where id= '$id'"))
	$_SESSION['pesan'] = "Berhasil hapus data kriteria";
else
	$_SESSION['pesan'] = "Gagal hapus data kriteria";

header('location:/spk_pro/index.php?url=data_kriteria');
 ?>