<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/style/style.css">
    <title>Inscription</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
    </style>
</head>

<body>
    <?php include_once('../includes/header.php'); ?>
    <div id="inscription">
        <form class="inscription" action="../controller/inscription.php?type=add" method="post">
            <h2>Inscription</h2>
            <label>Pseudo :</label>
            <input type="text" name="user" autofocus maxlength="15" pattern="^[a-z0-9]+$" required placeholder="xxtristanxx">
            <label>Mot de passe :</label>
            <input type="password" name="pass" id="" required placeholder="*******">
            <label>Confirmer le mot de passe :</label>
            <input type="password" name="confpass" id="confirm_pass" required placeholder="*******">>
            <label>Email :</label>
            <input type="email" name="mail" id="" required placeholder="tristan@gmail.com">
            <div id="odd">

                <input class="sendButton" type="submit" value="Envoyer">
                <p>En créant votre compte, vous acceptez nos
                    <span> <u>termes et conditions </u>
                        <u> & politique de
                            confidentialité </u> </span>
                </p>
            </div>
        </form>
    </div>
    <?php include_once('../includes/footer.php'); ?>
</body>

</html>