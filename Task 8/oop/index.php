<?php

    require('frog.php');

    $sheep = new Animal("shaun");

    echo "Name : " . $sheep->name . "<br>";
    echo "Legs : " . $sheep->legs . "<br>";
    echo "cold blooded : " . $sheep->cold_blooded . "<br><br>";

    $kodok = new Frog("buduk");

    echo "Name : " . $kodok->name . "<br>";
    echo "Legs : " . $kodok->legs . "<br>";
    echo "cold blooded : " . $kodok->cold_blooded . "<br><br>";
    $kodok->jump();

    $sungokong = new Ape("kera sakti");

    echo "Name : " . $sungokong->name . "<br>";
    echo "Legs : " . $sungokong->legs . "<br>";
    echo "cold blooded : " . $sungokong->cold_blooded . "<br><br>";
    $sungokong->yell();
    
    
    
?>