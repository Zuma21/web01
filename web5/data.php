<?php

    include 'function/function.php';     // menginput data php dari folder lain

    $books = query("SELECT * FROM books");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Buku</title>

    <style>
        *{
            margin: 0;
            padding: 0;
            /* color: #343334; */
            font-family: Arial, Helvetica, sans-serif;
        }

        .container{
            width: 100%;
            height: 100vh;
            background: rgb(134,37,204);
            background: linear-gradient(45deg, rgba(134,37,204,1) 0%, rgba(0,212,255,1) 100%);
            display: flex;
            flex-direction: column;
            flex-direction: center;
            align-items: center;
        }

        .title{
            margin: 10px 0;
            color: white;
        }

        .link{
            margin: 0 0 20px;
            color: white;
            text-decoration: none;
        }
        .link:hover{
            text-decoration: underline;
        }
        
        .table{
            border-collapse: collapse;
            /* border: 1px solid #343334; */
            background-color: #ebebeb;
            border-radius: 5px;
        }

        .table tr.judulTbl{
            color: white;
            background-color: #2b2b2b;
            /* padding: 5px; */
            border-radius: 10px;
            font-weight: bold;
        }
        .table tr.judulTbl td{
            /* border-radius: 10px 10px 0 0; */
            text-align: center;
            border-right: .5px solid #c5c5c5;
        }
        .table tr.judulTbl td:last-child{
            border-bottom: 0px solid black;
        }

        tr:nth-child(even){
            background-color: #c5c5c5;
        }
        tr:last-child td{
            /* border-right: 0px solid black; */
            border-bottom: 0px solid black;
        }
        tr td:last-child{
            border-right: 0px solid black;
        }
        
        td{
            border-right: .5px solid #343334;
            border-bottom: .5px solid #343334;
            padding: 5px;
        }

    </style>

</head>

<body>

    <div class="container">
        <h1 class="title">Data Buku</h1>

        <a href="tambah.php" class="link">Tambah Data</a>

        <table class="table">
            <tr class="judulTbl">
                <td>NO</td>
                <td>Judul</td>
                <td>Penulis</td>
                <td>Penerbit</td>
                <td>Tahun Terbit</td>
                <td>Halaman</td>
            </tr>

        <?php
            $i = 1;
            foreach($books as $buku) :          // foreach hanya untuk me looping array/objek
        ?>

            <tr>
                <td><?= $i ?></td>
                <td><?= $buku['judul']; ?></td>
                <td><?= $buku['penulis']; ?></td>
                <td><?= $buku['penerbit']; ?></td>
                <td><?= $buku['tahun_terbit']; ?></td>
                <td><?= $buku['halaman']; ?></td>
            </tr>

        <?php $i++; ?>
        <?php endforeach; ?>



        </table>
    </div>

</body>

</html>