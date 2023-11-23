<?php

$number = $_GET['number'] ?? null;

$letters = "abcdefghijklmnopqrstxywuvz";

var_dump($letters);
var_dump($letters[4]);
var_dump(strlen($letters));

function getRandomPassword($chosenNum, $lettersPull) {

    $password = [];

    while (count($password) < $chosenNum) {
        $random = rand(0, strlen($lettersPull) - 1);
        $password[] = $lettersPull[$random];
    };

    return $password;
}; 
 
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

    <div class="password">
        <p><span>La tua password é :</span> <?php echo implode(getRandomPassword($number, $letters))?></p>
    </div>
    
</body>
</html>