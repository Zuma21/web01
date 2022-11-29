<!-- laman ini untuk menambahkan data -->

<?php
include 'function/funcTambah.php';         // menyambung ke fungsi tambah.php
// header('location:../Pertemuan5/Pertemuan5.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Data</title>
    <link rel="stylesheet" href="styleTambah.css">
</head>
<body>
    
    <div class="container">
        <h1 class="title">Tambahkan Data Baru</h1>

        <form action="" method="POST" class="form">

            <div class="nim inputan">
                <input type="number" name="nim_mahasiswa" id="nim_mahasiswa" placeholder="NIM">
            </div>
            <div class="nama inputan">
                <input type="text" name="nama_mahasiswa" id="nama" placeholder="Nama">
            </div>
            <div class="kelas inputan">
                <select name="kelas_mahasiswa" id="kelas">
                    <option value="" disabled selected>Kelas</option>
                    <option value="A">Kelas A</option>
                    <option value="B">Kelas B</option>
                    <option value="C">Kelas C</option>
                    <option value="D">Kelas D</option>
                </select>
            </div>
            <div class="jurusan inputan">
                <select name="jurusan" id="jurusan">
                    <option value="" disabled selected>Jurusan</option>
                    <option value="TI">Teknik Informatika</option>
                    <option value="SI">Sistem Informasi</option>
                    <option value="SI">Biologi</option>
                    <option value="SI">Kimia</option>
                </select>
            </div>
            <div class="alamat inputan">
                <textarea name="alamat" id="alamat" cols="30" rows="10" placeholder="Alamat"></textarea>
            </div>
            <div class="tombol inputan">
                <input type="submit" class="submit" name="submit" value="Tambah Data">
            </div>

            <!-- <button name="submit">Tambah Data</button> -->
        </form>
    </div>

</body>
</html>