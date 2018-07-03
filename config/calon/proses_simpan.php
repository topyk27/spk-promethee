<?php 
include '../koneksi.php';

$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$kecamatan = $_POST['kecamatan'];
$sub_id = $_POST['sub_id'];


$sql = "INSERT INTO calon VALUES(NULL,'$nama','$jenis_kelamin','$kecamatan')";

if(mysqli_query($koneksi,$sql)){
	$calon_id = $koneksi->insert_id;

	foreach ($sub_id as $key => $value) {
		$value = isset($_POST['value'][$key]) ? $_POST['value'][$key] : 0;

		mysqli_query($koneksi,"INSERT INTO calon_subkriteria VALUES(NULL,'$calon_id','$sub_id[$key]','$value')");
	}

	$_SESSION['pesan'] = "Berhasil tambah data calon";
}else{
	$_SESSION['pesan'] = "Gagal tambah data calon";
}
header('location:/spk_pro/index.php?url=data_calon');


 ?>