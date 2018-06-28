<?php 
include '../koneksi.php';
session_start();
$id = $_SESSION['id'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$password_lama = $_POST['password_lama'];
$password_baru = $_POST['password_baru'];

$sql_check = "SELECT * from pengguna where id=$id AND password='".md5($password_lama)."'";

if(mysqli_num_rows(mysqli_query($koneksi, $sql_check))<1){
	$_SESSION['pesan'] = "Password lama tidak sesuai";
	$_SESSION['warna'] = "danger";
}
else{
	$sql_password = "UPDATE pengguna set nama='$nama', username='$username', password='".md5($password_baru)."' where id=$id";

	if(mysqli_query($koneksi, $sql_password)){
		$_SESSION['pesan'] = "Berhasil Ubah data pengguna";
		$_SESSION['warna'] = "success";
		$_SESSION['nama'] = $nama;
		$_SESSION['username'] = $username;
	}else{
		$_SESSION['pesan'] = "Gagal ubah data pengguna";
		$_SESSION['warna'] = "danger";
	}
}

header('location:/spk_pro/index.php?url=pengaturan');

 ?>