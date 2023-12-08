<?php
include 'Header.php';
echo "<br>"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat Form Login</title>
</head>

<style>
label
{
width:120px;
padding: left 50%;
float: left;
}
</style>

<body>
<Form action="Outputlogin" method="get">
    <h1>SUMBER BERKAH</h1>
    <form action="">
        <form>
            <div>
                <label>Username</label>
                <input name="name" type="text" size="" maxlength="">
            </div>
            <br>
            <div>
                <label>Password</label>
                <input name="password" type="password">
            </div>
            <br>
            <div>
                <input type="submit" value="Login/Masuk">
            </div>
        </form>
    </form>

   

    
</body>
</html>