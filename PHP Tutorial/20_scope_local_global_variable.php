<?php

echo "This is Scope, Local & Global variables tutorial! <br>";
echo "<br>";

// Scope - Our variable is where accessible.

$a = 98; // Globla variable
$b = 9;

function printValue()
{
    // $a = 97;// Local Variable

    global $a, $b; // Give me the access to this global variable.

    $a = 100;
    $b = 1000; // yadi hum globla keyword se global variable ko lekar aate haia aur agr change kar dete hai global-variable ko like this to permanent change hoga.

    echo "The value of your variable a is $a and b is $b <br>";
}

echo $a;
echo "<br>";
printValue();
echo "<br>";

// Super gobal
echo var_dump($GLOBALS) . "<br>"; // to get all local variable
echo "<br>";

// for specific
echo var_dump($GLOBALS["a"]) . "<br>";
echo var_dump($GLOBALS["b"]) . "<br>";
