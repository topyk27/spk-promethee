<?php 
include '../koneksi.php';

$nama = $_POST['nama'];
$bobot = $_POST['bobot'];
$jenis = $_POST['jenis'];

$subkriteria = $_POST['subkriteria'];

$sub_nama = $_POST['sub_nama'];
$sub_bobot = $_POST['sub_bobot'];

$sql = "INSERT INTO kriteria VALUES(NULL,'$nama','$bobot','$jenis')";

if(mysqli_query($koneksi,$sql)){
	$kriteria_id = $koneksi->insert_id;

	if($subkriteria=="Punya"){
		for ($i=0; $i < count($sub_nama); $i++) { 
			mysqli_query($koneksi,"INSERT INTO subkriteria VALUES(NULL,'$kriteria_id','$sub_nama[$i]','$sub_bobot[$i]')");
		}
	}else{
		mysqli_query($koneksi,"INSERT INTO subkriteria VALUES(NULL,'$kriteria_id','input','NULL')");
	}
	$_SESSION['pesan'] = "Berhasil tambah data kriteria";
}else{
	$_SESSION['pesan'] = "Gagal tambah data kriteria";
}


header('location:/spk_pro/index.php?url=data_kriteria');


 ?>