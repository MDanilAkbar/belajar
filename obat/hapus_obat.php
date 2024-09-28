<?php
//1. koneksi
include("../koneksi.php");

//2. variable hapus berdasarkan apa?
$kd_obat = $_GET['kd_obat'];

//3. menuliskan query hapus
$sql = "DELETE FROM obat WHERE kd_obat='$kd_obat'";

//4. menjalankan query hapus
$qry = mysqli_query($koneksi,$sql);

//5. pengalihan halaman
?>
<script>
    document.location="index.php";
</script>