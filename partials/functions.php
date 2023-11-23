<?php

function getRandomPassword($chosenNum, $symbolsList) {

    $password = [];

    while (count($password) < $chosenNum) {
        $random = rand(0, strlen($symbolsList) - 1);
        $password[] = $symbolsList[$random];
    };

    return $password;
}; 

?>