<?php

echo "This is DateFunction tutorial! <br>";
echo "<br>";

$d = date("dS l F Y");
echo "Today date is $d <br>";

$dat = date("dS F Y, g:i A");
echo "Today date is $dat <br>";
echo "<br>";

echo date("l jS \of F Y h:i:s A") . "<br>";

// Prints: July 1, 2000 is on Saturday
echo "July 1, 2000 is on a " . date("l", mktime(0, 0, 0, 7, 1, 2000)) . "<br>";
echo "<br>";

$year = date("Y"); 
echo "Copyright $year | All right reserved <br>";