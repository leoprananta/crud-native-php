<!DOCTYPE html>
<html>
<head>
	<title>CRUD</title>
</head>
<body>
	<center>
		<h1>UPDATE DATA</h1>
			<?php
				include "koneksi.php";

				$nama	=	$_GET['Nama'];

				$query	=	mysqli_query($koneksi, "select * from siswa where Nama = '".$nama."'");
				$isi	=	mysqli_fetch_array($query);
			?>

		<form method="GET" action="">
			<table>
				<tr>
					<td>Nama</td>
					<td>:</td>
					<td><input type="text" name="nama" value="<?php echo $isi['Nama']; ?>"></td>
				</tr>
				<tr>
					<td>Jenis Kelamin</td>
					<td>:</td>
					<?php
						if ($isi['Jenis'] == "Laki-laki"){
							echo "<td><input type='radio' name='jenis' value='Laki-laki' checked> L <input type='radio' name='jenis' value='Perempuan'> P</td>";
						}else{
							echo "<td><input type='radio' name='jenis' value='Laki-laki'> L <input type='radio' name='jenis' value='Perempuan' checked> P</td>";
						}
					?>
				</tr>
				<tr>
					<td>Asal Sekolah</td>
					<td>:</td>
					<td><input type="text" name="asal" value="<?php echo $isi['Asal']; ?>"></td>
				</tr>
				<tr>
					<td>Nilai</td>
					<td>:</td>
					<td><input type="text" name="nilai" value="<?php echo $isi['Nilai']; ?>"></td>
				</tr>
				<tr>
					<td>Jurusan</td>
					<td>:</td>
					<td><input type="text" name="jurusan" value="<?php echo $isi['Jurusan']; ?>"></td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td>:</td>
					<td><input type="text" name="alamat" value="<?php echo $isi['Alamat']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td><input type="submit" value="UPDATE" name="updt"></td>
				</tr>
				<br>
			</table>
		</form>
</center>
</body>
</html>

<?php
if (isset($_GET['updt'])){
	include "koneksi.php";

	$nama 	=	$_GET['nama'];
	$jenis 	=	$_GET['jenis'];
	$asal 	=	$_GET['asal'];
	$nilai 	=	$_GET['nilai'];
	$jurusan=	$_GET['jurusan'];
	$alamat =	$_GET['alamat'];

	$query 	=	mysqli_query($koneksi, "update siswa set Nama='".$nama."', Jenis='".$jenis."', Asal='".$asal."', Nilai='".$nilai."', Jurusan='".$jurusan."', Alamat='".$alamat."' where Nama='".$nama."'");

	if ($query){
		echo "
			<script>
			alert('Berhasil');
			window.location.href='read.php';
			</script>
			 ";
	}else{
		echo "Gagal Update Data";
	}
}
?>