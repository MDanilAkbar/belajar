<?php
//1. koneksi
include("../koneksi.php");

//2. ambil request GEt dari tombol edit
$id_penyakit = $_GET['id_penyakit'];

//3. menulisakn query
$sql = "SELECT * FROM penyakit WHERE id_penyakit='$id_penyakit'";

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
<h2>Edit Data Penyakit</h2>
<div class="card-body">
            <form method="POST" action="proses_edit.php" >
            <div class="form-control">
                <label >ID Penyakit </label>
                <input readonly value="<?php echo $data['id_penyakit'] ?>" type="text" name="id_penyakit">
            </div>
            <div class="form-control">
                <label >Nama Penyakit </label>
                <input value="<?php echo $data['nm_penyakit'] ?>" type="text" name="nm_penyakit" >
            </div>
            <div class="form-control">
            <button type="submit">Edit</button>
            </div>
            </form>

            </div>
</body>
</html>