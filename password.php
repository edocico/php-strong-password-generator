<?php
    session_start();

 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<div class="password">
        <p><span>La tua password é :</span> <?php echo $_SESSION['password'] ?></p>
        <a href="./index.php">Torna indietro</a>
    </div>

</body>
</html>