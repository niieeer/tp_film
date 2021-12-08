<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Se connecter</h2>
    <form action="../controller/connexion.php" method="post">
        <label>Pseudo :</label>
        <input type="text" name="pseudo" autofocus maxlength="15" pattern="^[a-z0-9]+$" required>
        <label>Mot de passe :</label>
        <input type="password" name="pass" id="" required>
        <input class="sendButton" type="submit" value="Se connecter">
    </form>
</body>

</html>