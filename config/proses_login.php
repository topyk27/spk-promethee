<?php 

	include('koneksi.php');

	session_start();

	$username = $_POST['username'];
	$password = $_POST['password'];

	$query = "SELECT * FROM pengguna where username ='$username' AND password='".md5($password)."'";

	$hasil = mysqli_query($koneksi, $query);

	if(mysqli_num_rows($hasil)>0){
		$data = mysqli_fetch_assoc($hasil);
		$_SESSION['login'] = true;
		$_SESSION['id'] = $data['id'];
		$_SESSION['username'] = $data['username'];
		$_SESSION['password'] = $data['password'];
		$_SESSION['nama'] = $data['nama'];
		$_SESSION['level'] = $data['level'];

		$_SESSION['pesan'] = "Selamat Datang ".$data['nama'];
		header('location:../index.php?url=dashboard');
		// var_dump($data);

	}else{
		header('location:../login.php');
		$_SESSION['pesan'] = "Username dan Password yang anda masukkan salah";
	}

 ?>