<?php
// Koneksi ke Database
    include("../koneksi.php");

// mengambil setiap request name dari form
$nopas = $_POST['nopas'];
$nm = $_POST['nm_pas'];
$tgl = $_POST['tgl_lahir'];
$alamat = $_POST['alamat'];

// menuliskan SQL query untuk menambahkan data ke tabel jenis
$sql = "UPDATE pasien SET nm_pas='$nm', tgl_lahir='$tgl',alamat='$alamat' WHERE nopas='$nopas'";

// menjalankan query
$qry = mysqli_query($koneksi,$sql);

// pengalihan halaman setelah berhasil ditambahkan
?>
<script>
    document.location="index.php";
</script>

