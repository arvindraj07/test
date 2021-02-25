<?php
include "../koneksi.php";
$nama = mysqli_real_escape_string($koneksi,$_POST['nama']);
$alamat = mysqli_real_escape_string($koneksi,$_POST['alamat']);
$kerja = mysqli_real_escape_string($koneksi,$_POST['kerja']);

$sql = "INSERT INTO user(nama, alamat, pekerjaan)
        VALUES ('$nama','$alamat','$kerja')";

mysqli_query($koneksi,$sql);
header("location: ../index.php");
