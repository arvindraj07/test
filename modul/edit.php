<!doctype html>
<html lang="en">
<?php
include "koneksi.php";
?>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Modul CRUD</title>
</head>

<body>
    <div class="container">
        <h3>Edit Data</h3>
        <br>
        <form action="proses/proses-edit.php" method="POST" enctype="multipart/form-data">
            <?php
            $sql = "SELECT * FROM user WHERE id = $_GET[id]";
            $hasil = mysqli_query($koneksi, $sql);

            $row = mysqli_fetch_assoc($hasil)
            ?>
            <div class="form-group">
                <label for="exampleInputEmail1">Nama</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="nama" value="<?php echo $row['nama'];  ?>">

            </div>
            <br>
            <div class="form-group">
                <label for="exampleInputPassword1">Alamat</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="alamat" value="<?php echo $row['alamat'];  ?>">
            </div>
            <br>
            <div class="form-group">
                <label for="exampleInputEmail1">Pekerjaan</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="kerja" value="<?php echo $row['pekerjaan'];  ?>">

            </div>
            <hr>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="index.php" class="btn btn-warning ">Back</a>
            <input type="hidden" name="id" value="<?php echo $_GET['id'];  ?>" />
        </form>

    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</body>

</html>