<?php
session_start();

if (!isset($_SESSION['person'])) {
    header("Location: index.php");
    exit();
}

$person = unserialize($_SESSION['person']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hasil Data</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="result">
            <p><strong>Hi, my name is <?= htmlspecialchars($person->getFullName()) ?></strong></p>
            <p>Phone Number : <?= htmlspecialchars($person->getPhone()) ?></p>
            <p>Address : <?= htmlspecialchars($person->getAddress()) ?></p>
            <a href="reset.php" class="reset">Reset</a>
        </div>
    </div>
</body>
</html>