<?php

echo "This is While loop tutorial <br>";
echo "<br>";

$i = 0;
$x = 9;

/*
while ($i < 10) {
    echo $i+1;
    echo "<br>";
    $i++;
}
*/

while ($i < 500 && $x < 60) {
    echo $i + 1;
    echo "<br>";
    $i++;
    $x += 2;
}
