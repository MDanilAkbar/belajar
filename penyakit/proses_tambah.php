<?php
// Koneksi ke Database
    include("../koneksi.php");

// mengambil setiap request name dari form
$id_penyakit = $_POST['id_penyakit'];
$nm = $_POST['nm_penyakit'];

// menuliskan SQL query untuk menambahkan data ke tabel jenis
$sql = "INSERT INTO penyakit (id_penyakit,nm_penyakit) VALUES ('$id_penyakit','$nm')";

// menjalankan query
$qry = mysqli_query($koneksi,$sql);

// pengalihan halaman setelah berhasil ditambahkan
?>
<script>
    document.location="index.php";
</script>

