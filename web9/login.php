<?php include('function/function.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    <div class="container">
        <form class="form" action="" method="POST">
            <H2 class="title">LOGIN FORM</H2>
            <input type="text" class="username" name="user" placeholder="Username" autocomplete="off">
            <input type="password" class="pass" name="pass" placeholder="Password" autocomplete="off">
            <button type="submit" name="submit" class="btn">Login Now</button>
        </form>
    </div>

</body>
</html>