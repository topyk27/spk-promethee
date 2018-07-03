<?php 
include '../koneksi.php';

$nama = $_POST['nama'];
$bobot = $_POST['bobot'];
$kriteria_id = $_POST['kriteria_id'];

$subsubsubkriteria = $_POST['subsubsubkriteria'];

$sub_nama = $_POST['sub_nama'];
$sub_bobot = $_POST['sub_bobot'];

$sql = "INSERT INTO subkriteria VALUES(NULL,'$kriteria_id','$nama','$bobot')";

if(mysqli_query($koneksi,$sql)){

	$_SESSION['pesan'] = "Berhasil tambah data subsubkriteria";
}else{
	$_SESSION['pesan'] = "Gagal tambah data subsubkriteria";
}


header('location:/spk_pro/index.php?url=data_kriteria_lihat&id='.$kriteria_id);


 ?>