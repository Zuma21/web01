<?php

    $conn = mysqli_connect('localhost', 'root', '', 'perpustakaan');

    // 
    function tampil_data($query){
        global $conn;
        
        $sql = "SELECT *FROM books";
        $result = mysqli_query($conn, $sql);
        return $result;
    }

    // untuk mempermudah dalam menyingkat perintah
    function query($query){
        global $conn;
        $result = mysqli_query($conn, $query);
        $rows = [];         // fungsi ini yang akan di return di bawah

        while($row = mysqli_fetch_assoc($result)){
            $rows[] = $row;                 // dua variable ini harus berbeda
        }

        return $rows;
    }

?>