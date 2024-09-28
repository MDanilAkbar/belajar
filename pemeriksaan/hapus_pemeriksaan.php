<?php
//1. koneksi
include("../koneksi.php");

//2. variable hapus berdasarkan apa?
$id_periksa = $_GET['id_periksa'];

//3. menuliskan query hapus
$sql = "DELETE FROM pemeriksaan WHERE id_periksa='$id_periksa'";

//4. menjalankan query hapus
$qry = mysqli_query($koneksi,$sql);

//5. pengalihan halaman
?>
<script>
    document.location="index.php";
</script>