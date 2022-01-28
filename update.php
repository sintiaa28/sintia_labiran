<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$jumlah = $_POST['jumlah'];
$leader = $_POST['leader'];
 
// update data ke database
mysqli_query($koneksi,"update aplikasi set nama='$nama', jumlah='$jumlah', leader='$leader' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>