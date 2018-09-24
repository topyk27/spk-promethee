<?php 

$hasil = mysqli_query($koneksi, "SELECT distinct KRITERIA.* FROM KRITERIA");

while ($data_row = mysqli_fetch_assoc($hasil)) {
	$datas['data'][$data_row['nama']] = $data_row;

	$hasil2 = mysqli_query($koneksi, "SELECT * FROM SUBKRITERIA WHERE KRITERIA_ID =".$datas['data'][$data_row['nama']]['id']);
	while ($data_row2 = mysqli_fetch_assoc($hasil2)) {
		$datas['data'][$data_row['nama']]['subkriteria'][] = $data_row2;
	}
	$bobot[] = $datas['data'][$data_row['nama']]['bobot'];
}
$datas['ekstra']['total_bobot'] = array_sum($bobot);
$data_kriteria = $datas;
unset($datas);

// echo json_encode($data_kriteria);
 ?>