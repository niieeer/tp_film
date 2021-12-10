<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/style/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <title>Wati-Stream</title>
</head>

<body>
    <!-- Mon header -->
    <header class="main-header">
        <nav>
            <div>
                <h1> WATI-STREAM</h1>
            </div>
            <ul>
                <li>
                    <a href="connexion.php"> <i class="fas fa-user"></i>Connexion </a>
                </li>
                <li>
                    <a href="Inscription.php"> <i class="fas fa-user-plus"> </i>Inscription </a>
                </li>
                <li>
                    <a href="catalogue.php"> <i class="fas fa-film"> </i>catalogue</a>
                </li>
            </ul>
            <!-- Si connecter afficher deconnexion -->
            <?php if (isset($_SESSION['pseudo'])) { ?>
                <a href="http://localhost/tp_film/controller/deconnexion.php"><i class="fas fa-sign-out-alt"></i> Deconnexion</a>
                <p>Salut fils de pute !</p>
            <?php  } ?>
        </nav>
    </header>
    <main>
        <div class="movies_container">

        </div>
    </main>
    <!-- Script js pour fetch les films -->
    <script src="./js/getMovies.js"></script>
</body>

</html>