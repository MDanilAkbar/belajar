<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    
    <?php include("../header.php") ?>
<br>
    <div class="content">
            <h5>Halaman Pemeriksaan</h5><br>

            <a href="tambah_pemeriksaan.php" class="btn">Tambah</a><br><br>

            <table class="table" border="" align="center" width="100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>ID Pemeriksaan</th>
                        <th>Tanggal Pemeriksaan</th>
                        <th>Nomor Pasien</th>
                        <th>ID Penyakit</th>
                        <th>Kode Obat</th>
                        <th>Jumlah Obat</th>
                        <th>Biaya Pemeriksaan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    //koneksi
                    include("../koneksi.php");

                    // tuliskan query
                    $sql = "SELECT * FROM pemeriksaan INNER JOIN pasien ON pemeriksaan.nopas=pasien.nopas INNER JOIN penyakit ON pemeriksaan.id_penyakit=penyakit.id_penyakit INNER JOIN obat ON pemeriksaan.kd_obat=obat.kd_obat";
                    

                    //jalankan query
                    $qry = mysqli_query($koneksi,$sql);

                    //looping Data
                    $nomor = 1;
                    foreach ($qry as $data) {
                    ?>
                    <tr>
                    <th scope="row"><?php echo $nomor++ ?></th>
                    <td><?php echo $data['id_periksa']?></td>
                    <td><?php echo $data['tgl_periksa']?></td>
                    <td><?php echo $data['nopas']?></td>
                    <td><?php echo $data['id_penyakit']?></td>
                    <td><?php echo $data['kd_obat']?></td>
                    <td><?php echo $data['jum_obat']?></td>
                    <td><?php echo $data['biaya_periksa']?></td>
                    <td>
                        <a href="edit_pemeriksaan.php?id_periksa=<?php echo $data['id_periksa'] ?>">Edit</a>  |
                        <a href="hapus_pemeriksaan.php?id_periksa=<?php echo urlencode($data['id_periksa']); ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus Data pemeriksaan <?php echo $data['id_periksa'] ?>?')">Hapus</a>
                    </td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
    </div>
</body>
</html>