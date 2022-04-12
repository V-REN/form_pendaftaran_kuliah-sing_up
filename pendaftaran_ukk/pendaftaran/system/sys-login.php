<?php 
session_start();
include '../koneksi/koneksi.php';

if (isset($_POST['login'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];

	$perintah = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
	$eksekusi = $host->query($perintah);
	$cek = $eksekusi->num_rows;
	$data = $eksekusi->fetch_array();

	$perintah1 = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
	$eksekusi1 = $host->query($perintah1);
	$cek1 = $eksekusi1->num_rows;
	$data1 = $eksekusi1->fetch_array();

	if ($cek == 1) {
		$_SESSION['id'] = $data['id'];
		$_SESSION['nama_pendaftar'] = $data['nama_pendaftar'];
		$_SESSION['NISN'] = $data['NISN'];
		$_SESSION['username'] = $data['username'];
		$_SESSION['password'] = $data['password'];

		header('location:../halaman_awal/pendaftaran.html');
	}elseif ($cek1 == 1) {
		$_SESSION['id_admin'] = $data1['id_admin'];
		$_SESSION['nama_admin'] = $data1['nama_admin '];
		$_SESSION['username'] = $data1['username'];
		$_SESSION['password'] = $data1['password'];
		$_SESSION['email'] = $data1['email'];
		$_SESSION['level'] = $data1['level'];

		header('location:../index-admin.php');
	}else {
		echo "<script>
			alert('username atau password salah')
			document.location.href='../view/login.php'
		</script>";
	}

}
 ?>		