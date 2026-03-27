<?php
require_once 'Person.php';

//ambil data jadi array
$data = $_POST;
$person = new Person(
    $data['firstname'],
    $data['lastname'],
    $data['phone'],
    $data['address']
);
?>
