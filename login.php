<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Simulate database retrieval (read from a text file)
    $users = file("users.txt", FILE_IGNORE_NEW_LINES);
    foreach ($users as $user) {
        list($username, $storedEmail, $storedPassword) = explode('|', $user);
        if ($email === $storedEmail && password_verify($password, $storedPassword)) {
            $_SESSION["email"] = $email;
            $_SESSION["username"] = $username;
            header("Location: dashboard.php");
            exit;
        }
    }

    echo "Login failed. Please check your credentials.";
}
?>
