<?php
// Koneksi ke Database
    include("../koneksi.php");

// mengambil setiap request name dari form
$kd_obat = $_POST['kd_obat'];
$nm = $_POST['nm_obat'];
$harga = $_POST['harga'];

// menuliskan SQL query untuk menambahkan data ke tabel jenis
$sql = "UPDATE obat SET nm_obat='$nm', harga='$harga' WHERE kd_obat='$kd_obat'";

// menjalankan query
$qry = mysqli_query($koneksi,$sql);

// pengalihan halaman setelah berhasil ditambahkan
?>
<script>
    document.location="index.php";
</script>

