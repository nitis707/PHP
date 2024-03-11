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
    echo "Connection was successful!";
}
echo "<br>";

// Variables to be inserted in table
$name = "Ritesh";
$destination = "Nepal";
// Sql query to be executed
$sql = "INSERT INTO `phptrip` (`name`, `dest`) VALUES ('$name', '$destination')";
$result = mysqli_query($conn, $sql);

// Add a new trip to the Trip table in the database
if ($result) {
    echo "The record has been inserted successfully! <br>";
} else {
    echo "The record has not been inserted successfully because of this error..." . mysqli_error($conn);
}
