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
            <h5>Halaman Obat</h5><br>

            <a href="tambah_obat.php" class="btn">Tambah</a><br><br>

            <table class="table" border="" align="center" width="100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode Obat</th>
                        <th>Nama Obat</th>
                        <th>harga</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    //koneksi
                    include("../koneksi.php");

                    // tuliskan query
                    $sql = "SELECT * FROM obat";

                    //jalankan query
                    $qry = mysqli_query($koneksi,$sql);

                    //looping Data
                    $nomor = 1;
                    foreach ($qry as $data) {
                    ?>
                    <tr>
                    <th scope="row"><?php echo $nomor++ ?></th>
                    <td><?php echo $data['kd_obat']?></td>
                    <td><?php echo $data['nm_obat']?></td>
                    <td><?php echo $data['harga']?></td>
                    <td>
                        <a href="edit_obat.php?kd_obat=<?php echo $data['kd_obat'] ?>">Edit</a>  |
                        <a href="hapus_obat.php?kd_obat=<?php echo urlencode($data['kd_obat']); ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus Data obat <?php echo $data['nm_obat'] ?>?')">Hapus</a>
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