<?php
include "koneksi.php";
$nama	=	$_GET['Nama'];

$query	=	mysqli_query($koneksi, "delete from siswa where Nama = '".$nama."'");

if ($query){
	echo "
		<script>
		alert('Berhasil');
		window.location.href='read.php';
		</script>
		 ";
}else{
	echo "Gagal Menghapus Data";
}
?>