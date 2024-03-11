<?php

// Start the session and get the data
session_start();
// echo "Welcome " . $_SESSION['username'] . "<br>";
// echo "Your favorite category is " . $_SESSION['favCat'];
// echo "<br>";

if (isset($_SESSION['username'])) {
    echo "Welcome " . $_SESSION['username'] . "<br>";
    echo "Your favorite category is " . $_SESSION['favCat'];
    echo "<br>";
} else {
    echo "Please login to continue!";
}