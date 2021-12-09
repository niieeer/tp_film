<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- Si connecter afficher deconnexion -->
    <?php if (isset($_SESSION['pseudo'])) { ?>
        <a href="http://localhost/tp_film/controller/deconnexion.php"><i class="fas fa-sign-out-alt"></i> Deconnexion</a>
        <p>Salut fils de pute !</p>
    <?php  } ?>
</body>

</html>