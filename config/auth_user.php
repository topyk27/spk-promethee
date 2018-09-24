<?php 
session_start();

if (!isset($_SESSION['login'])) {
	header('location:login.php');
	$_SESSION['pesan'] = "Anda harus login terlebih dahulu";
	exit();
}

 ?>