<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<?php include("../header.php") ?> <br><br><br><br>
<h2>Tambah Data Pasien</h2>
<div class="card-body">
            <form method="POST" action="proses_tambah.php" >
            <div class="form-control">
                <label >Nomor Pasien </label>
                <input type="text" name="nopas">
            </div>
            <div class="form-control">
                <label >Nama Pasien </label>
                <input type="text" name="nm_pas" >
            </div>
            <div class="form-control">
                <label >Tanggal Lahir </label>
                <input type="date" name="tgl_lahir" >
            </div>
            <div class="form-control">
                <label >Alamat </label>
                <input type="text" name="alamat" >
            </div>
            </div class="form-control">
            <button type="submit">Tambah</button>
            </div>
            </form>

            </div>
</body>
</html>