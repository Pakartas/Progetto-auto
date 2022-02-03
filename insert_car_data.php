<?php

$serverName = "localhost";
$username = "root";
$password = "";
$dbName = "esercizio-autousate-db";

// Create connection
$conn = new mysqli($serverName, $username, $password, $dbName);

// Check connection
if ($conn->connect_error)
    die("Connection failed: " . $conn->connect_error);

$idClient = $_POST['id-client'];
$manu = $_POST['manufacY'];
$regi = $_POST['registY'];
$brand = $_POST['brand'];
$model = $_POST['model'];
$disp = $_POST['disp'];
$doors = $_POST['doors'];
$color = $_POST['color'];
$optional = $_POST['optional'];
$amount = $_POST['amount'];

$sql = "INSERT INTO `car` (`id_client`, `manufacture_year`, `registration_year`, `brand`, `model`, `displacement`, `doors`, `color`, `optional`, `amount`)
        VALUES (
            '" . $idClient . "',
            '" . $manu . "',
            '" . $regi . "',
            '" . $brand . "',
            '" . $model . "',
            '" . $disp . "',
            '" . $doors . "',
            '" . $color . "',
            '" . $optional . "',
            '" . $amount . "'
        )";

if ($conn->query($sql) === TRUE)
    echo "Annuncio inserito :)";
else
    echo "Error: " . $sql . "<br>" . $conn->error;

$conn->close();
