<?php 	

$hasil = mysqli_query($koneksi, "SELECT distinct calon.* FROM CALON JOIN CALON_SUBKRITERIA ON (calon.id=CALON_SUBKRITERIA.calon_id) ");

while ($data_row = mysqli_fetch_assoc($hasil)) {
	$datas['data'][$data_row['id']] = $data_row;

	$hasil2 = mysqli_query($koneksi, "SELECT KRITERIA.nama, KRITERIA.id, SUBKRITERIA.NAMA AS nama_subkriteria, SUBKRITERIA.BOBOT AS bobot_subkriteria, CALON_SUBKRITERIA.value  FROM CALON_SUBKRITERIA JOIN SUBKRITERIA ON (SUBKRITERIA.ID=CALON_SUBKRITERIA.subkriteria_id) join KRITERIA ON (KRITERIA.ID=SUBKRITERIA.kriteria_id) WHERE CALON_SUBKRITERIA.CALON_ID =".$datas['data'][$data_row['id']]['id']);

	while ($data_row2 = mysqli_fetch_assoc($hasil2)) {
		$datas['data'][$data_row['id']]['kriteria'][$data_row2['nama']] = $data_row2;
	}
}
// ekstra
// $datas['ekstra']['total_bobot'] = array_sum($bobot);

$data_calon = $datas;

unset($datas);

 ?>