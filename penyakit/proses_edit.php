<?php
// Koneksi ke Database
    include("../koneksi.php");

// mengambil setiap request name dari form
$id_penyakit = $_POST['id_penyakit'];
$nm = $_POST['nm_penyakit'];

// menuliskan SQL query untuk menambahkan data ke tabel jenis
$sql = "UPDATE penyakit SET nm_penyakit='$nm' WHERE id_penyakit='$id_penyakit'";

// menjalankan query
$qry = mysqli_query($koneksi,$sql);

// pengalihan halaman setelah berhasil ditambahkan
?>
<script>
    document.location="index.php";
</script>

