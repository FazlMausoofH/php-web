<?php 
// http://localhost:8080/get.php?name=fazl
// jika tertimpa akan terganti
$say = "Hello " . $_GET['name'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1><?= $say ?></h1>
    
</body>
</html>