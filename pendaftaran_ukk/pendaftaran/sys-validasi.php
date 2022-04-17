<?php 
include 'koneksi/koneksi.php';
session_start();
if (isset($_POST['regist'])){
$Status = $_POST['Status'];
$id =$_REQUEST['id'] ;

$simpan2 = "UPDATE form SET Status = '$Status' WHERE form . id = '$id'"; 

$result = mysqli_query($host,$simpan2);
if ($result){
echo "berhasil regis";
}
else{
	echo "gagal lu tolol";
}

}
 ?>
