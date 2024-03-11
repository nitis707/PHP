<?php

$name = "Nitish is a good boy";
echo "$name";
echo "<br>";
echo "<br>";

// In php we have write "." to add two strings
echo "The legth of " . "my string is: " . strlen($name);
echo "<br>";
echo "<br>";

echo"Word count of Nitish is: ";
echo str_word_count($name);
echo "<br>";
echo "<br>";

echo "Reverse of Nitish: ";
echo strrev($name);
echo "<br>";
echo "<br>";

// to search any thing in string
echo "The sh is start from: ";
echo strpos($name,"sh");
echo "<br>";
echo "<br>";

echo str_replace("Nitish","Sourya", $name);
echo "<br>";
echo "<br>";

echo str_repeat($name, 4);
echo "<br>";
echo "<br>";

// <pre>It is used to render the spaces</pre>
echo "<pre>";
echo rtrim("    this is a good boy  "); // rtrim means trim spaces from Right
echo "<br>";
echo ltrim("    this is a good boy  "); // rtrim means trim spaces form left
echo "</pre>";