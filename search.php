<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css?v=<?php echo time(); ?>">
    <title>Cerca per..</title>
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
            <a href="./car.php" class="btn">Registrati</a>
        </div>
    </header>

    <main>
        <form action="" method="get">
            <div class="container">
                <div class="row">
                    <div class="col-half">
                        <h4>Data di Nascita</h4>
                        <div class="input-group">
                            <div class="col-third">
                                <input type="text" placeholder="GG" th:field="*{day}" />
                            </div>
                            <div class="col-third">
                                <input type="text" placeholder="MM" th:field="*{month}" />
                            </div>
                            <div class="col-third">
                                <input type="text" placeholder="AAAA" th:field="*{year}" />
                            </div>
                        </div>
                    </div>

                    <div class="col-half">
                        <h4>Genere</h4>
                        <div class="input-group">
                            <input id="gender-male" type="radio" name="gender" value="M" th:field="*{sex}" />
                            <label for="gender-male">Male</label>
                            <input id="gender-female" type="radio" name="gender" value="F" th:field="*{sex}" />
                            <label for="gender-female">Female</label>
                        </div>
                    </div>

                    <div class="col-half">
                        <div class="input-grup">
                            <input type="submit" value="Submit" checked="true" />
                        </div>
                    </div>

                    <div class="col-half">
                        <input type="reset" />
                    </div>
                </div>
            </div>
        </form>
    </main>

    <script src="https://kit.fontawesome.com/7e4562a0b9.js" crossorigin="anonymous"></script>
</body>

</html>