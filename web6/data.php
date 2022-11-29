<?php

    include 'function/funcData.php';     // menginput librari data php dari folder lain

    // $data = query("SELECT * FROM tb_kelas_b");
    $data = tampilkan_data();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Buku</title>
    <link rel="stylesheet" href="styleData.css">

</head>

<body>

    <div class="container">
        <h1 class="title">Data Buku</h1>

        <!-- akan terhubung ke pertemuan6.php untuk menambahkan data -->
        <button class="btn"><a href="tambah.php" class="link">Tambah Data</a></button>      

        <table class="table">
            <tr class="judulTbl">
                <td>No</td>
                <td>NIM</td>
                <td>Nama</td>
                <td>Kelas</td>
                <td>Jurusan</td>
                <td>Alamat</td>
            </tr>

        <?php
            $i = 1;
            foreach($data as $dataMhs) :          // foreach hanya untuk me looping array/objek
        ?>

            <tr>
                <td><?= $i ?></td>
                <td><?= $dataMhs['nim_mahasiswa']; ?></td>
                <td><?= $dataMhs['nama_mahasiswa']; ?></td>
                <td><?= $dataMhs['kelas_mahasiswa']; ?></td>
                <td><?= $dataMhs['jurusan']; ?></td>
                <td><?= $dataMhs['alamat']; ?></td>
            </tr>

        <?php $i++; ?>
        <?php endforeach; ?>



        </table>
    </div>

</body>

</html>