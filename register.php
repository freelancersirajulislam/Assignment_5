<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_BCRYPT);

    // Simulate database storage (append to a text file)
    $user = "$username|$email|$password\n";
    file_put_contents("users.txt", $user, FILE_APPEND);

    header("Location: login.html");
    exit;
}
?>
