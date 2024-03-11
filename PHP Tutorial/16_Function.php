<?php

echo "This is Function tutorial! <br>";
echo "<br>";

/*
function processMarks($marksArr)
{
    $sum = 0;
    foreach ($marksArr as $value) {
        $sum += $value;
    }
    return $sum;
}

$rohan = [34, 98, 45, 12, 98, 93];
$sumMarks = processMarks($rohan);
echo "Total marks scored by Rohan out of 600 is: $sumMarks <br>";

$nitis = [98, 97, 95, 96, 34, 93];
$sumMarksNitis = processMarks($nitis);
echo "Total marks scored by Rohan out of 600 is: $sumMarksNitis <br>";
*/

function avgMarks($marksArr)
{
    $sum = 0;
    $i = 1;
    foreach ($marksArr as $value) {
        $sum += $value;
        $i++;
    }
    return $sum / $i;
}

$rohan = [34, 98, 45, 12, 98, 93];
$sumMarks = avgMarks($rohan);
echo "Total marks scored by Rohan out of 600 is: $sumMarks <br>";

$nitis = [98, 97, 95, 96, 34, 93];
$sumMarksNitis = avgMarks($nitis);
echo "Total marks scored by Rohan out of 600 is: $sumMarksNitis <br>";