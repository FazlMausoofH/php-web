<?php 
// http://localhost:8080/getarray.php?numbers[]=6&numbers[]=4&numbers[]=6
//Jika menggunakan array ( []= )akan di eksekusi berkali kali tidak di timpa
$numbers = $_GET['numbers'];
$total = 0;

foreach($numbers as $number){
    $total += $number;
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

<h1>Total = <?= $total ?></h1>
    
</body>
</html>