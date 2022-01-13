<?php
namespace App\Controllers;
use App\Controllers\Controller;
use App\Models\Model;
use App\Models\BiblioModel;
use App\Models\RubrikModel;
use App\Models\ThemModel;
?>




<style> 
  .grid-audit {
    display: grid;
    grid-template-columns: auto ;
    background-color: #2196F3;    
    }

    .grid-biblio {
    display: grid;
    grid-template-columns: auto auto auto auto auto auto auto;
    background-color: #2196F3;
    margin-left: 200px; 
    margin-right: 200px;     
    }

    .grid-item {
    background-color: rgba(255, 255, 255, 0.8);
    border: 1px solid rgba(0, 0, 0, 0.4);   
    font-size: 14px;
    text-align: center;
    }
   
    .grid-docu {
    display: grid;
    grid-template-columns: auto;
    background-color: #2196F3;
    margin:50px;   
    }
</style>

<h2>Page d'accueil Tableau de Bord Auditeur</h2>
   
<!--

    Auditeurs :
    - Lecture des documents  

-->

<?php

?>

    <div class="grid-docu">liste des Documents</div>
        <div class="grid-biblio">
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
                <?php 
                $id= $biblio['idrubrik'];    
                $mod     =   new RubrikModel();        
                $res     =   $mod->find('idrubrik',$id);                        
                $rub    =   $res->fetch();  
                 
                $id= $rub['idthem'];   
                $mod     =   new ThemModel();        
                $res     =   $mod->find('idth',$id);                        
                $rub    =   $res->fetch();  
                echo $rub['them'];  
                ?> 
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
        <div>recherche de documents</div>







