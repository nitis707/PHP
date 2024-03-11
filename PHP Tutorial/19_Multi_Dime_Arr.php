<?php

echo "This is Multi-Dimensional Array tutorial! <br>";
echo "<br>";

// Creating a 2-d array
$multiDime = array(
    array(2, 5, 7, 8),
    array(1, 2, 3, 1),
    array(4, 5, 0, 1)
);

// echo var_dump($mutiDime) . "<br>";

echo $multiDime[0][0] . "<br>" . "<br>";

// Printing the content of a 2-d Array.
for ($i = 0; $i < count($multiDime); $i++) {
    echo var_dump($multiDime[$i]);
    echo "<br>";
}
echo "<br>";


for ($i = 0; $i < count($multiDime); $i++) {
    for ($j = 0; $j < count($multiDime[$i]); $j++) {
        echo $multiDime[$i][$j];
        echo " ";
    }
    echo "<br>";
}
echo "<br>";

$three_dim1 = array(
    array(
        array(0, 0, 18),
        array(0, 0, 19),
        array(0, 0, 20)
    ),
    array(
        array(0, 0, 15),
        array(0, 0, 16),
        array(0, 0, 17)
    ),
    array(
        array(0, 0, 18),
        array(0, 0, 19),
        array(0, 0, 14)
    )

);

for ($i = 0; $i < count($three_dim1); $i++) {
    for ($j = 0; $j < count($three_dim1[$i]); $j++) {
        for ($k = 0; $k < count($three_dim1[$i][$j]); $k++) {
            echo $three_dim1[$i][$j][$k];
            echo " ";
        }
    }
    echo "<br>";
}
echo "<br>";

// Using table printing 3-d array.
$three_dim = array(
    array(
        array('Anees', 'Raza', 18),
        array('Daniyal', 'ali', 19),
        array('Huzaifa', 'akram', 20)
    ),
    array(
        array('Amir', 'Pilla', 15),
        array('hassan', 'ali', 16),
        array('owais', 'raza', 17)
    ),
    array(
        array('joel', 'shah', 18),
        array('ubaid', 'ahmed', 19),
        array('irkan', 'ali', 14)
    )

);

echo "<table border=1 style='margin:10% auto; width:50vw; height:40vh; text-align:center;'>";
for ($i = 0; $i < count($three_dim); $i++) {
    for ($j = 0; $j < count($three_dim[$i]); $j++) {
        echo "<tr>";
        for ($k = 0; $k < count($three_dim[$i][$j]); $k++) {
            echo "<td>" . $three_dim[$i][$j][$k] . "<td>";
        }
        echo "<tr>";
    }
}
echo "</table>";
