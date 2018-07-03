<?php 
include '../koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$bobot = $_POST['bobot'];
$jenis = $_POST['jenis'];


$sql = "UPDATE kriteria set bobot='$bobot', nama='$nama', jenis='$jenis' where id='$id'";

if(mysqli_query($koneksi,$sql)){
	$_SESSION['pesan'] = "Berhasil tambah data kriteria";
}else{
	$_SESSION['pesan'] = "Gagal tambah data kriteria";
}
header('location:/spk_pro/index.php?url=data_kriteria');


 ?>