<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="../controller/inscription.php?type=add" method="post">
        <h2>Inscription</h2>
        <label>Pseudo :</label>
        <input type="text" name="user" autofocus maxlength="15" pattern="^[a-z0-9]+$" required>
        <label>Mot de passe :</label>
        <input type="password" name="pass" id="" required>
        <label>Confirmer le mot de passe :</label>
        <input type="password" name="confpass" id="confirm_pass" required>
        <label>Email :</label>
        <input type="email" name="mail" id="" required>
        <div id="odd">
            <p>En créant votre compte, vous acceptez nos
                <u>termes et conditions </u>
                <u> & politique de
                    confidentialité </u>
            </p>
            <input class="sendButton" type="submit" value="Envoyer">
        </div>
    </form>
    </div>
</body>

</html>