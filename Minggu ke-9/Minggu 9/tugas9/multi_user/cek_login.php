<?php 
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];


// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($host,"select * from tb_user where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if($cek > 0){

	$data = mysqli_fetch_assoc($login);

	// cek jika user login sebagai admin
	if($data['Hak']=="a"){

		// buat session login dan username
		$_SESSION['username'] = $yuli;
		$_SESSION['Hak'] = "a";
		// alihkan ke halaman dashboard admin
		header("location:halaman_admin.php");

	// cek jika user login sebagai operator 1
	}else if($data['Hak']=="operator 1"){
		// buat session login dan username
		$_SESSION['username'] = $shofi;
		$_SESSION['Hak'] = "operator 1";
		// alihkan ke halaman dashboard operrator 1
		header("location:halaman_operator1.php");

	// cek jika user login sebagai operator 2
	}else if($data['Hak']=="operator 2"){
		// buat session login dan username
		$_SESSION['username'] = $intan;
		$_SESSION['Hak'] = "operator 2";
		// alihkan ke halaman dashboard operator 2
		header("location:halaman_opertaor2.php");

	}else{

		// alihkan ke halaman login kembali
		header("location:index.php?pesan=gagal");
	}	
}else{
	header("location:index.php?pesan=gagal");
}

?>