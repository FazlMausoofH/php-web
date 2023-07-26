<?php 
// http://localhost:8080/getmultiple.php?first_name=Fazl&last_name=Mausoof
// jika di timpa contoh di akhir + first_name=nikelz maka akan jadi "Hello Nikelz Musoof"
$say = "Hello " . $_GET['first_name'] . " " . $_GET['last_name'];
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