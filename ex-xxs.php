<?php 
// http://localhost:8080/get.php?name=fazl%3Ch1%3E%3Cscript%3Ealert(%22Hacked!%22)%3C/script%3E%3Ch1%3E
// user lain dapat memodifikasi code kita mengguanakan url get kita
$say = "Hello " . htmlspecialchars($_GET['name']);
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