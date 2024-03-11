<?php

echo "If else Conditionals <br>";
echo "<br>";

/* if else 

$a = 665;
$b = 9;

if ($a > 78) {
    echo "a is greater than 78.";
} else {
    echo "a is not greater than 78.";
}
*/

/* Elseif ladder

$age = 4;

if ($age > 18) {
    echo "You can drink water with chai and alcohol";
} elseif ($age > 13) {
    echo "You can drink water with chai. No alcohol for you";
} else {
    echo "You can drink water only";
}
echo "<br>";
echo "Done";
*/

/*
$age = 4;

if ($age > 18) {
    echo "You can drink water with chai and alcohol";
}

if ($age > 13) {
    echo "You can drink water with chai. No alcohol for you";
} else {
    echo "You can drink water only";
}
echo "<br>";
echo "Done";
*/

/* Quiz

Write a program to allow a driver to drive only when his age is greater than 25 and less than 65.

*/

$age = 16;

if ($age >= 25 && $age <= 65) {
    echo "You can drive.";
} else {
    echo "You cannot drive";
}
echo "<br>";
