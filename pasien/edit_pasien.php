<?php
//1. koneksi
include("../koneksi.php");

//2. ambil request GEt dari tombol edit
$nopas = $_GET['nopas'];

//3. menulisakn query
$sql = "SELECT * FROM pasien WHERE nopas='$nopas'";

//4. menjalankan query
$qry = mysqli_query($koneksi,$sql);

//5. pisahkan array dari record data tabel
$data = mysqli_fetch_array($qry);
?>
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
<h2>Edit Data Pasien</h2>
<div class="card-body">
            <form method="POST" action="proses_edit.php" >
            <div class="form-control">
                <label >Nomor Pasien </label>
                <input readonly value="<?php echo $data['nopas'] ?>" type="text" name="nopas">
            </div>
            <div class="form-control">
                <label >Nama Pasien </label>
                <input value="<?php echo $data['nm_pas'] ?>" type="text" name="nm_pas" >
            </div>
            <div class="form-control">
                <label >Tanggal Lahir </label>
                <input value="<?php echo $data['tgl_lahir'] ?>" type="date" name="tgl_lahir" >
            </div>
            <div class="form-control">
                <label >Alamat </label>
                <input value="<?php echo $data['alamat'] ?>" type="text" name="alamat" >
            </div>
            <div class="form-control">
            <button type="submit">Edit</button>
            </div>
            </form>

            </div>
</body>
</html>