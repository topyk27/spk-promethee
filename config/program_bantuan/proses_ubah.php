<?php 
include '../koneksi.php';

$id = $_GET['id'];
$no_kk = $_POST['no_kk'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$umur = $_POST['umur'];
$domisili = $_POST['domisili'];
$penghasilan = $_POST['penghasilan'];
$status = $_POST['status'];


$sql = "UPDATE program_bantuan set no_kk='$no_kk', nama='$nama', jenis_kelamin='$jenis_kelamin', umur='$umur', domisili='$domisili', penghasilan='$penghasilan', status='$status' where id='$id'";

if(mysqli_query($koneksi,$sql)){
	$_SESSION['pesan'] = "Berhasil tambah data program_bantuan";
}else{
	$_SESSION['pesan'] = "Gagal tambah data program_bantuan";
}
header('location:/spk_pro/index.php?url=data_program_bantuan');


 ?>