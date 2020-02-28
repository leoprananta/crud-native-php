<?php
include "koneksi.php";

$nama	=	$_GET['nama'];
$jenis	=	$_GET['jenis'];
$asal	=	$_GET['asal'];
$nilai	=	$_GET['nilai'];
$jurusan=	$_GET['jurusan'];
$alamat	=	$_GET['alamat'];

$query	=	mysqli_query($koneksi, "insert into siswa values ('".$nama."', '".$jenis."', '".$asal."', '".$nilai."', '".$jurusan."', '".$alamat."')");

if ($query){
	echo "	<script>
			alert('Berhasil');
			window.location.href='read.php';
			</script>
		 ";
}else{
	echo "Gagal Manambah Data";
}
?>