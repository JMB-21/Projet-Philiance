<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="<?= isset($description) ? $description : ''; ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($titre) ? $titre : 'Projet'; ?></title>
    <link rel="stylesheet" href="../../../assets/css/style.css">
</head>
<body>
    <header>
        <h1>Template global</h1>
        <?php

        if (isset($_SESSION["newsession"])){    
        
        ?>        
            <!-- <p>Bonjour <?=$_SESSION["name"];?> - <a href="deconnexion">Deconnexion</a></p> -->
            <p>Bonjour <?=$_SESSION["name"];?></p>
<?php 
            
         }else{
?>        
            
          
<?php                       
         }
        ?>
    </header>
    <hr>
    <div class="container">
       
        <?= $content; ?>

    </div>
    <hr>
    <footer>
        <p>Pied de page</p>
    </footer>
    <script src="../../../assets/js/script.js"></script>
</body>
</html>