<?php
// Koneksi ke Database
    include("../koneksi.php");

// mengambil setiap request name dari form
$kd_obat = $_POST['kd_obat'];
$nm = $_POST['nm_obat'];
$harga = $_POST['harga'];

// menuliskan SQL query untuk menambahkan data ke tabel jenis
$sql = "INSERT INTO obat (kd_obat,nm_obat,harga) VALUES ('$kd_obat','$nm','$harga')";

// menjalankan query
$qry = mysqli_query($koneksi,$sql);

// pengalihan halaman setelah berhasil ditambahkan
?>
<script>
    document.location="index.php";
</script>

