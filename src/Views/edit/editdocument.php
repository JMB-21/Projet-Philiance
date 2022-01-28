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

<p>&nbsp;</p>

<div class="container"> 
<div class="titreform">
    <h2>Modification du Document</h2>
</div>
    <div class="col-md-12">
        <div class="row">
            <di class="formSupport">
            <form method="POST" action="../../document/modification" >                
                    <div>                           
                        <?php   
                        $name = new NamesModel();
                        $result = $name->findnameid($biblio['idauthor']);
                        $user = $result->fetchall(); 

                            if ($_SESSION['role']==1 or $_SESSION['role']==2) {
                            ?>    
                                <label for="Txt1" class="formContenu">Auteur : <?=$user[0]['prenom']?> <?=$user[0]['nom']?> </label>                                 
                            <?php    
                            } else {                                   
                            ?>
                                <label for="Txt1" class="formContenu">Auteur : <?=$user[0]['prenom']?> <?=$user[0]['nom']?> </label>                                    
                            <?php    
                            }                                                      
                        ?>                            
                    </div>

                    <div>
                        <?php
                            $date = date("d-m-Y - H:i:s",strtotime($biblio['creatdate']));
                        ?>
                        <label for="Txt10" class="formContenu">Date de création : <?php echo $date?></label> 
                        
                    </div>  

                    <div>
                        <?php   
                        
                            $sector = new SectionModel();
                            $result = $sector->findsection($biblio['idsector']);
                            $sector = $result->fetchall();

                            if ($_SESSION['role']==1 or $_SESSION['role']==2) {
                            ?>    
                                <label for="Txt4" class="formContenu">Secteur:</label>
                                <input id="Txt1" name="Txt1" type="text" value="<?=$sector[0]['group'] ?>">
                                <label for="Txt4" class="formContenu">Groupe:</label>
                                <input id="Txt1" name="Txt1" type="text" value="<?=$sector[0]['sector'] ?>">
                                <label for="Txt4" class="formContenu">Cours:</label>
                                <input id="Txt1" name="Txt1" type="text" value="<?=$sector[0]['cours'] ?>">
                            <?php    
                            } else {
                                
                            ?>
                                <label for="Txt1" class="formContenu">Groupe : <?=$sector[0]['group'] ?></label> 
                                <label for="Txt1" class="formContenu">Secteur : <?=$sector[0]['sector'] ?></label>                                    
                                <label for="Txt1" class="formContenu">Cours : <?=$sector[0]['cours'] ?></label>                                                                       
                            <?php    
                            }                                                      
                        ?>  
                    </div> 
                        
                        <div>
                            <?php 
                            
                                $rub = new RubrikModel();                                    
                                $result = $rub->findrubrik($biblio['idrubrik']);                                    
                                $rub = $result->fetchall(); 

                                if ($_SESSION['role']==1 or $_SESSION['role']==2) {
                                ?>    
                                    <label for="Txt1" class="formContenu">Rubrique : <?=$rub[0]['nom'] ?></label> 
                                <?php    
                                } else {                                    
                                ?>
                                    <label for="Txt1" class="formContenu">Rubrique : <?=$rub[0]['nom'] ?></label>                                    
                                <?php    
                                }                                                      
                            ?>  
                        </div>


                    <div>
                        <label for="Txt0" class="formContenu">Titre:</label> 
                        <input id="Txt0" name="Txt0" type="text" value="<?php echo  $biblio['titre'] ?>"> 
                    </div>

                        

                        <div>
                            <label for="Txt2" class="formContenu">Référence</label> 
                            <input id="Txt2" name="Txt2" type="text"  value="<?php echo $biblio['reference']?>">
                        </div>                       
                                                                    
                        <div>
                            <label for="Txt9" class="formContenu">Résumé</label> 
                            <textarea  id="contenu" name="contenu" type="text" ><?php echo $biblio['comment']?></textarea>
                        </div> 

                        <div>
                            <label for="Txt7" class="formContenu">Durée</label> 
                            <input id="Txt7" name="Txt7" type="text"  value="<?php echo $biblio['duree']?>">
                        </div>                                                 
                        
                        <div>
                            <label for="Txt11" class="formContenu">Droit : 
                            <?php
                                switch ($_SESSION['role']) {
                                    case '1':
                            ?>            
                                        Administrateur <input id="chbx" name="Adm" type="checkbox"  value="Administrateur">&nbsp;&nbsp;&nbsp;
                                        Manager <input id="chbx" name="Man" type="checkbox"  value="Manager">&nbsp;&nbsp;&nbsp;
                                        Formateur <input id="chbx" name="For" type="checkbox"  value="Formateur">&nbsp;&nbsp;&nbsp;
                                        Auditeur <input id="chbx" name="Aud" type="checkbox"  value="Auditeur"></label> 
                            <?php
                                        break;
                                    case '2': 
                            ?>
                                        <label for="Txt8" class="formContenu">Manager <input id="chbx" name="Man" type="checkbox"  value="Manager">&nbsp;&nbsp;&nbsp;
                                        <label for="Txt8" class="formContenu">Formateur <input id="chbx" name="For" type="checkbox"  value="Formateur">&nbsp;&nbsp;&nbsp; 
                                        <label for="Txt8" class="formContenu">Autiteur <input id="chbx" name="Aud" type="checkbox"  value="Auditeur"></label> 
                            <?php
                                        break;
                                    case '3':   
                            ?>           
                                        Formateur <input id="chbx" name="For" type="checkbox" value="Formateur">&nbsp;&nbsp;&nbsp;  
                                        Auditeur <input id="chbx" name="Aud" type="checkbox"  value="Auditeur"></label>
                                        
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
                            <input id="Txt8" name="Txt8" type="text"  value="<?php echo $biblio['chem']?>">
                        </div>  
                        <div>         
                        <?php 
                            
                            $sup = new SupportModel();                                    
                            $result = $sup->findsupport($biblio['idsupport']);                                    
                            $supor = $result->fetchall(); 
                        ?>
                        

                            <label for="Txt6" class="formContenu">Support:</label> 
                            <input id="Txt6" name="Txt6" type="text" value="<?=$supor[0]['nom'] ?>"> 
                        </div> 
                        <div>
                            <label for="chbx" class="formContenu">En Ligne :</label> 
                            <input id="chbx" name="chbx" type="checkbox"  value="<?php echo $biblio['onlin']?>">
                            <input id="id" name="id" type="hidden" value=<?=$biblio['idb']?>>
                        </div>
                        <div class="boutton"> 
                            <button type="submit" name="modifabonnement">Enregistrer</button>
                        </div>
                </form>
        </div>    
        
    </div>    



</body>
</html>