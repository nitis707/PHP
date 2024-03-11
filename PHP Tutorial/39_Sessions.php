<?php

echo"This is Sessions tutorial! <br>";
echo "<br>";

// What is a session?
// Use to manage Information across diffrent pages

// Verify the user login info
session_start(); // to start the session
$_SESSION['username'] = "Nitis";
$_SESSION['favCat'] = "Book";
echo"We have saved your sessions";