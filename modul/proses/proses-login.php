<?php
session_start();
include "../koneksi.php";

$email = mysqli_real_escape_string($koneksi, $_POST['email']);
$pass = mysqli_real_escape_string($koneksi, $_POST['pass']);
$sql = "SELECT * FROM user_login WHERE email = '$email' AND password = '$pass'";
$hasil = mysqli_query($koneksi, $sql);


$row = mysqli_fetch_assoc($hasil);
if ($row['email'] == $email) {
    $_SESSION['login'] = 1;

    $_SESSION['email'] = $row['email'];

    header("location: ../index.php");
} else {
    $message = "email atau passoword Salah...";
    echo "<script type='text/javascript'>alert('$message');
			window.location.href='../index.php';</script> ";
}
