<?php 
include 'config/koneksi.php';

$id = $_GET['id'];

$hasil = mysqli_query($koneksi, "SELECT kriteria.id, subkriteria.id as subkriteria_id, kriteria.nama, kriteria.bobot, kriteria.jenis, subkriteria.nama as nama_subkriteria , subkriteria.bobot as bobot_subkriteria FROM kriteria left join subkriteria on (kriteria.id=subkriteria.kriteria_id) where subkriteria.id='$id'");

while ($data = mysqli_fetch_assoc($hasil)) {
	$data_subkriteria[] = $data;
}

 ?>