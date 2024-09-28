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
            <h5>Halaman Pasien</h5><br>

            <a href="tambah_pasien.php" class="btn">Tambah</a><br><br>

            <table class="table" border="" align="center" width="100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nomor Pasien</th>
                        <th>Nama Pasien</th>
                        <th>Tanggal Lahir</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    //koneksi
                    include("../koneksi.php");

                    // tuliskan query
                    $sql = "SELECT * FROM pasien";

                    //jalankan query
                    $qry = mysqli_query($koneksi,$sql);

                    //looping Data
                    $nomor = 1;
                    foreach ($qry as $data) {
                    ?>
                    <tr>
                    <th scope="row"><?php echo $nomor++ ?></th>
                    <td><?php echo $data['nopas']?></td>
                    <td><?php echo $data['nm_pas']?></td>
                    <td><?php echo $data['tgl_lahir']?></td>
                    <td><?php echo $data['alamat']?></td>
                    <td>
                        <a href="edit_pasien.php?nopas=<?php echo $data['nopas'] ?>">Edit</a>  |
                        <a href="hapus_pasien.php?nopas=<?php echo urlencode($data['nopas']); ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus Data pasien <?php echo $data['nm_pas'] ?>?')">Hapus</a>
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