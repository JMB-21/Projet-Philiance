<?php
namespace App\Controllers;
use App\Controllers\Controller;
use App\Models\Model;
use App\Models\BiblioModel;
use App\Models\RubrikModel;
use App\Models\ThemModel;
?>







   
<!--

    Auditeurs :
    - Lecture des documents  

-->

    <p>&nbsp;</p>

    <div class="titreleçon">
            <h2>Tableau de Bord Auditeur</h2>
    </div>
    
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







