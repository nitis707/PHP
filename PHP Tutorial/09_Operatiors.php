<?php
// Operators in php
// It is to perform operation b/w operands to gives result.

/*
1. Arithemetic Operators
2. Assignment Operators
3. Comparison Operators
4. Logical Operators
*/


// 1. Arithemetic Operators
$a = 45;
$b = 8;
echo "For a + b, the result is: " .  ($a + $b) . "<br>";
echo "For a - b, the result is: " .  ($a - $b) . "<br>";
echo "For a * b, the result is: " .  ($a * $b) . "<br>";
echo "For a / b, the result is: " .  ($a / $b) . "<br>";
echo "For a % b, the result is: " .  ($a % $b) . "<br>";
echo "For a ** b, the result is: " .  ($a ** $b) . "<br>";
echo "<br>";

// 2. Assignment Operators - It used to assign values
$x = $a;
echo "For x, the value is: " . $x . "<br>";

$a += 6;
echo "For a, the value is: " . $a . "<br>";

$a -= 6;
echo "For a, the value is: " . $a . "<br>";

$a *= 6;
echo "For a, the value is: " . $a . "<br>";

$a /= 6;
echo "For a, the value is: " . $a . "<br>";

$a %= 6; // $a = $a % 5;
echo "For a, the value is: " . $a . "<br>";
echo "<br>";

// 3. Comparison Operators - It is used for comparison
$y = 17;
$z = 9;
echo "For x == y, the result is: ";
echo var_dump($y == $z) . "<br>";

echo "For x > y, the result is: ";
echo var_dump($y > $z) . "<br>";

echo "For x >= y, the result is: ";
echo var_dump($y >= $z) . "<br>";

echo "For x < y, the result is: ";
echo var_dump($y < $z) . "<br>";

echo "For x <= y, the result is: ";
echo var_dump($y <= $z) . "<br>";

echo "For x <> y, the result is: ";
echo var_dump($y <> $z) . "<br>"; // <> this is not equal to sign in php.
echo "<br>";

// 4. Logical Operators
$m = true;
$n = false;

echo "For m &&(and) n, the resultt is ";
echo var_dump($m && $n) . "<br>";

echo "For m ||(or) n, the resultt is ";
echo var_dump($m || $n) . "<br>";

echo "For !m, the result is ";
echo var_dump(!$m) . "<br>"; // !$m it makes true ko false and false ko true.
