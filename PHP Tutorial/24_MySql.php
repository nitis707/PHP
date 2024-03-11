<?php
echo "Welcome to the stage where we are ready to get connectd to a database! <br>";

/* Way to connect tjo a MySQL Database
1. MySQLi extension
2. PDO
*/

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
