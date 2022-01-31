<?php
    use App\Models\NamesModel;
    use App\Models\SectionModel;
    use App\Models\RubrikModel;
    use App\Models\SupportModel;

// 1 - Administrateurs :

// - Création de comptes utilisateurs 
// - CRUD des thèmes sections rubriques 
// - CRUD formateurs/auditeurs 
// - CRUD des documents


// 2 - Managers :
// - CRUD des thèmes sections rubriques 
// - CRUD formateurs/auditeurs 
// - CRUD des documents


// 3 - Formateurs :
// - CRUD des documents

// var_dump($biblio);
?>



<div class="nir">   
<p><br><br><br><br><br><br><br><br></p>
    <div class="banere" style="background-image:url(<?=BASEURL?>assets/img/banere.jpg);">        
        <div class="container">
            <div class="titreBanere">
                <h1> FORMATION MÉDICO-SOCIAL</h1>
            </div>
        </div>   
    </div>
    
    <div class="listeLeçon">
        <div class="container"> 
            <div class="titreform">
                <h2>Ajout d'un Document</h2>
            </div>
       
            <div class="col-md-12">
                <div class="row">
                    <div class="formSupport">
                        <form method="POST" action="<?=BASEURL?>document/ajout" id="docform">                
                            <div>                           
                                                               
                                <label for="Txt1" class="formContenu">Auteur : <?=$_SESSION['name']?></label> 
                                                 
                            </div>

                            <div>
                                <?php
                                    $date = date("d-m-Y - H:i:s");
                                ?>
                                <label for="Txt10" class="formContenu">Date de création : <?php echo $date?></label> 
                                
                            </div>  

                            <div>
                                <?php  
                                    $model      =   new SectionModel();
                                    $result     =   $model->findsectionAll();                                   
                                    $sector    =   $result->fetchall();
                                ?>  

                                    <label for="Txt4" class="formContenu">Secteur:</label>
                                
                                    <select name="secteur" id="secteur">
                                      <?php
                                    foreach ($sector as $sector) { 
                                        ?>
                                        <option value=""><?=$sector[0]?></option>
                                        <?php
                                    } 
                                    ?>
                                    </select>
                            </div> 
                            <div>
                                <?php 
                                
                                    // $rub = new RubrikModel();                                    
                                    // $result = $rub->findrubrik($biblio['idrubrik']);                                    
                                    // $rub = $result->fetchall(); 

                                    // var_dump($rub);

                                    // if ($_SESSION['role']==1 or $_SESSION['role']==2) {
                                    ?>    
                                        <!-- <label for="Txt1" class="formContenu">Rubrique : <?=$rub[0]['nom'] ?></label>  -->
                                    <?php    
                                    // } else {                                    
                                    ?>
                                        <!-- <label for="Txt1" class="formContenu">Rubrique : <?=$rub[0]['nom'] ?></label>                                     -->
                                    <?php    
                                    // }                                                      
                                ?>  
                            </div>


                            <div>
                                <label for="Txt0" class="formContenu">Titre:</label> 
                                <!-- <input id="Txt0" name="Txt0" type="text" value="<?php echo  $biblio['titre'] ?>">  -->
                            </div>

                            <div>
                                <label for="Txt2" class="formContenu">Référence</label> 
                                <!-- <input id="Txt2" name="Txt2" type="text"  value="<?php echo $biblio['reference']?>"> -->
                            </div>                       
                                                                        
                            <div>
                                <label for="Txt9" class="formContenu">Résumé</label>
                                <!-- <textarea name="contenu" form="docform"  rows="10" cols="20"><?php echo $biblio['comment']?></textarea>  -->
                                <!-- <div><?php //echo nl2br($biblio['comment'])?></div> -->
                            </div> 

                            <div>
                                <label for="Txt7" class="formContenu">Durée</label> 
                                <!-- <input id="Txt7" name="Txt7" type="text"  value="<?php echo $biblio['duree']?>"> -->
                            </div>                                                 
                            
                            <div>
                                <label for="Txt11" class="formContenu">Droit : 
                                <?php
                                    switch ($_SESSION['role']) {
                                        case '1':
                                ?>            
                                            Administrateur <input id="chbx" name="Adm" type="checkbox"  value="1">&nbsp;&nbsp;&nbsp;
                                            Manager <input id="chbx" name="Man" type="checkbox"  value="1">&nbsp;&nbsp;&nbsp;
                                            Formateur <input id="chbx" name="For" type="checkbox"  value="1">&nbsp;&nbsp;&nbsp;
                                            Auditeur <input id="chbx" name="Aud" type="checkbox"  value="1"></label> 
                                <?php
                                            break;
                                        case '2': 
                                ?>
                                            Manager <input id="chbx" name="Man" type="checkbox"  value="1">&nbsp;&nbsp;&nbsp;
                                            Formateur <input id="chbx" name="For" type="checkbox"  value="1">&nbsp;&nbsp;&nbsp; 
                                            Autiteur <input id="chbx" name="Aud" type="checkbox"  value="1"></label> 
                                <?php
                                            break;
                                        case '3':   
                                ?>           
                                            Formateur <input id="chbx" name="For" type="checkbox" value="1">&nbsp;&nbsp;&nbsp;  
                                            Auditeur <input id="chbx" name="Aud" type="checkbox"  value="1"></label>
                                            
                                <?php            
                                            break;
                                                                                                                    
                                        default:
                                        break;
                                    }
                                ?>
                                </label> 
                            </div>                          
                            
                            <div>
                                <label for="Txt8" class="formContenu">Chemin :</label> 
                                <!-- <input id="Txt8" name="Txt8" type="text"  value="<?php echo $biblio['chem']?>"> -->
                            </div> 

                            <div>         
                            <?php 
                                
                                // $sup = new SupportModel();                                    
                                // $result = $sup->findsupport($biblio['idsupport']);                                    
                                // $supor = $result->fetchall(); 
                            ?>
                            
                                <label for="Txt6" class="formContenu">Support:</label> 
                                <!-- <input id="Txt6" name="Txt6" type="text" value="<?=$supor[0]['nom'] ?>">  -->
                            </div> 

                            <div>
                                <label for="chbx" class="formContenu">En Ligne :</label> 
                                <!-- <input id="chbx" name="chbx" type="checkbox"  value="<?php echo $biblio['onlin']?>"> -->
                                <!-- <input id="id" name="id" type="hidden" value=<?=$biblio['idb']?>> -->
                            </div>

                            <div class="boutton"> 
                                <button type="submit" name="modifabonnement">Enregistrer</button>
                            </div>
                        </form>

                        
                    </div>    
                </div>    
            </div> 
        </div> 
    </div> 
</div>