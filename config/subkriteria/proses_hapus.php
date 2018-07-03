<?php 
include '../koneksi.php';

$id = $_GET['id'];
$kriteria_id = $_GET['kriteria_id'];

if (mysqli_query($koneksi, "DELETE FROM subkriteria where id= '$id'"))
	$_SESSION['pesan'] = "Berhasil hapus data subsubkriteria";
else
	$_SESSION['pesan'] = "Gagal hapus data subsubkriteria";

header('location:/spk_pro/index.php?url=data_kriteria_lihat&id='.$kriteria_id);
 ?>