<?php

session_start();
$_SESSION['name'] = 'Edoardo';
$number = $_GET['number'] ?? null;

$symbols = "abcdefghijklmnopqrstxywuvz123456789?!@#&%ABCDEFGHIJKLMNOPQRSTUWXYZ";


require_once __DIR__ . '/partials/functions.php';
if ($number) {
    $_SESSION['password'] = implode(getRandomPassword($number, $symbols));
    header('Location: ./password.php');  
}
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">
    <title>PHP Strong Password Generator</title>
</head>
<body>

    <div class="title">
        <h1>PHP Strong Password Generator</h1>
    </div>
    <div class="form-input">
        <p>Inserisci il numero di lettere da cui vuoi che sia composta la tua password</p>
        <form class="form" action="" method="GET">
            <input class="input" type="number" placeholder="inserisci un numero" name="number">
            <input class="button" type="submit" value="invia">
        </form> 
    </div>

   
   
    
</body>
</html>