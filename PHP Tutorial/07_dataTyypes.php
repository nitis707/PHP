<?php

$name = "nitis";
$age = "21";

/* php data types
1. String
2. Integer
3. Float
4. Boolean
5. Object
6. Array
7. NULL
*/

// 1. String - sequence of characters
$name = "Nitis";
$friend = "Rohan";
echo "$name ka friend is $friend <br>";

// 2. Integer - Non decimal number
$income = 4455;
$debt = 0;

echo "$name ka income is $income and debt is $debt <br>";

// 3. Float - Decimal pont number
$salary = 55555;
$karj = -45.5;

echo "Salary is $salary and karj is $karj <br>";

// 4. Boolean - can be either true or false
$x = true;
$is_friend = false;

// "var_dump" - This function displays structured information about one or more expressions that includes its type and value. Arrays and objects are explored recursively with values indented to show structure.
echo var_dump($x);
echo "<br>";
echo var_dump($is_friend);
echo "<br>";
echo "<br>";

// 5. Object - Instances of classes
// Employee is a class ---. nitis can be an one object


// 6. Array - Used to store multiple values in a single variable
$friends = array("rohan", "shubham", "skillf", "Larry", "nitis", "aryan");
echo var_dump($friends);
echo "<br>";
echo "<br>";

echo $friends[0];
echo "<br>";
echo $friends[1];
echo "<br>";
echo $friends[2];
echo "<br>";
echo $friends[3];
echo "<br>";
echo $friends[4];
echo "<br>";
echo $friends[5];
echo "<br>";
// echo $friends[6];  I t will throw an error as the size of array is 4
echo "<br>";


// 6. NULL
$names = NULL;
echo $names;
echo var_dump($names);