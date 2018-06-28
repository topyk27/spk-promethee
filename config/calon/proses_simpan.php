<?php 
include '../koneksi.php';

$no_kk = $_POST['no_kk'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$usia = $_POST['usia'];
$kecamatan = $_POST['kecamatan'];
$penghasilan = $_POST['penghasilan'];
$status_perkawinan = $_POST['status_perkawinan'];
$pendidikan = $_POST['pendidikan'];
$jenis_kecacatan = $_POST['jenis_kecacatan'];
$penyebab_kecacatan = $_POST['penyebab_kecacatan'];


$sql = "INSERT INTO calon VALUES(NULL,'$no_kk','$nama','$jenis_kelamin','$kecamatan',$usia,'$status_perkawinan','$pendidikan','$jenis_kecacatan','$penyebab_kecacatan')";

if(mysqli_query($koneksi,$sql)){
	$_SESSION['pesan'] = "Berhasil tambah data calon";
}else{
	$_SESSION['pesan'] = "Gagal tambah data calon";
}
header('location:/spk_pro/index.php?url=data_calon');


 ?>