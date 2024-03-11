<?php

// Connectinf to the Database
$servername = "localhost";
$username = "root";
$password = "";

// Creat a connection
$conn = mysqli_connect($servername, $username, $password);

// Die if connection was not successful
if (!$conn) {
    die("Sorry we failed to connect: " . mysqli_connect_error());
} else {
    echo "Connection was successful!";
}


// Create a db
$sql = "CREATE DATABASE dbnitis1";
$result = mysqli_query($conn, $sql);

// Check for the database creation success
if ($result) {
    echo "The db was created successfully!";
} else {
    echo "The db was not created successfully because of this erro...!" . mysqli_error($conn);
}

echo "The result is: ";
echo var_dump($result);
echo "<br>";
