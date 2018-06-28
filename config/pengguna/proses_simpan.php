<?php 
include '../koneksi.php';

$username = $_POST['username'];
$nama = $_POST['nama'];
$password = md5($_POST['password']);
$level = $_POST['level'];

$sql = "INSERT INTO pengguna VALUES(NULL,'$nama','$username','$password','$level')";

if(mysqli_query($koneksi,$sql)){
	$_SESSION['pesan'] = "Berhasil tambah data pengguna";
}else{
	$_SESSION['pesan'] = "Gagal tambah data pengguna";
}
header('location:/spk_pro/index.php?url=data_pengguna');


 ?>