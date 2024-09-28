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
$sql = "INSERT INTO pemeriksaan (id_periksa,tgl_periksa,nopas,id_penyakit,kd_obat,jum_obat,biaya_periksa) VALUES ('$id_periksa','$tgl','$nopas','$id_penyakit','$kd_obat','$jum','$biaya')";

// menjalankan query
$qry = mysqli_query($koneksi,$sql);

// pengalihan halaman setelah berhasil ditambahkan
?>
<script>
    document.location="index.php";
</script>

