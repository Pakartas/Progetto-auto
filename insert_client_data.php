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

$cf = $_POST['cf'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$date = $_POST['year'] . '-' . $_POST['month'] . '-' . $_POST['day'];
$address = $_POST['address'];
$city = $_POST['city'];
$province = $_POST['province'];

$sql = "INSERT INTO `client` (`cf`, `firstname`, `lastname`, `date`, `address`, `city`, `province`)
        VALUES (
            '" . $cf . "',
            '" . $firstname . "',
            '" . $lastname . "',
            '" . $date . "',
            '" . $address . "',
            '" . $city . "',
            '" . $province . "'
        )";

if ($conn->query($sql) === TRUE)
    echo "Cliente inserito :)";
else
    echo "Error: " . $sql . "<br>" . $conn->error;

$conn->close();
