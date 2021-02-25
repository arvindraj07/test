<?php
include "../koneksi.php";
$email = mysqli_real_escape_string($koneksi, $_POST['email']);
$pass = mysqli_real_escape_string($koneksi, $_POST['pass']);


$sql = "INSERT INTO user_login(email, password)
        VALUES ('$email','$pass')";

mysqli_query($koneksi, $sql) or die(mysqli_error($koneksi));
header("location: ../login.php");
