<?php

include "../koneksi.php";

$sql = "DELETE FROM user
		WHERE id = $_GET[id]";

mysqli_query($koneksi, $sql);

header('Location: ../index.php');
