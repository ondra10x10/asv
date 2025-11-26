
<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: login.html");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>ASV – Dashboard</title>
</head>
<body>
<h1>Vítej, <?php echo htmlspecialchars($_SESSION['user']); ?>!</h1>
<p>Tady bude obsah pro přihlášené.</p>

<a href="logout.php">Odhlásit</a>
</body>
</html>
