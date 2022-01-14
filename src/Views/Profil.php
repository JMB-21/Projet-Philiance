<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
</head>
<body>
    <h2>Vous etes sur la page profil Utilisateur</h2>
    <h3>
    
    <?php
        echo $_SESSION["user"];
    ?>
    
    </h3>
</body>
</html>