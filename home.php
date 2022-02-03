<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css?v=<?php echo time(); ?>">
    <title>Home</title>
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
            <a href="./car.php" class="btn">Sei già registrato?</a>
        </div>
    </header>

    <main>
        <div class="container">
            <form action="./insert_client_data.php" method="post">
                <div class="row">
                    <h4 class="card-head">Registrati per inserire un annuncio!</h4>

                    <div class="input-group input-group-icon">
                        <input type="text" name="cf" placeholder="Codice Fiscale" />
                        <div class="input-icon"><i class="far fa-id-card"></i></div>
                    </div>

                    <div class="row">
                        <div class="col-half">
                            <div class="input-group input-group-icon">
                                <input type="text" name="lastname" placeholder="Cognome" />
                                <div class="input-icon"><i class="far fa-id-badge"></i></div>
                            </div>
                        </div>

                        <div class="col-half">
                            <div class="input-group input-group-icon">
                                <input type="text" name="firstname" placeholder="Nome" />
                                <div class="input-icon"><i class="far fa-user"></i></div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-half">
                            <div class="input-group input-group-icon">
                                <input type="text" name="city" placeholder="Città" />
                                <div class="input-icon"><i class="fas fa-globe-europe"></i></div>
                            </div>
                        </div>

                        <div class="col-half">
                            <div class="input-group input-group-icon">
                                <input type="text" name="province" placeholder="Provincia" />
                                <div class="input-icon"><i class="fas fa-landmark"></i></div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-half">
                            <div class="input-group input-group-icon">
                                <input type="text" name="address" placeholder="Indirizzo" />
                                <div class="input-icon"><i class="fas fa-map-marker-alt"></i></div>
                            </div>
                        </div>

                        <div class="col-half">
                            <div class="input-group">
                                <div class="col-third">
                                    <input type="text" name="day" placeholder="Giorno" />
                                </div>
                                <div class="col-third">
                                    <input type="text" name="month" placeholder="Mese" />
                                </div>
                                <div class="col-third">
                                    <input type="text" name="year" placeholder="Anno" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-half">
                        <div class="input-grup">
                            <input type="submit" value="Registrati" checked="true" />
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