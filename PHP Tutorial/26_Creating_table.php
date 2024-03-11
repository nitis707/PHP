<?php

// Connectinf to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "dbnitis1";
// Creat a connection
$conn = mysqli_connect($servername, $username, $password);
// Die if connection was not successful
if (!$conn) {
    die("Sorry we failed to connect: " . mysqli_connect_error());
} else {
    echo "Connection was successful!";
}
echo"<br>";

// Create a table in the db
$sql = "CREATE TABLE `dbnitis1`.`phptrip` (
    `sno` INT(11) NOT NULL AUTO_INCREMENT , 
    `name` VARCHAR(11) NOT NULL , 
    `dest` VARCHAR(6) NOT NULL,
    PRIMARY KEY (`sno`)
)";
$result = mysqli_query($conn, $sql);

// Check for the table creation success
if ($result) {
    echo "The table was created successfully! <br>";
} else {
    echo "The table was not creatted successfully because of this error..." . mysqli_error($conn);
}