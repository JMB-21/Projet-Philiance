<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Projet Philiance</title>
    <link rel="icon" href="./assets/img/favicon.png">
    <link rel="stylesheet" href="./assets/css/bootstrap/style-n.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>        
       
</head>
<body>
    <div class="listeLeçon">
        <div class="container">
               <div class="titreLecon"> 
                <h2>Liste des Leçons</h2>   
               </div>  
               
               <?php
                    try
                    {
                        // On se connecte à MySQL
                        $mysqltrainingcourses = new PDO('mysql:host=localhost;dbname=philmedsoc;charset=utf8', 'root', '');
                    }
                    catch(Exception $e)
                    {
                        // En cas d'erreur, on affiche un message et on arrête tout
                            die('Erreur : '.$e->getMessage());
                    }
                ?>  

                <div class="row">
                <div class="btnListe">
                    <button type="button" class="btn btn-success btn-sm mb-2"><a href="formulaire.html">Inserer</a></button>
                </div>
                    <?php
                        $sqlQuery = 'SELECT * FROM biblio';
                        $listes = $mysqltrainingcourses->prepare($sqlQuery);
                        $listes->execute();
                        $trainingcourses = $listes->fetchAll();
                        

                        foreach ($trainingcourses as $trainingcourses) {
                    ?>  
                    <div class="col-sm-4 col-md-4">
                        <div class="title-container">                             
                            <div class="img-pdf" > 
                                <img src=".assets/img/pdf.svg" alt="">
                            </div>
                            <div class="title-detail-container">                               
                                <div class="titreCour"><a href="supports.php?id=<?= $trainingcourses['idb'] ?>" title="" ><?php echo $trainingcourses ['titre']; ?></a></div> 
                                <div class="duree"><span class="txtBold">Durée: </span><span><?php echo $trainingcourses ['duree']; ?> Jours</span></div>
                                <div class="reference"><span class="txtBold">Référence:</span> <?php echo $trainingcourses ['reference']; ?></div>
                                <div class="modifSup">
                                    <button type="button" class="btn btn-success btn-sm mb-2"><a href="edit.php?idtrainingcourses=<?= $trainingcourses['idb'] ?>">Modifier</a></button> 
                                    <button type="button" class="btn btn-success btn-sm mb-2"><a href="delete.php?idtrainingcourses=<?= $trainingcourses['idb'] ?>">Supprimer</a></button>                                             
                                </div>
                            </div>                            
                        </div> 
                   </div>            
                    <?php     
                        }
                    ?> 
                </div>

            
        </div>    

</body>
</html>    