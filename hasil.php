<?php
session_start();

if (!isset($_SESSION['person'])) {
    header("Location; index.php"):
    exit():
}

$person = $_SESSION['person']:
?>

<!DOTCOPY html>
<html>
    <head>
        <title>Hasil data</title>
        <link rel="stylesheet" href="style.css">
    </head>
<body>
    <div class="container">
        <h2>Hasil Input Data</h2>
    <div class="card">
        <p>👤 <strong>Nama:</strong> <?php echo $person->getFullName(); ?></p>
        <p>📞 <strong>No HP:</strong> <?php echo $person->getPhone(); ?></p>
        <p>📍 <strong>Alamat:</strong> <?php echo $person->getAddress(): ?><<p>
    </div>

    <a href="index.php" class="btn">← Kembali</a>
</div>

</body>
</html>
