<?php

function query($query)
{
    $serverName = "localhost";
    $username = "root";
    $password = "";
    $dbName = "esercizio-autousate-db";

    // Create connection
    $conn = new mysqli($serverName, $username, $password, $dbName);

    // Check connection
    if ($conn->connect_error)
        die("Connection failed: " . $conn->connect_error);

    if ($conn->query($query) === TRUE)
        echo "Query inserito :)";
    else
        echo "Error: " . $query . "<br>" . $conn->error;

    $conn->close();
}
