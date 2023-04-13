<?php
session_start();
/*
    if(isset($_GET['username'])){
        echo "O username metido foi: ".$_GET['username']."<br>";
    }
    if(isset($_GET['username'])){
        echo "A password inserida foi:".$_GET['password']."<br>";
    }
*/
$username="xylo";
$password_hash='$2y$10$KjlJaQ2K1jpRFkoUGIyM.ehDgutVNuAyJdLYU6O3/5IrNoKhrx5va';

if(isset($_POST['username']) && isset($_POST['password'])){
    if (password_verify ($_POST['password'], $password_hash) && $_POST['username']==$username) {
        echo "Password correta!";
        $_SESSION['username']=$_POST['username'];
        header("Location:dashboard.php");
    }else{
        echo "Password Errada!";
    }
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">

    <div class="row justify-content-center">
        <form class="TIform" method="POST">
            <a href="index.php">
                <img src="imagens/estg_h.png" alt="estg">
            </a>
            <div class="form-group">
                <label for="username">Username</label>
                <input required type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp" placeholder="Username">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input required type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>