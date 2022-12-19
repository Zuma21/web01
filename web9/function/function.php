<?php
$konek = mysqli_connect('localhost', 'root', '', 'laporan_prak_web1');

if(isset($_POST['submit'])){
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    $sql = "SELECT * FROM tb_user WHERE username = '$user' AND password = '$pass'";
    $result = mysqli_query($konek, $sql);

    if(mysqli_num_rows($result) === 1){
        $row = mysqli_fetch_assoc($result);
        echo"
        <script>
            alert('Anda berhasi Login');
            window.location.href = '../web8/data.php';
        </script>
        ";
    } else{
        echo"
        <script>
            alert('Username atau Password salah!');
            window.location.href = login.php';
        </script>
        ";
    }
}
?>