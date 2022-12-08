<?php
include 'function.php';

// untuk menambah data
function tambah_data($data){
    global $konek;

    // die(print_r($data));

    $prov = $data['nama_provinsi'];
    $kab = $data['nama_kabupaten'];
    $ibkot = $data['nama_ibu_kota'];
    $bupat = $data['nama_bupati/walikota'];
    $kec = $data['nama_kecamatan'];
    $kel = $data['nama_kelurahan'];

    $sql = "INSERT INTO tbl_provinsi 
            VALUES ('', '$prov', '$kab', '$ibkot', '$bupat', '$kec', '$kel')";
    return mysqli_query($konek, $sql);
}


if (isset($_POST['submit'])) {

    if (tambah_data($_POST) > 0) {
        echo "
                <script>
                    alert('Tambah Data Berhasil');
                    window.location.href = 'data.php';
                    header('Location: ');
                </script>
            ";
    } else {
        echo "
                <script>
                    alert('Tambah Data Gagal');
                    window.location.href = 'tambahData.php';
                </script>
            ";
    }
}

?>