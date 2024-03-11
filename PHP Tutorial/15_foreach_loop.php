<?php

echo "This is foreach tutorial <br>";
echo "<br>";

$i = 0;
$arr = array("Bananas", "Apples", "Harpic", "Bread");

/* Using for loop
for ($i = 0; $i < count($arr); $i++) {
    echo $arr[$i];
    echo "<br>";
}
*/

/* Using "foreach" loop */ // Better way than for loop in this array example

foreach ($arr as $value) {
    echo "$value <br>";
}