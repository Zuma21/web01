<?php

    $hostname = "localhost";
    $username = "root";
    $password =  "";
    $nama_database = "db_kelas_b";

    $konek = mysqli_connect($hostname, $username, $password, $nama_database);
    // if ($konek) {
    //     echo "Anda Berhasil Terhubng Ke data base";
    // } else {
    //     echo "Anda gagal terhubung ke database";
    // }


    function tampilkan_data(){
        global $konek;

        $sql = "SELECT * FROM tb_kelas_b";
        $result = mysqli_query($konek, $sql);
        return $result;
    }


?>