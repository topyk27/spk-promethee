<?php 
include '../koneksi.php';

$nama = $_POST['nama'];
$bobot = $_POST['bobot'];
$jenis = $_POST['jenis'];

$subsubsubkriteria = $_POST['subsubsubkriteria'];

$sub_nama = $_POST['sub_nama'];
$sub_bobot = $_POST['sub_bobot'];

$sql = "INSERT INTO subsubkriteria VALUES(NULL,'$nama','$bobot','$jenis')";

if(mysqli_query($koneksi,$sql)){
	$subsubkriteria_id = $koneksi->insert_id;

	if($subsubsubkriteria=="Punya"){
		for ($i=0; $i < count($sub_nama); $i++) { 
			mysqli_query($koneksi,"INSERT INTO subsubsubkriteria VALUES(NULL,'$subsubkriteria_id','$sub_nama[$i]','$sub_bobot[$i]')");
		}
	}
	$_SESSION['pesan'] = "Berhasil tambah data subsubkriteria";
}else{
	$_SESSION['pesan'] = "Gagal tambah data subsubkriteria";
}


header('location:/spk_pro/index.php?url=data_subsubkriteria');


 ?>