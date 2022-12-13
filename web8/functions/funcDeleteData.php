<?php
include 'function.php';

$id = $_POST['id'];     // menangkap id yang dari button

$data = "SELECT * FROM tbl_provinsi WHERE id_provinsi = $id";
$result = mysqli_query($konek, $data); 

// untuk menghapus data
function delete_data($data){
    global $konek;
    $id = $data['id'];

    $sql = "DELETE FROM tbl_provinsi WHERE id_provinsi = $id";
    return mysqli_query($konek, $sql);
}


if(isset($_POST['submit'])){
    if (delete_data($_POST) > 0) {
        echo "
                <script>
                    window.location.href = 'data.php';
                    alert('Hapus Data Berhasil');
                    header('Location: ');
                </script>
            ";
    } else {
        echo "
                <script>
                    window.location.href = 'deleteData.php';
                    alert('Hapus Data Gagal');
                </script>
            ";
    }
}
?>