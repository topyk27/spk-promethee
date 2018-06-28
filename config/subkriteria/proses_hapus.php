<?php 
include '../koneksi.php';

$id = $_GET['id'];

if (mysqli_query($koneksi, "DELETE FROM subsubkriteria where id= '$id'"))
	$_SESSION['pesan'] = "Berhasil hapus data subsubkriteria";
else
	$_SESSION['pesan'] = "Gagal hapus data subsubkriteria";

header('location:/spk_pro/index.php?url=data_subsubkriteria');
 ?>