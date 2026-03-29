<?php require_once 'Person.php'; ?>
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <title>Input Form</title>
    <link rel='stylesheet' href='style.css'>
</head>
<body>
<div class='container'>
    <form action='index.php' method='POST'>
        <input type='text' name='firstname' placeholder='Firstname'
               value='<?= isset($_POST["firstname"]) ? htmlspecialchars($_POST["firstname"]) : "" ?>'>

        <input type='text' name='lastname' placeholder='Lastname'
               value='<?= isset($_POST["lastname"]) ? htmlspecialchars($_POST["lastname"]) : "" ?>'>

        <input type='text' name='phone' placeholder='Phone Number'
               value='<?= isset($_POST["phone"]) ? htmlspecialchars($_POST["phone"]) : "" ?>'>

        <textarea name='address' placeholder='Address'><?= isset($_POST['address']) ? htmlspecialchars($_POST['address']) : '' ?></textarea>

        <button type='submit' name='submit'>Submit</button>
    </form>

     <?php
    if (isset($_POST['submit'])) {
        require_once 'proses.php';
        $hasil = prosesForm($_POST);
        require_once 'hasil.php';
        tampilHasil($hasil);
    }
    ?>

</div>
</body>
</html>
