<?php
include 'functions/funcDeleteData.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Data</title>
    <link rel="stylesheet" href="css/styleTambahDataLaporan.css">
</head>
<body>
    <div class="container">
        <h1 class="title">Delete Data</h1>
        <?php 
            foreach ($result as $row) :
        ?>
        <form action="" method="POST" class="form">

            <input type="hidden" name="id" value="<?= $row['id_provinsi']; ?>">

            <div class="provinsi inputan">
                <input type="text" name="nama_provinsi" id="nama_provinsi" value="<?= $row['nama_provinsi']; ?>" readonly>
            </div>
            <div class="kabupaten inputan">
                <input type="text" name="nama_kabupaten" id="nama_kabupaten" value="<?= $row['nama_kabupaten']; ?>" readonly>
            </div>
            <div class="ibuKota inputan">
                <input type="text" name="nama_ibu_kota" id="nama_ibu_kota" value="<?= $row['nama_ibu_kota']; ?>" readonly>
            </div>
            <div class="bupati inputan">
                <input type="text" name="nama_bupati/walikota" id="nama_bupati/walikota" value="<?= $row['nama_bupati/walikota']; ?>" readonly>
            </div>
            <div class="kecamatan inputan">
                <input type="text" name="nama_kecamatan" id="nama_kecamatan" value="<?= $row['nama_kecamatan']; ?>" readonly>
            </div>
            <div class="kelurahan inputan">
                <input type="text" name="nama_kelurahan" id="nama_kelurahan" value="<?= $row['nama_kelurahan']; ?>" readonly>
            </div>

            <div class="tombol inputan">
                <input type="submit" id="submit" class="submit delete_data" name="submit" value="Delete">
                <!-- <button type="submit" name="submit" class="submit" value="update_data">UPDATE</button> -->
            </div>
        </form>
        <?php 
            endforeach;
        ?>
    </div>

    <script>
        confirm
    </script>

</body>
</html>