<?php
if(isset($_GET['url'])){
	// All Route
	switch ($_GET['url']) {
		case 'dashboard':
			include 'halaman/dashboard.php';
			break;

		case 'data_pengguna':
			require_once 'config/pengguna/load_data.php';
			include 'halaman/pengguna/index.php';
			break;
		case 'data_pengguna_tambah':
			include 'halaman/pengguna/tambah.php';
			break;
		case 'data_pengguna_lihat':
			require_once 'config/pengguna/load_detail.php';
			include 'halaman/pengguna/lihat.php';
			break;
		case 'data_pengguna_ubah':
			require_once 'config/pengguna/load_detail.php';
			include 'halaman/pengguna/ubah.php';
			break;
		case 'pengaturan':
			require_once 'config/pengguna/load_pengguna.php';
			include 'halaman/pengguna/pengaturan.php';
			break;

		case 'data_program_bantuan':
			require_once 'config/program_bantuan/load_data.php';
			include 'halaman/program_bantuan/index.php';
			break;
		case 'data_program_bantuan_tambah':
			include 'halaman/program_bantuan/tambah.php';
			break;
		case 'data_program_bantuan_lihat':
			require_once 'config/program_bantuan/load_detail.php';
			include 'halaman/program_bantuan/lihat.php';
			break;
		case 'data_program_bantuan_ubah':
			require_once 'config/program_bantuan/load_detail.php';
			include 'halaman/program_bantuan/ubah.php';
			break;

		case 'data_calon':
			require_once 'config/calon/load_data.php';
			include 'halaman/calon/index.php';
			break;
		case 'data_calon_tambah':
			include 'halaman/calon/tambah.php';
			break;
		case 'data_calon_lihat':
			require_once 'config/calon/load_detail.php';
			include 'halaman/calon/lihat.php';
			break;
		case 'data_calon_ubah':
			require_once 'config/calon/load_detail.php';
			include 'halaman/calon/ubah.php';
			break;

		case 'data_kriteria':
			require_once 'config/kriteria/load_data.php';
			include 'halaman/kriteria/index.php';
			break;
		case 'data_kriteria_tambah':
			include 'halaman/kriteria/tambah.php';
			break;
		case 'data_kriteria_lihat':
			require_once 'config/kriteria/load_detail.php';
			include 'halaman/kriteria/lihat.php';
			break;
		case 'data_kriteria_ubah':
			require_once 'config/kriteria/load_detail.php';
			include 'halaman/kriteria/ubah.php';
			break;

		case 'data_subkriteria':
			require_once 'config/subkriteria/load_data.php';
			include 'halaman/subkriteria/index.php';
			break;
		case 'data_subkriteria_tambah':
			include 'halaman/subkriteria/tambah.php';
			break;
		case 'data_subkriteria_lihat':
			require_once 'config/subkriteria/load_detail.php';
			include 'halaman/subkriteria/lihat.php';
			break;
		case 'data_subkriteria_ubah':
			require_once 'config/subkriteria/load_detail.php';
			include 'halaman/subkriteria/ubah.php';
			break;

		case 'proses_seleksi':
			require_once 'config/koneksi.php';
			require_once 'config/proses_seleksi/load_kriteria.php';
			include 'halaman/seleksi/proses_seleksi.php';
			break;

		case 'hasil_seleksi':
			require_once 'config/koneksi.php';
			require_once 'config/proses_seleksi/load_kriteria.php';
			require_once 'config/proses_seleksi/load_calon.php';
			require_once 'config/pro/fungsi_preferensi.php';
			require_once 'config/proses_seleksi/proses_seleksi.php';
			include 'halaman/seleksi/hasil_seleksi.php';
			break;

		default:
			include 'halaman/404.php';
			break;
	}
}else{
	include 'halaman/dashboard.php';
}

?>