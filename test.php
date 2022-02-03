<?php

function getOptions()
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

    $sql = "SELECT id_client, firstname, lastname FROM client";

    $result = $conn->query($sql);

    $resultArray = array();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            array_push($resultArray, $row);
        }
        return $resultArray;
    } else
        echo "0 results";

    $conn->close();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="test.php" method="GET">
        <select name="id_client">
            <?php
            $arrayOptions = getOptions();
            foreach ($arrayOptions as $option)
                echo "<option value='{$option['id_client']}'>{$option['firstname']} {$option['lastname']}</option>";
            ?>
        </select>
        <input type="submit" name="submit" value="submit">
    </form>

    <?php
    if (isset($_GET['submit']))
        echo "<h1>ID: {$_GET['id_client']}</h1>";
    ?>

    <script src="appHome.js"></script>
</body>

</html>