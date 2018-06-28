<?php 
include '../koneksi.php';

$no_kk = $_POST['no_kk'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$umur = $_POST['umur'];
$domisili = $_POST['domisili'];
$penghasilan = $_POST['penghasilan'];
$status = $_POST['status'];


$sql = "INSERT INTO program_bantuan VALUES(NULL,'$no_kk','$nama','$jenis_kelamin','$umur','$domisili',$penghasilan,'$status')";

if(mysqli_query($koneksi,$sql)){
	$_SESSION['pesan'] = "Berhasil tambah data program_bantuan";
}else{
	$_SESSION['pesan'] = "Gagal tambah data program_bantuan";
}
header('location:/spk_pro/index.php?url=data_program_bantuan');


 ?>