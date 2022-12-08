<?php

    $konek = mysqli_connect('localhost', 'root', '', 'laporan_prak_web1');

    // 
    function tampil_data($query){
        global $konek;
        
        $sql = "SELECT * FROM tbl_provinsi";
        $result = mysqli_query($konek, $sql);
        return $result;
    }

    // untuk mempermudah dalam menyingkat perintah
    function query($query){
        global $konek;
        $result = mysqli_query($konek, $query);
        $rows = [];         // fungsi ini yang akan di return di bawah

        while($row = mysqli_fetch_assoc($result)){
            $rows[] = $row;                 // dua variable ini harus berbeda
        }

        return $rows;
    }

?>