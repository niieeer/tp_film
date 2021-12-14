<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
    </style>
    <title>Se connecter</title>
</head>
<?php include_once('../includes/header.php'); ?>

<body>
    <div id="inscription">
        <form id="inscription" action="../controller/connexion.php" method="post">
            <h2>Se connecter</h2>
            <label>Pseudo :</label>
            <input type="text" name="pseudo" autofocus maxlength="15" pattern="^[a-z0-9]+$" required>
            <label>Mot de passe :</label>
            <input type="password" name="pass" id="" required>
            <input class="sendButton" type="submit" value="Se connecter">
        </form>
    </div>
    <?php include_once('../includes/footer.php'); ?>

</body>

</html>