<?php
include "../koneksi.php";

$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$kerja = $_POST['kerja'];

$sql = "UPDATE user
		SET nama = '$nama',
			alamat = '$alamat',
			pekerjaan = '$kerja'
		WHERE id = $id";

mysqli_query($koneksi, $sql)  or die(mysqli_error($koneksi));

header('Location: ../index.php');
