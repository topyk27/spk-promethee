<?php

$req = [];
$include = [];

if(isset($_GET['url'])){
	// All Route
	switch ($_GET['url']) {
		case 'dashboard':
			$include[] = 'halaman/dashboard.php';
			break;

		case 'data_pengguna':
			include 'config/middleware/superadmin.php';
			$req[] = 'config/pengguna/load_data.php';
			$include[] = 'halaman/pengguna/index.php';
			break;
		case 'data_pengguna_tambah':
			include 'config/middleware/superadmin.php';
			$include[] = 'halaman/pengguna/tambah.php';
			break;
		case 'data_pengguna_lihat':
			include 'config/middleware/superadmin.php';
			$req[] = 'config/pengguna/load_detail.php';
			$include[] = 'halaman/pengguna/lihat.php';
			break;
		case 'data_pengguna_ubah':
			$req[] = 'config/pengguna/load_detail.php';
			$include[] = 'halaman/pengguna/ubah.php';
			break;
		case 'pengaturan':
			$req[] = 'config/pengguna/load_pengguna.php';
			$include[] = 'halaman/pengguna/pengaturan.php';
			break;

		case 'data_calon':
			$req[] = 'config/calon/load_data.php';
			$include[] = 'halaman/calon/index.php';
			break;
		case 'data_calon_tambah':
			$include[] = 'halaman/calon/tambah.php';
			break;
		case 'data_calon_lihat':
			$req[] = 'config/calon/load_detail.php';
			$include[] = 'halaman/calon/lihat.php';
			break;
		case 'data_calon_ubah':
			$req[] = 'config/calon/load_detail.php';
			$include[] = 'halaman/calon/ubah.php';
			break;

		case 'data_kriteria':
			$req[] = 'config/kriteria/load_data.php';
			$include[] = 'halaman/kriteria/index.php';
			break;
		case 'data_kriteria_tambah':
			include 'config/middleware/superadmin.php';
			$include[] = 'halaman/kriteria/tambah.php';
			break;
		case 'data_kriteria_lihat':
			$req[] = 'config/kriteria/load_detail.php';
			$include[] = 'halaman/kriteria/lihat.php';
			break;
		case 'data_kriteria_ubah':
			include 'config/middleware/superadmin.php';
			$req[] = 'config/kriteria/load_detail.php';
			$include[] = 'halaman/kriteria/ubah.php';
			break;

		case 'data_subkriteria':
			$req[] = 'config/subkriteria/load_data.php';
			$include[] = 'halaman/subkriteria/index.php';
			break;
		case 'data_subkriteria_tambah':
			include 'config/middleware/superadmin.php';
			$include[] = 'halaman/subkriteria/tambah.php';
			break;
		case 'data_subkriteria_lihat':
			$req[] = 'config/subkriteria/load_detail.php';
			$include[] = 'halaman/subkriteria/lihat.php';
			break;
		case 'data_subkriteria_ubah':
			include 'config/middleware/superadmin.php';
			$req[] = 'config/subkriteria/load_detail.php';
			$include[] = 'halaman/subkriteria/ubah.php';
			break;

		case 'proses_seleksi':
			$req[] = 'config/koneksi.php';
			$req[] = 'config/proses_seleksi/load_kriteria.php';
			$include[] = 'halaman/seleksi/proses_seleksi.php';
			break;

		case 'hasil_seleksi':
			$req[] = 'config/koneksi.php';
			$req[] = 'config/proses_seleksi/load_kriteria.php';
			$req[] = 'config/proses_seleksi/load_calon.php';
			$req[] = 'config/pro/fungsi_preferensi.php';
			$req[] = 'config/proses_seleksi/proses_seleksi.php';
			$include[] = 'halaman/seleksi/hasil_seleksi.php';
			break;

		default:
			$include[] = 'halaman/404.php';
			break;
	}
}else{
	$include[] = 'halaman/dashboard.php';
}

?>