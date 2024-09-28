<?php
//1. koneksi
include("../koneksi.php");

//2. variable hapus berdasarkan apa?
$nopas = $_GET['nopas'];

//3. menuliskan query hapus
$sql = "DELETE FROM pasien WHERE nopas='$nopas'";

//4. menjalankan query hapus
$qry = mysqli_query($koneksi,$sql);

//5. pengalihan halaman
?>
<script>
    document.location="index.php";
</script>