<?php
//1. koneksi
include("../koneksi.php");

//2. ambil request GEt dari tombol edit
$id_periksa = $_GET['id_periksa'];

//3. menulisakn query
$sql = "SELECT * FROM pemeriksaan WHERE id_periksa='$id_periksa'";

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
<h2>Edit Data Pemeriksaan</h2>
<div class="card-body">
            <form method="POST" action="proses_edit.php" >
            <div class="form-control">
                <label >ID Pemeriksaan </label>
                <input readonly value="<?php echo $data['id_periksa'] ?>" type="number" name="id_periksa">
            </div>
            <div class="form-control">
                <label >Tanggal Pemeriksaan </label>
                <input value="<?php echo $data['tgl_periksa'] ?>" type="date" name="tgl_periksa" >
            </div>
            <div class="form-control">
                <label >Nomor Pasien </label>
                <select name="nopas" id="">
                    <option value="">~ Pilih Nomor Pasien ~</option>
                    <?php
                    //1. koneksi
                    include("../koneksi.php");

                    //2. tuliskan query
                    $sql_pas = "SELECT * FROM pasien";

                    //3. jalankan query
                    $qry_pas = mysqli_query($koneksi,$sql_pas);

                    //4. looping data
                    foreach($qry_pas as $data_pas){
                    ?>
                    <option <?php echo ($data['nopas']==$data_pas['nopas']) ? 'selected' : ''?> value="<?php echo $data_pas['nopas']?>"><?php echo $data_pas['nm_pas']?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>
            <div class="form-control">
                <label >ID Penyakit </label>
                <select name="id_penyakit" id="">
                    <option value="">~ Pilih ID Penyakit ~</option>
                    <?php
                    //1. koneksi
                    include("../koneksi.php");

                    //2. tuliskan query
                    $sql_pen = "SELECT * FROM penyakit";

                    //3. jalankan query
                    $qry_pen = mysqli_query($koneksi,$sql_pen);

                    //4. looping data
                    foreach($qry_pen as $data_pen){
                    ?>
                    <option <?php echo ($data['id_penyakit']==$data_pen['id_penyakit']) ? 'selected' : ''?> value="<?php echo $data_pen['id_penyakit']?>"><?php echo $data_pen['nm_penyakit']?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>
            <div class="form-control">
                <label >Kode Obat </label>
                <select name="kd_obat" id="">
                    <option value="">~ Pilih Kode Obat ~</option>
                    <?php
                    //1. koneksi
                    include("../koneksi.php");

                    //2. tuliskan query
                    $sql_ob = "SELECT * FROM obat";

                    //3. jalankan query
                    $qry_ob = mysqli_query($koneksi,$sql_ob);

                    //4. looping data
                    foreach($qry_ob as $data_ob){
                    ?>
                    <option <?php echo ($data['kd_obat']==$data_ob['kd_obat']) ? 'selected' : ''?> value="<?php echo $data_ob['kd_obat']?>"><?php echo $data_ob['nm_obat']?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>
            <div class="form-control">
                <label >Jumlah Obat </label>
                <input value="<?php echo $data['jum_obat'] ?>" type="number" name="jum_obat">
            </div>
            <div class="form-control">
                <label >Biaya Pemeriksaan </label>
                <input value="<?php echo $data['biaya_periksa'] ?>" type="number" name="biaya_periksa">
            </div>
            <div class="form-control">
            <button type="submit">Edit</button>
            </div>
            </form>

            </div>
</body>
</html>