<!DOCTYPE html>
<html>
<head>
	<title>CRUD</title>
</head>
<body>
	<center>
		<h1>SIMPLE CRUD PHP TEMPLATE</h1>
		<form method="GET" action="create.php">
			<table>
				<tr>
					<td>Nama</td>
					<td>:</td>
					<td><input type="text" name="nama"></td>
				</tr>
				<tr>
					<td>Jenis Kelamin</td>
					<td>:</td>
					<td><input type="radio" name="jenis" value="Laki-laki">L
					<input type="radio" name="jenis" value="Perempuan">P</td>
				</tr>
				<tr>
					<td>Asal Sekolah</td>
					<td>:</td>
					<td><input type="text" name="asal"></td>
				</tr>
				<tr>
					<td>Nilai</td>
					<td>:</td>
					<td><input type="text" name="nilai"></td>
				</tr>
				<tr>
					<td>Jurusan</td>
					<td>:</td>
					<td><input type="text" name="jurusan"></td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td>:</td>
					<td><input type="text" name="alamat"></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td><input type="submit" value="CREATE"></td>
				</tr>
				<br>
			</table>
		</form>

		<br>
		<table border="1px" width="70%">
			<tr>
				<th>Nama</th>
				<th>Jenis Kelamin</th>
				<th>Asal Sekolah</th>
				<th>Nilai</th>
				<th>Jurusan</th>
				<th>Alamat</th>
				<th colspan="2">Option</th>
			</tr>
			<?php
			include "koneksi.php";
			$query	=	mysqli_query($koneksi, "select * from siswa");

			while ($isi = mysqli_fetch_array($query)) {
				echo "
				<tr>
					  <td>".$isi['Nama']."</td>
					  <td>".$isi['Jenis']."</td>
					  <td>".$isi['Asal']."</td>
					  <td>".$isi['Nilai']."</td>
					  <td>".$isi['Jurusan']."</td>
					  <td>".$isi['Alamat']."</td>
					  <td><a href='update.php?Nama=".$isi['Nama']."'>UPDATE</a></td>
					  <td><a href='delete.php?Nama=".$isi['Nama']."'>DELETE</a></td>
				</tr>
					  ";	
			}
			?>
		</table>
	</center>
</body>
</html>