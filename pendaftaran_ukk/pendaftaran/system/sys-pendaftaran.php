<?php
include'../koneksi/koneksi.php';
session_start();
if (isset($_POST['pendaftaran'])){
    $nama = $_POST['nama'];
    $asalsekolah = $_POST['asalsekolah'];
    $nisn = $_POST['nisn'];
    $jk = $_POST['jk'];
    $ttl = $_POST['ttl'];
    $nohp = $_POST['Nohp'];
    $noskhu = $_POST['noskhu'];
    $alamat = $_POST['alamat'];
    $foto = $_FILES['foto'];
    $nmfoto = "{$_SESSION['id']}-.jpg";
    move_uploaded_file($foto['tmp_name'], "../status-interface");


    $simpan1 = "INSERT INTO form set nama='$nama', asalsekolah='$asalsekolah', nisn='$nisn', jk='$jk', ttl='$ttl', nohp='$nohp', noskhu='$noskhu', alamat='$alamat',id = {$_SESSION['id']},foto= '$nmfoto'";

    $result = mysqli_query($host,$simpan1);
    if ($result){
    header('location:../status-interface/status-user.php');
    }
    else{
    echo "gagal lu tolol";
}   
}
?>