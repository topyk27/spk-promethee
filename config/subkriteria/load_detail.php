<?php 
include 'config/koneksi.php';

$id = $_GET['id'];

$hasil = mysqli_query($koneksi, "SELECT subsubkriteria.id, subsubsubkriteria.id as subsubsubkriteria_id, subsubkriteria.nama, subsubkriteria.bobot, subsubkriteria.jenis, subsubsubkriteria.nama as nama_subsubsubkriteria , subsubsubkriteria.bobot as bobot_subsubsubkriteria FROM subsubkriteria left join subsubsubkriteria on (subsubkriteria.id=subsubsubkriteria.subsubkriteria_id) where subsubkriteria.id='$id'");

while ($data = mysqli_fetch_assoc($hasil)) {
	$data_subsubkriteria[] = $data;
}

 ?>