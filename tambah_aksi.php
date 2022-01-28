<?php 
// koneksi database
include 'koneksi.php';
 

$nama = $_POST['nama'];
$jumlah = $_POST['jumlah'];
$leader = $_POST['leader'];
 if (!empty($nama) || !empty($jumlah) || !empty($leader)) {
// menginput data ke database
mysqli_query($koneksi,"insert into aplikasi values('','$nama','$jumlah','$leader')");
 }
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>