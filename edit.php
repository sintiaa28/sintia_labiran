<html>
<head>
	<title>Tabel Aplikasi</title>
</head>
<body>
 
	<h3>TABEL APLIKASI</h3>
	<br/>
	<a href="index.php">Kembali</a>
	<br/>
	<br/>
	<h3>Edit Data Aplikasi</h3>
 
	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from aplikasi where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update.php">
			<table>
				<tr>			
					<td>Aplikasi</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
						<input type="text" name="nama" value="<?php echo $d['nama']; ?>">
					</td>
				</tr>
				<tr>
					<td>Jumlah Pengguna</td>
					<td><input type="number" name="jumlah" value="<?php echo $d['jumlah']; ?>"></td>
				</tr>
				<tr>
					<td>Developer</td>
					<td><input type="text" name="leader" value="<?php echo $d['leader']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
 
</body>
</html>