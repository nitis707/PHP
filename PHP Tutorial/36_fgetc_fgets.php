<?php

echo "This is fgetc and fgets tutorial! <br>";
echo "<br>";

$fptr = fopen("myfile.txt", "r");
// "fgets" read file line by line
// if we write one "fgets" then it only read first line in the file
/*
echo fgets( $fptr );
echo fgets( $fptr );
echo fgets( $fptr );
*/

/* Reading a file line by line...

while ($a = fgets($fptr)) { // while loop file ke saare line ko read karke dega jab tak false na ho jaye.
    echo $a;
}
echo "<br>";
echo "End of the file has been reached!";

while ($a = fgets($fptr)) { // while loop file ke saare line ko read karke dega jab tak false na ho jaye.
    echo $a;
    break; // It only print one first line in the file.
}
echo "<br>";
echo "End of the file has been reached!";


*/

/* Reading a file by character by character

while ($a = fgetc($fptr)) {
    echo $a;
    break; // If we use break statement it will read only one character because break stop the loop.
}
echo"<br>";
echo"End of the file has been reached!";

*/

/* Write a program which reads the content of a file until "." has been encountered.
*/
while($a = fgetc($fptr)) {
    echo $a;
    if($a == ".") {
        break;
    }
}
fclose($fptr);