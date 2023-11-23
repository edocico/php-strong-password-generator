<?php

$number = $_GET['number'] ?? null;

$symbols = "abcdefghijklmnopqrstxywuvz123456789";



function getRandomPassword($chosenNum, $symbolsList) {

    $password = [];

    while (count($password) < $chosenNum) {
        $random = rand(0, strlen($symbolsList) - 1);
        $password[] = $symbolsList[$random];
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
        <p><span>La tua password é :</span> <?php echo implode(getRandomPassword($number, $symbols))?></p>
    </div>
    
</body>
</html>