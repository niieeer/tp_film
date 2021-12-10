<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <title>Wati-Stream</title>
    <style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
</style> 
</head>

<body>

    <!-- Mon header -->
  <?php include_once ('./includes/header.php'); ?> 



    <!-- Si connecter afficher deconnexion -->
    <?php if (isset($_SESSION['pseudo'])) { ?>
        <a href="http://localhost/tp_film/controller/deconnexion.php"><i class="fas fa-sign-out-alt"></i> Deconnexion</a>
        <p>Salut fils de pute !</p>
    <?php  } ?>
    <?php include_once ('./includes/footer.php'); ?> 
</body>

</html>