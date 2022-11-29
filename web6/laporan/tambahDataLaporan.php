<!-- laman ini untuk menambahkan data -->

<?php
include 'functions/funcTambahData.php';         // menyambung ke fungsi tambah.php
// header('location:../Pertemuan5/Pertemuan5.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Provinsi</title>
    <link rel="stylesheet" href="css/styleTambahDataLaporan.css">
</head>
<body>
    
    <div class="container">
        <h1 class="title">Tambahkan Data Baru</h1>

        <form action="" method="POST" class="form">

            <div class="provinsi inputan">
                <input type="text" name="nama_provinsi" id="nama_provinsi" placeholder="Nama Provinsi">
            </div>
            <div class="kabupaten inputan">
                <input type="text" name="nama_kabupaten" id="nama_kabupaten" placeholder="Nama Kabupaten">
            </div>
            <div class="ibuKota inputan">
                <input type="text" name="nama_ibu_kota" id="nama_ibu_kota" placeholder="Nama Ibu Kota">
            </div>
            <div class="bupati inputan">
                <input type="text" name="nama_bupati/walikota" id="nama_bupati/walikota" placeholder="Nama Bupati/Walikota">
            </div>
            <div class="kecamatan inputan">
                <input type="text" name="nama_kecamatan" id="nama_kecamatan" placeholder="Nama Kecamatan">
            </div>
            <div class="kelurahan inputan">
                <input type="text" name="nama_kelurahan" id="nama_kelurahan" placeholder="Nama Kelurahan">
            </div>
            <div class="tombol inputan">
                <input type="submit" class="submit" name="submit" value="Tambah Data">
            </div>

            <!-- <button name="submit">Tambah Data</button> -->
        </form>
    </div>

</body>
</html>