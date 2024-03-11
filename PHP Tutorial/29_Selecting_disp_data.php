<?php
// Connectinf to the Database
$servername = "localhost";
$username = "root";
$password = "";
$dbName = "dbnitis1";

// Creat a connection
$conn = mysqli_connect($servername, $username, $password, $dbName);
// Die if connection was not successful
if (!$conn) {
    die("Sorry we failed to connect: " . mysqli_connect_error());
} else {
    echo "Connection was successful <br>";
}
echo"<br>";

$sql = "SELECT * FROM `phptrip`";
$result = mysqli_query($conn, $sql);

// find the numbers of recors returned
$num = mysqli_num_rows($result);
echo $num . " records found in a database";
echo "<br>";

// Disply the rows returned by the sql query
if ($num > 0) {

    // $row = mysqli_fetch_assoc($result); // fetch record one - by - one
    // echo var_dump($row);
    // echo "<br>";

    // $row = mysqli_fetch_assoc($result); // fetch record one - by - one
    // echo var_dump($row);
    // echo"<br>";
    // $row = mysqli_fetch_assoc($result); // fetch record one - by - one
    // echo var_dump($row);
    // echo"<br>";

    // We can fetch in a better way using the while loop
    // while ($row = mysqli_fetch_assoc($result)) {
    //     echo var_dump($row);
    //     echo "<br>";
    // }

    // To show in clean way without var_dump
    while ($row = mysqli_fetch_assoc($result)) {
        // echo var_dump($row);
        echo $row["sno"] . ". Hello " . $row["name"] . " Welcome to " . $row["dest"];
        echo "<br>";
    }
}
