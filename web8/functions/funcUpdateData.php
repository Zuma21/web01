<?php
include 'function.php';

$id = $_POST['id'];     // menangkap id yang dari button

$data = "SELECT * FROM tbl_provinsi WHERE id_provinsi = $id";
$result = mysqli_query($konek, $data); 

// untuk mengubah data
function update_data($data){
    global $konek;

    // die(print_r($data));

    $id = $data['id'];
    $prov = $data['nama_provinsi'];
    $kab = $data['nama_kabupaten'];
    $ibkot = $data['nama_ibu_kota'];
    $bupat = $data['nama_bupati/walikota'];
    $kec = $data['nama_kecamatan'];
    $kel = $data['nama_kelurahan'];

    $sql = "UPDATE `tbl_provinsi` SET
            `id_provinsi` = '$id',
            `nama_provinsi` = '$prov',
            `nama_kabupaten` = '$kab',
            `nama_ibu_kota` = '$ibkot',
            `nama_bupati/walikota` = '$bupat',
            `nama_kecamatan` = '$kec',
            `nama_kelurahan` = '$kel'
            WHERE`id_provinsi` = $id";
    return mysqli_query($konek, $sql);
}


if(isset($_POST['submit'])){
    if (update_data($_POST) > 0) {
        echo "
                <script>
                    window.location.href = 'data.php';
                    alert('Ubah Data Berhasil');
                    header('Location: ');
                </script>
            ";
    } else {
        echo "
                <script>
                    window.location.href = 'tambahData.php';
                    alert('Ubah Data Gagal');
                </script>
            ";
    }
}
?>