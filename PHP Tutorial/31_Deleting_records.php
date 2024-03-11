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

// $sql = "DELETE FROM `phptrip` WHERE `dest` = 'Manali' ";
$sql = "DELETE FROM `phptrip` WHERE `dest` = 'Nepal' LIMIT 3"; // Use "LIMIT" to delete limited data.
$result = mysqli_query($conn, $sql);

// To know how many rows affected in updation
$aff = mysqli_affected_rows($conn);
echo "Number of affected rows: $aff <br>";

if($result) {
    echo "Deleted successfully!";
} else {
    $err = mysqli_error($conn);
    echo "Not deleted successfully due to this error... $err <br>";
}
