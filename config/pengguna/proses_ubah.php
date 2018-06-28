<?php 
include '../koneksi.php';

$id = $_GET['id'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = md5($_POST['password']);
$level = $_POST['level'];


$sql = "UPDATE pengguna set username='$username', nama='$nama', password='$password', level='$level' where id='$id'";

if(mysqli_query($koneksi,$sql)){
	$_SESSION['pesan'] = "Berhasil tambah data pengguna";
}else{
	$_SESSION['pesan'] = "Gagal tambah data pengguna";
}
header('location:/spk_pro/index.php?url=data_pengguna');


 ?>