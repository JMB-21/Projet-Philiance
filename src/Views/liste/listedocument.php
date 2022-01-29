<?php
namespace App\Controllers;
use App\Controllers\Controller;
use App\Models\Model;
use App\Models\thememodel;
use App\Models\SupportModel;
use PDO;
?>

<body class="nir"> 
    <!-- Navbar -->    

    <div class="banere" style="background-image:url(<?=BASEURL?>assets/img/banere.jpg);">
         <img src="" alt="">
            <div class="container">
                <div class="titreBanere">
                     <h1> FORMATION MÉDICO-SOCIAL</h1>
                </div>
             </div>   
    </div>
    
    <div class="listeLeçon">
        <div class="container">
               <div class="titreLeçon">   
                <h2>Liste des documents</h2>   
               </div> 

                <div class="BlocRecherche">
                    <div class="row"> 
                        <div class="col-md-6">
                            <form class="input-group" action="" method="post">
                                <div class="form-outline">
                                    <input type="rechercher" id="form1" class="form-control" name="criteria" placeholder="Rechercher" /> 
                                </div>
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-search"></i>                                   
                                </button>
                            </form> 
                            
                        </div>    
                            <div class="col-md-6 btnListe">
                                <button type="button" class="btn btn-success btn-sm mb-2"><a href="">Inserer</a></button>
                            </div>
                    </div> 
                </div>    
                <div class="row listeLeçon">                      
                    <?php
                                            
                        foreach ($biblio as $biblio) {
                            ?>
                                <div class="col-sm-4 col-md-4">
                                    <div class="title-container">
                                        <div class="img-pdf">
            <?php
                                            $id= $biblio['idsupport'];
                                            $supp = new SupportModel();
                                            $result = $supp->findsupport($id);
                                            $supp = $result->fetch();  
                                                                        
                                            switch ($supp['typ']) {
                                                case 'pdf':
                ?>                                    
                                                    <a href="editpdf"><img src="<?=BASEURL?>assets/img/pdf.svg" alt=""></a>
                <?php                                    
                                                    break;
                                                case 'mp4':?>                                     
                                                    <a href="editvideo"><img src="<?=BASEURL?>assets/img/video.jpg" alt=""></a>    <?php                                    
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
                                            <div class="titreCour"><a href="supports.php?id=<?= $biblio['idb'] ?>" title="">
                                                    <?php echo $biblio ['titre']; ?>
                                                </a></div>
                                                                                
                                            <div class="reference">
                                                
                                                    <?php echo $supp['nom'] ?>
                                                                                    
                                            </div>
            
                                            <div class="reference">                                    
                                                <span class="txtBold">
                                                    <?php echo " Réf : ".$biblio ['reference']; ?>
                                                </span>
                                            </div>
            
                                            <div class="duree">
                                                <span class="txtBold">
                                                <?php
                                                    switch ($supp['typ']) {
                                                    case 'pdf':     
                                                        echo "Durée du cours : ";
                                                        break;
                                                    case 'mp4':                                     
                                                        echo "Durée de la vidéo : ";                                             
                                                        break;
                                                    default:
                                                        echo "Durée : ";
                                                        break;
                                                    }                                    
                                                    echo $biblio ['duree'];
                                                ?>
                                                min</span>
                                            </div>             

                                            <div class="modifSup">
                                                <form action="edit" method="POST">
                                                    <input id="id" name="id" type="hidden" value=<?=$biblio['idb']?>>
                                                    <button type="submit" class="btn btn-success btn-sm mb-2">Modifier</button>
                                                </form>    
                                                <form action="edit" method="POST">
                                                    <input id="id" name="id" type="hidden" value=<?=$biblio['idb']?>>
                                                    <button type="submit" class="btn btn-success btn-sm mb-2">Supprimer</button>
                                                </form>  
                                                
            
                                               
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