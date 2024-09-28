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
<h2>Tambah Data Penyakit</h2>
<div class="card-body">
            <form method="POST" action="proses_tambah.php" >
            <div class="form-control">
                <label >ID Penyakit </label>
                <input type="text" name="id_penyakit">
            </div>
            <div class="form-control">
                <label >Nama Penyakit </label>
                <input type="text" name="nm_penyakit" >
            </div>
            <div class="form-control">
            <button type="submit">Tambah</button>
            </div>
            </form>

            </div>
</body>
</html>