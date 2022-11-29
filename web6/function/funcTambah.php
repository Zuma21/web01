<?php
include 'funcData.php';

// untuk menambah data
function tambah_data($data){
    global $konek;

    // die(print_r($data));

    $nim = $data['nim_mahasiswa'];
    $nama = $data['nama_mahasiswa'];
    $kelas = $data['kelas_mahasiswa'];
    $jurusan = $data['jurusan'];
    $alamat = $data['alamat'];

    $sql = "INSERT INTO tb_kelas_b 
            VALUES ('', '$nim', '$nama', '$kelas', '$jurusan', '$alamat')";
    return mysqli_query($konek, $sql);
}


if (isset($_POST['submit'])) {                  // untuk memerika data yang dikirim

    if (tambah_data($_POST) > 0) {
        echo "
                <script>
                    alert('Tambah Data Berhasil');
                    window.location.href = '../data.php';
                </script>
            ";
    } else {
        echo "
                <script>
                    alert('Tambah Data Gagal');
                    window.location.href = '../tambah.php';
                </script>
            ";
    }
}

?>