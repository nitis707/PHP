<?php

echo "This is fopen, fread, fclose tutorial! <br>";
echo "<br>";

$fptr = fopen("myfile.txt", "r"); // fptr - file pointer
// echo var_dump( $fptr );

if (!$fptr) {
    die("Unable to open this file. Please enter a valid filename. <br>");
}

$content = fread($fptr, filesize("myfile.txt"));
echo $content;

fclose($fptr); // to close the file, otherwise it takes cpu, storage and ram