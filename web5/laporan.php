<!-- 
Judul: PHP Query Select

Buat Database dengan nama laporan_prak_web1
Lalu buat tabel dengan nama tbl_provinsi, Memiliki Field :
    -id_provinsi
    -nama_provinsi
    -nama_kabupaten
    -nama_ibu_kota
    -nama_bupati/walikota
    -nama_kecamatan
    -nama_kelurahan
dan minimal memiliki 5 data
-->

<?php

    include 'function/functionLaporan.php';     // menginput data php dari folder lain

    $tbl_provinsi = query("SELECT * FROM tbl_provinsi");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Buku</title>
    <link rel="stylesheet" href="css/laporan.css">

</head>

<body>

    <div class="container">
        <h1 class="title">Tabel Provinsi</h1>
        <p class="greading">Created with <span> &#9829;</span> by <a href="#">Zul Fadli Ahmad</a></p>
        <button type="button" onclick="comein()" class="btn">Gaskan</button>
        <table class="table slide-top dnone">
            <tr class="judulTbl">
                <td>NO</td>
                <td>Provinsi</td>
                <td>Kabupaten</td>
                <td>Ibu Kota</td>
                <td>Bupati / Walikota</td>
                <td>Kecamatan</td>
                <td>Kelurahan</td>
            </tr>
            
            <?php
            $i = 1;
            foreach($tbl_provinsi as $provinsi) :          // foreach hanya untuk me looping array/objek
                ?>

            <tr>
                <td><?= $i ?></td>
                <td><?= $provinsi['nama_provinsi']; ?></td>
                <td><?= $provinsi['nama_kabupaten']; ?></td>
                <td><?= $provinsi['nama_ibu_kota']; ?></td>
                <td><?= $provinsi['nama_bupati/walikota']; ?></td>
                <td><?= $provinsi['nama_kecamatan']; ?></td>
                <td><?= $provinsi['nama_kelurahan']; ?></td>
            </tr>
            
            <?php $i++; ?>
            <?php endforeach; ?>

        </table>
    </div>

    <script src="js/laporan.js"></script>

</body>

</html>