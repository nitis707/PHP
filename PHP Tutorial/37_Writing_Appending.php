<?php

echo "This is Writing and Appending tutorial! <br>";
echo "<br>";

/* Writing file in php

In php kisi bhi file ko write mode me open karenge wo file "create" ho jayegi automatically.
yadi wo file pehle se exist karti hai to uske under ka content khali hojayega.
*/
// $fptr = fopen("myfile2.txt", "w");
// fwrite($fptr,"This is the file on this plane. Please don't argue with me.\n");
// fwrite($fptr,"This is the file on this planet.\n");
// fwrite($fptr,"This is another content");
// fclose($fptr);

/* Appending to a file in php

Append means "Add in the last"
*/
$fptr = fopen("myfile2.txt", "a");
fwrite($fptr,"This is appended content!");
fclose($fptr);