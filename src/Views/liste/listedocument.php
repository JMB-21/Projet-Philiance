<?php
namespace App\Controllers;
use App\Controllers\Controller;
use App\Models\Model;
use App\Models\ThemModel;
use App\Models\SupportModel;
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
<?php
                                $id= $trainingcourses['idsupport'];
                                $supp = new SupportModel();
                                $result = $supp->findsupport($id);
                                $supp = $result->fetch();  
                                                            
                                switch ($supp['typ']) {
                                    case 'pdf':
    ?>                                    
                                        <a href="editpdf/1"><img src="http://localhost/projet-philiance/assets/img/pdf.svg" alt=""></a>
    <?php                                    
                                        break;
                                    case 'mp4':
    ?>                                    
                                        <a href="editpdf/1"><img src="http://localhost/projet-philiance/assets/img/video.jpg" alt=""></a>
    <?php                                    
                                        break;
                                    default:
                                        
                                        break;
                                } 

                                if ($supp['typ']=="pdf") {
                                
                                } else {
                                    
                                }        
?>                                                    
                            </div>

                            <div class="title-detail-container">
                                <div class="titreCour"><a href="supports.php?id=<?= $trainingcourses['idb'] ?>" title="">
                                        <?php echo $trainingcourses ['titre']; ?>
                                    </a></div>
                                                                 
                                <div class="reference">
                                    
                                       <?php echo $supp['nom'] ?>
                                                                       
                                </div>

                                <div class="reference">                                    
                                    <span class="txtBold">
                                       <?php echo " Réf : ".$trainingcourses ['reference']; ?>
                                    </span>
                                </div>

                                <div class="duree">
                                    <span class="txtBold">Durée: 
                                    <?php echo $trainingcourses ['duree']; ?> min
                                    </span>
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
