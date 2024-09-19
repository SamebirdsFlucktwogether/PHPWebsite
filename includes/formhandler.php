<?php

// var_dump($_SERVER["REQUEST_METHOD"]); // Print what method you use

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //htmlspecialchars is for secure submit // &amp
    $firstName = htmlspecialchars($_POST["firstname"]);
    $lastName = htmlspecialchars($_POST["lastname"]);
    $favoritePet = htmlspecialchars($_POST["favoritepet"]);

    if (empty($firstName)){
        exit();
    }

    echo "This is the details submitted: ";
    echo "<br>";
    echo $firstName;
    echo "<br>";
    echo $lastName;
    echo "<br>";
    echo $favoritePet;
}