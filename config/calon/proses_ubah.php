<?php 
include '../koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$kecamatan = $_POST['kecamatan'];
$sub_id = $_POST['sub_id'];
$old_sub_id = $_POST['old_sub_id'];
$new_sub = isset($_POST['new_sub']) ? $_POST['new_sub'] : null;

$sql = "UPDATE calon set nama='$nama', jenis_kelamin='$jenis_kelamin', kecamatan='$kecamatan' where id='$id'";

if(mysqli_query($koneksi,$sql)){
	foreach ($old_sub_id as $key => $value) {
		$value = isset($_POST['value'][$key]) ? $_POST['value'][$key] : 0;

		mysqli_query($koneksi,"UPDATE calon_subkriteria set subkriteria_id='$sub_id[$key]', value='$value' WHERE id=".$old_sub_id[$key]);
	}
	if(isset($new_sub)){
		foreach ($new_sub as $key => $value) {
			$value = isset($_POST['value'][$key]) ? $_POST['value'][$key] : 0;

			mysqli_query($koneksi,"INSERT INTO calon_subkriteria VALUES (NULL, $id, '$sub_id[$key]', $value) ");
		}
	}

	$_SESSION['pesan'] = "Berhasil tambah data calon";
}else{
	$_SESSION['pesan'] = "Gagal tambah data calon";
}
header('location:/spk_pro/index.php?url=data_calon');


 ?>