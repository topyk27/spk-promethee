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
		case 'hasil_seleksi':
			include 'halaman/hasil_seleksi.php';
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
		case 'hasil_seleksi':
			include 'halaman/hasil_seleksi.php';
			break;
		case 'pengaturan':
			require_once 'config/program_bantuan/load_program_bantuan.php';
			include 'halaman/program_bantuan/pengaturan.php';
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
		case 'hasil_seleksi':
			include 'halaman/hasil_seleksi.php';
			break;
		case 'pengaturan':
			require_once 'config/pengguna/load_pengguna.php';
			include 'halaman/pengguna/pengaturan.php';
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

		default:
			include 'halaman/404.php';
			break;
	}
}else{
	include 'halaman/dashboard.php';
}

?>