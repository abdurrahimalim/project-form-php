<?php
require_once 'Person.php';

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$phone = $_POST['phone'];
$address = $_POST['address'];

$person = new Person($firstname, $lastname, $phone, $address);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Hasil</title>
        <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <p>Hi, my name is <?php echo $person->getFullName(); ?></p>
        <p>Phone Number: <?php echo $person->getPhone(); ?></p>
        <p>Address: <?php echo $person->getAddress(); ?></p>
    </div>
</body>
</html>