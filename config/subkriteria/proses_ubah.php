<?php 
include '../koneksi.php';

$id = $_POST['id'];
$kriteria_id = $_POST['kriteria_id'];
$nama = $_POST['nama'];
$bobot = $_POST['bobot'];

$sql = "UPDATE subkriteria set bobot='$bobot', nama='$nama' where id='$id'";

if(mysqli_query($koneksi,$sql)){
	$_SESSION['pesan'] = "Berhasil tambah data subsubkriteria";
}else{
	$_SESSION['pesan'] = "Gagal tambah data subsubkriteria";
}
header('location:/spk_pro/index.php?url=data_kriteria_lihat&id='.$kriteria_id);


 ?>