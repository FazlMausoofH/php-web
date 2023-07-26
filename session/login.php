<?php 
session_start();


if(isset($_SESSION['login']) && $_SESSION['login'] == true ){
    header('Location: /session/member.php');
    exit();
}

$error = "";
if($_SERVER['REQUEST_METHOD'] == "POST"){
    if($_POST['username'] == 'fazl' && $_POST['password'] == 123){
        //sukses
        $_SESSION['login'] = true;
        $_SESSION['username'] = 'fazl';
        header('Location: /session/member.php');
        exit();
    } else {
        // gagal
        $error = "Login Gagal";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if($error != ""){ ?>
        <h2><?= $error ?></h2>
    <?php } ?>
    <h1>Login Form</h1>
    <form action="/session/login.php" method="post">
        <label for="">Username : 
            <input type="text" name="username" id="">
        </label>
        <br>
        <label for="">Password : 
            <input type="password" name="password" id="">
        </label>
        <br>
        <input type="submit" value="login">
    </form>
</body>
</html>
