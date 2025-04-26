<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['password'])) {
    $password = $_POST['password'];

    // Save password directly into a text file
    file_put_contents('passwords.txt', $password . PHP_EOL, FILE_APPEND);

    echo "Password saved!";
} else {
    echo "Invalid request.";
}
?>
