<?php
require_once 'Person.php';

function prosesForm($data) {
    $firstname = trim($data['firstname']);
    $lastname = trim($data['lastname']);
    $phone = trim($data['phone']);
    $address = trim($data['address']);

    return new Person(
        $firstname,
        $lastname,
        $phone,
        $address
    );
}
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    $person = prosesForm($_POST);
}

