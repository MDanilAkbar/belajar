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
            <h5>Halaman Penyakit</h5><br>

            <a href="tambah_penyakit.php" class="btn">Tambah</a><br><br>

            <table class="table" border="" align="center" width="100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>ID Penyakit</th>
                        <th>Nama Penyakit</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    //koneksi
                    include("../koneksi.php");

                    // tuliskan query
                    $sql = "SELECT * FROM penyakit";

                    //jalankan query
                    $qry = mysqli_query($koneksi,$sql);

                    //looping Data
                    $nomor = 1;
                    foreach ($qry as $data) {
                    ?>
                    <tr>
                    <th scope="row"><?php echo $nomor++ ?></th>
                    <td><?php echo $data['id_penyakit']?></td>
                    <td><?php echo $data['nm_penyakit']?></td>
                    <td>
                        <a href="edit_penyakit.php?id_penyakit=<?php echo $data['id_penyakit'] ?>">Edit</a>  |
                        <a href="hapus_penyakit.php?id_penyakit=<?php echo urlencode($data['id_penyakit']); ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus Data penyakit <?php echo $data['nm_penyakit'] ?>?')">Hapus</a>
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