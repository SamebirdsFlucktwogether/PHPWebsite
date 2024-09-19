<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
        echo "Hello Portfolio website";
        
        $name = "Marvin V";
        echo $name;

        //Variablles

        // Sacalar type (contains one value)
        $string = "Marvin";
        $int = 123456789; //"123456789" is a text
        $float = 2.3456;
        $bool = true; //true 1 /false 0


        //Array type (contains multiple)
        $names = array("Marvin", "Villanueva", "etc"); // ["Marvin", "Villanueva", "etc"]


        // Object type
        $object = new Car();


        // String operator
        $a = "Hello";
        $b = "World!";
        $c = $a . " " . $b; // concatenate . between two variables
        echo $c;

        // "Hello World!"

        // Arithmetic operator

        echo 1 + 2; // addition
        echo 1 - 2; //substraction
        echo 10 % 2; //division
        echo 25 * 4; //multiplication
        echo 10 ** 3; //power of 

        //Comparison operator

        $a = 3;
        $b = 4;

        if ($a == $b){
            echo "This statement is false";
        }
    ?>
</body>

</html>