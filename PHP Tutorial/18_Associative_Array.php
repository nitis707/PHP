<?php

echo "This is Associative Array tutorial! <br>";
echo "<br>";

// Normal Array - This are indexed array.
// $arr = array('this', 'that', 'what');
// echo $arr[0];

// Associative arrays
$favCol = array(
    'shubham' => 'red',
    'nitis' => 'green',
    'aryan' => 'blue',
    8 => 'this'
);

echo $favCol['nitis'] . "<br>";
echo $favCol['aryan'] . "<br>";
echo $favCol['shubham'] . "<br>";
echo $favCol[8] . "<br>";


foreach ($favCol as $key => $value) {
    echo "Favourite color of $key is: $value <br>";
}