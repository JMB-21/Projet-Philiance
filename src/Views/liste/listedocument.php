<?php
namespace App\Controllers;
use App\Controllers\Controller;
use App\Models\Model;
use App\Models\ThemModel;
use PDO;
?>


<div class="listeLeçon">
    <div class="container">
        <div class="titreLeçon">
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
        <div class="scrol">
        <div class="row">
                          
                <div class="btnListe">                    
                    <button type="button" class="btn btn-success btn-sm mb-2"><a href="formulaire.html">Inserer</a></button>
                    <button type="button" class="btn btn-success btn-sm mb-2"><a href="home">Tableau de bord</a></button>
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
                            <div class="img-pdf">
                                <img src="http://localhost/projet-philiance/assets/img/pdf.svg" alt="">
                            </div>
                            <div class="title-detail-container">
                                <div class="titreCour"><a href="supports.php?id=<?= $trainingcourses['idb'] ?>" title="">
                                        <?php echo $trainingcourses ['titre']; ?>
                                    </a></div>
                                <div class="duree"><span class="txtBold">Durée: </span><span>
                                        <?php echo $trainingcourses ['duree']; ?> Jours
                                    </span></div>
                                <div class="reference"><span class="txtBold">Référence:</span>
                                    <?php echo $trainingcourses ['reference']; ?>
                                </div>
                                <div class="modifSup">
                                    <button type="button" class="btn btn-success btn-sm mb-2"><a
                                            
                                            href="edit/<?= $trainingcourses['idb'] ?>">Modifier</a></button>

                                    <button type="button" class="btn btn-success btn-sm mb-2"><a
                                            href="supprime/<?= $trainingcourses['idb'] ?>">Supprimer</a></button>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php     
                }
            ?>  
        </div>
        </div>
    </div>
</div>
