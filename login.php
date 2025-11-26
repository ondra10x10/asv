<?php
session_start();

$allowed_users = [
    "ondra" => "heslo123",
    "admin" => "asv2025",
    "test"  => "test"
];

$username = $_POST['username'] ?? "";
$password = $_POST['password'] ?? "";

if (isset($allowed_users[$username]) && $allowed_users[$username] === $password) {
    $_SESSION['user'] = $username;
    header("Location: view.php");
    exit;
} else {
    echo "Špatné přihlašovací údaje.";
}
?>
