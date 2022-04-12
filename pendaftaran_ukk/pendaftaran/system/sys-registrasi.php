<?php 
include '../koneksi/koneksi.php';
session_start();
if (isset($_POST['regist'])){
$username = $_POST['username'];
$password = $_POST['password'];

$simpan = "INSERT INTO user(username,password)
values('$username','$password')";

$result = mysqli_query($host,$simpan);
if ($result){
echo "berhasil regis";
}
else{
	echo "gagal lu tolol";
}

}
 ?>
