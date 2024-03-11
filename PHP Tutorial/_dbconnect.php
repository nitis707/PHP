<?php

// Connecting to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbnitis1";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Die id connection was not successful
if (!$conn) {
    die("Sorry we failed to connect: " . mysqli_connect_error());
} else {
    echo "Connection was successful <br>";
}
