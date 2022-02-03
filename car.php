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
    <link rel="stylesheet" href="../css/style.css?v=<?php echo time(); ?>">
    <title>Inserisci un annuncio</title>
</head>

<body>
    <header>
        <div class="logo">
            <i class="fas fa-heart-broken"></i>
        </div>
        <div class="right-side">
            <nav>
                <ul>
                    <li><a class="nav-link" href="javascript:void(0)">Home</a></li>
                    <li><a class="nav-link" href="javascript:void(0)">Cerca</a></li>
                    <li><a class="nav-link" href="javascript:void(0)">Altro</a></li>
                </ul>
            </nav>
            <a href="./home.php" class="btn">Registrati</a>
        </div>
    </header>

    <main>
        <div class="container">
            <form action="./insert_car_data.php" method="post">
                <div class="row">
                    <h4 class="card-head">Inserisci un annuncio</h4>
                    <div class="row">
                        <div class="col-half">
                            <div class="input-group input-group-icon">
                                <select name="id_client">
                                    <optgroup label="Cliente" class="optg" value="null">
                                        <?php
                                        $arrayOptions = getOptions();
                                        foreach ($arrayOptions as $option)
                                            echo "<option value='{$option['id_client']}'>{$option['firstname']} {$option['lastname']}</option>";
                                        ?>
                                    </optgroup>
                                </select>
                                <div class="input-icon"><i class="far fa-id-card"></i></div>
                            </div>
                        </div>

                        <div class="col-half">
                            <div class="input-group input-group-icon">
                                <input type="text" name="disp" placeholder="Cilindrata" />
                                <div class="input-icon"><i class="fas fa-tachometer-alt"></i></div>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-half">
                            <div class="input-group input-group-icon">
                                <input type="text" name="manufacY" placeholder="Anno di fabbricazione" />
                                <div class="input-icon"><i class="fas fa-industry"></i></div>
                            </div>
                        </div>

                        <div class="col-half">
                            <div class="input-group input-group-icon">
                                <input type="text" name="registY" placeholder="Anno di immatricolazione" />
                                <div class="input-icon"><i class="fas fa-book"></i></div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-half">
                            <div class="input-group input-group-icon">
                                <input type="text" name="brand" placeholder="Marca" />
                                <div class="input-icon"><i class="fas fa-car"></i></div>
                            </div>
                        </div>

                        <div class="col-half">
                            <div class="input-group input-group-icon">
                                <input type="text" name="model" placeholder="Modello" />
                                <div class="input-icon"><i class="fas fa-car-side"></i></div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-half">
                            <div class="input-group input-group-icon">
                                <input type="text" name="doors" placeholder="Numero porte" />
                                <div class="input-icon"><i class="fas fa-door-closed"></i></div>
                            </div>
                        </div>

                        <div class="col-half">
                            <div class="input-group input-group-icon">
                                <input type="text" name="color" placeholder="Color" />
                                <div class="input-icon"><i class="fas fa-palette"></i></div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-half">
                            <div class="input-group input-group-icon">
                                <input type="text" name="optional" placeholder="Optional" />
                                <div class="input-icon"><i class="fas fa-funnel-dollar"></i></div>
                            </div>
                        </div>

                        <div class="col-half">
                            <div class="input-group input-group-icon">
                                <input type="text" name="amount" placeholder="Prezzo" />
                                <div class="input-icon"><i class="fas fa-dollar-sign"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-half">
                        <div class="input-grup">
                            <input type="submit" value="Inserisci annuncio" checked="true" />
                        </div>
                    </div>

                    <div class="col-half">
                        <input type="reset" />
                    </div>
                </div>
            </form>
        </div>
    </main>

    <script src="https://kit.fontawesome.com/7e4562a0b9.js" crossorigin="anonymous"></script>
</body>

</html>