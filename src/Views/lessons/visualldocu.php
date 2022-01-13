<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bibliothèque Médico-Sociale - Philiance</title>
    <link rel="stylesheet" href="./assets/css/style-2.css">
    
</head>

<body>  

    <h1>Bibliothèque Médico-Sociale - Philiance</h1>

    <p> <a href="http://localhost/dw16/src/views/lessons/ajoutmedia.php">Ajouter un document, un thème, un support...</a></p>  
    <p> <a href="http://localhost/dw16">Tableau de bord...</a></p>  

    <h2>Liste des documents</h2>

    <div class="grid-visualldocu">
        <div class="grid-item">        
            Date 
        </div>

        <div class="grid-item">
            Theme
        </div>

        <div class="grid-item">    
            Rubrique
        </div>

        <div class="grid-item">
            Titre 
        </div>

        <div class="grid-item">
            Présentation
        </div>

        <div class="grid-item"> 
            Support                 
        </div>      

        <div class="grid-item"> 
            Chemin                    
        </div>

<?php

        foreach ($biblio as $biblio) { 
?>       
            <div class="grid-item">        
                <?= $biblio['creatdate']; ?> 
            </div>
            
            <div class="grid-item  ">
            
                <!-- <?=$th['acro'];?> -
                 <?=$th['them'];?>  -->
            </div>

            <div class="grid-item  ">    
                <?php                    
                    $col = array_column($rubrik, 'idrubrik');
                    $rub = $biblio['idrubrik'];
                    $row = array_search($rub,$col);                                   
                    $valrow = $rubrik[$row]; 
                    echo $valrow['nom'];                
                ?> 
            </div>

            <div class="grid-item  ">
                <?= $biblio['titre']; ?> 
            </div>

            <div class="grid-item  ">
            <?= $biblio['comment']; ?> 
            </div>

            <div class="grid-item  ">
                 <!-- <?= $sup['nom']; ?>    -->
            </div>

            <div class="grid-item  ">
                <?= $biblio['chem']; ?>                       
            </div>
<?php        
        }
?>
    </div>
</body>
</html>