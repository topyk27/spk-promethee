<?php 
include '../koneksi.php';

$id = $_GET['id'];
$no_kk = $_POST['no_kk'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$kecamatan = $_POST['kecamatan'];
$usia = $_POST['usia'];
$status_perkawinan = $_POST['status_perkawinan'];
$pendidikan = $_POST['pendidikan'];
$jenis_kecacatan = $_POST['jenis_kecacatan'];
$penyebab_kecacatan = $_POST['penyebab_kecacatan'];


$sql = "UPDATE subsubkriteria set no_kk='$no_kk', nama='$nama', jenis_kelamin='$jenis_kelamin', usia='$usia', kecamatan='$kecamatan', pendidikan='$pendidikan', status_perkawinan='$status_perkawinan', jenis_kecacatan='$jenis_kecacatan', penyebab_kecacatan='$penyebab_kecacatan' where id='$id'";

if(mysqli_query($koneksi,$sql)){
	$_SESSION['pesan'] = "Berhasil tambah data subsubkriteria";
}else{
	$_SESSION['pesan'] = "Gagal tambah data subsubkriteria";
}
header('location:/spk_pro/index.php?url=data_subsubkriteria');


 ?>