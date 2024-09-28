<?php
// Koneksi ke Database
    include("../koneksi.php");

// mengambil setiap request name dari form
$id_periksa = $_POST['id_periksa'];
$tgl = $_POST['tgl_periksa'];
$nopas = $_POST['nopas'];
$id_penyakit = $_POST['id_penyakit'];
$kd_obat = $_POST['kd_obat'];
$jum = $_POST['jum_obat'];
$biaya = $_POST['biaya_periksa'];

// menuliskan SQL query untuk menambahkan data ke tabel jenis
$sql = "UPDATE pemeriksaan SET tgl_periksa='$tgl', nopas='$nopas', id_penyakit='$id_penyakit', kd_obat='$kd_obat', jum_obat='$jum', biaya_periksa='$biaya' WHERE id_periksa='$id_periksa'";

// menjalankan query
$qry = mysqli_query($koneksi,$sql);

// pengalihan halaman setelah berhasil ditambahkan
?>
<script>
    document.location="index.php";
</script>

