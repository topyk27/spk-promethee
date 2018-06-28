<?php 
include 'config/koneksi.php';

$hasil = mysqli_query($koneksi, "SELECT subsubkriteria.id, subsubkriteria.nama, subsubkriteria.bobot, subsubkriteria.jenis, subsubsubkriteria.nama as nama_subsubsubkriteria , subsubsubkriteria.bobot as bobot_subsubsubkriteria FROM subsubkriteria left join subsubsubkriteria on (subsubkriteria.id=subsubsubkriteria.subsubkriteria_id)");

while ($data = mysqli_fetch_assoc($hasil)) {
	$datas[$data['nama']][] = $data;
}
 ?>