<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Output Input</title>
</head>
<body>
<?php
    if(isset($_GET['judul_buku']) |isset($_GET['kategori_buku'])){
        echo "nama :" . $_GET ['judul_buku'] ."<br>";
        echo "Kategori Buku :" . $_GET ['Kategori_buku'] ."<br>";
        <harf></harf>
    }
    ?>
</body>
</html>