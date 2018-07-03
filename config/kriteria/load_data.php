<?php 
include 'config/koneksi.php';

$hasil = mysqli_query($koneksi, "SELECT kriteria.id, kriteria.nama, kriteria.bobot, kriteria.jenis, subkriteria.nama as nama_subkriteria , subkriteria.bobot as bobot_subkriteria, subkriteria.id as subkriteria_id FROM kriteria left join subkriteria on (kriteria.id=subkriteria.kriteria_id)");

while ($data = mysqli_fetch_assoc($hasil)) {
	$datas[$data['nama']][] = $data;
}

 ?>