<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Output</title>
</head>
<body>
<h1>HASIL SIGN UP</h1>
<?php
    if(isset($_GET['nama']) |isset($_GET['password'])){
        echo "Nama :" . $_GET ['nama'] ."<br>";
        echo "Password :" . $_GET ['password'] ."<br>";
    }
    ?>
    
</body>
</html>