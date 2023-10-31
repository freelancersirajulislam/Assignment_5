<?php
session_start();

if (isset($_SESSION["email"])) {
    echo "Welcome, " . $_SESSION["username"] . "! This is my dashboard and Data saved are users.txt file in our dashboard.";
} else {
    header("Location: login.html");
    exit;
}
?>
