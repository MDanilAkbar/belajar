<?php
//1. koneksi
include("../koneksi.php");

//2. variable hapus berdasarkan apa?
$id_penyakit = $_GET['id_penyakit'];

//3. menuliskan query hapus
$sql = "DELETE FROM penyakit WHERE id_penyakit='$id_penyakit'";

//4. menjalankan query hapus
$qry = mysqli_query($koneksi,$sql);

//5. pengalihan halaman
?>
<script>
    document.location="index.php";
</script>