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
echo "<br>";

$sql = "SELECT * FROM `phptrip` WHERE `dest` = 'Manali' ";
$result = mysqli_query($conn, $sql);

// Usage of WHERE CLAUSE to fetch data from the database
$num = mysqli_num_rows($result);
echo $num . " records found in a database";
echo "<br>";

$no = 1;

if ($num > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        // echo $row["sno"] . ". Hello " . $row["name"] . " Welcome to " . $row["dest"]; 

        // if we don't want to display "sno" of databse
        echo $no . ". Hello " . $row["name"] . " Welcome to " . $row["dest"];
        echo "<br>";
        $no = $no + 1;
    }
}

// Usage of WHERE CLAUSE to update Data
$sql = "UPDATE `phptrip` SET `name` = 'FromBihar' WHERE `phptrip`.`dest` = 'Manali' ";
$result = mysqli_query($conn, $sql);

echo var_dump($result) . "<br>";

// To know how many rows affected in updation
$aff = mysqli_affected_rows($conn);
echo "Number of affected rows: $aff <br>";

if ($result) {
    echo "We updated the record successfully <br>";
} else {
    echo "We could not update the rocords successfully";
}
