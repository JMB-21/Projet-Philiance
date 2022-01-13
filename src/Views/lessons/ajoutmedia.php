<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8" />
        <title>Ajouter un support</title>
        <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
        <meta http-equiv="Pragma" content="no-cache" />
        <meta http-equiv="Expires" content="0" />
        <link rel="stylesheet" href="./public/css/style.css">  
    </head>

    <body>

        <h1>Ajouter un document à la bibliotheque</h1>
        <p><a href="index.php">Retour à la liste des documents</a></p>
 
     
        <div class="grid-ajoutmedia">

            <div class="grid-item">
                <form action="../philiance/index.php?action=adddocuok" method="post" id="formdoc">
                    <h3>Ajouter un document</h3>

                    <div>
                        <label for="theme">Theme</label><br />
                        <select name="them">
                                <?php while ($donnees =  $allth->fetch()){?>  
                                    <option value="<?php echo $donnees['them']; ?>"> 
                                        <?php echo $donnees['them']; ?>
                                    </option>
                                <?php }?> 	
                            </select>
                    </div>

                    <div>
                        <label for="rubrik">Rubrique</label><br />
                        <select name="rubrik" form="formdoc">
                            <?php while ($thrub =  $allthrub->fetch()){?>  
                                <option value="<?php echo $thrub['idth']; ?>"> 
                                    <?php echo $thrub['nom']; ?>
                                </option>
                            <?php }?>
                        </select>   
                    </div>

                    <div>
                        <label for="titre">Titre</label><br />
                        <input type="text" id="titre" name="titre" />
                    </div>

                    <div>
                        <label for="comment">Resume</label><br />
                        <textarea id="comment" name="comment"></textarea>
                    </div>

                    <div>
                        <label for="support">Support</label><br />                       
                        <select name="support" form="formdoc">
                        
                            <?php while ($sup =  $allsup->fetch()){?>  
                                <option value="<?php echo $sup['idsu']; ?>"> 
                                    <?php echo $sup['nom']; ?>
                                </option>
                            <?php }?> 	                        
                        </select>
                    </div>

                    <div>
                        <label for="chem">Url du document</label><br />
                        <input type="text" id="chem" name="chem">                       
                    </div>

                    <div>
                        <br />  
                        <input type="submit" value="Ajouter ce document"/>
                    </div>
                </form> 
            </div>

            <div class="grid-item">   
                <form action="../philiance/index.php?action=addtheme" method="post" id="formrub">
                    <h3>Ajouter un theme --</h3>
                    <div>
                        <label for="addthem">Thèmes</label><br />  
                        <input list="listhem" name="addthem" id="addthem" autocomplete="off"> 
                        <div>
                            <datalist id="listhem">
                                <?php while ($th =  $allajth->fetch()){?>  
                                    <option value="<?php echo $th['them']; ?>"> 
                                        <?php echo $th['them']; ?>
                                    </option>
                                <?php }?> 
                            </datalist>
                        </div>  

                        <div>
                            <label for="acro">Acronyme</label><br />
                            <input type="text" id="acro" name="acro" autocomplete="off">                       
                        </div> 

                        <div>
                            <br />
                            <input type="submit" value="Ajouter ce thème"/>
                            <input type="reset" value="Reset">
                        </div>
                    </div>    
                </form>  
            </div>  
            
            <div class="grid-item">   
                <form action="../philiance/index.php?action=addrubrik" method="post" id="formthem">
                    <h3>Ajouter une rubrique</h3>
                    <div>
                        <label for="theme">Sélectionner un thème</label><br />
                        <div>
                            <select name="rubth" >
                                <?php while ($donnees =  $allthem->fetch()){?>  
                                    <option value="<?php echo $donnees['idth']; ?>"> 
                                        <?php echo $donnees['them']; ?>
                                    </option>
                                <?php }?> 	
                            </select>
                        </div>
                    </div>

                    <div>
                       <label for="addrub">Rubrique</label><br />                        
                       <input list="listrub" name="addrub" id="addrub" autocomplete="off"> 
                        <div>
                        <datalist id="listrub">
                            <?php while ($rub =  $allrub->fetch()){?>  
                                <option value="<?php echo $rub['nom']; ?>"> 
                                    <?php echo $rub['nom']; ?>
                                </option>
                            <?php }?> 	
                        </datalist>
                        </div>                       
                    </div>
                    
                    <div>
                        <br />  
                        <input type="submit" value="Ajouter cette rubrique" />
                    </div>
                </form> 
            </div> 

            <div class="grid-item">    
                <form action="../philiance/index.php?action=addsupport" method="post" id="formsup">
                    <h3>Ajouter un type de support</h3>

                    <div>
                        <label for="addsup">Nom du Support</label><br />
                        <input list="listsup" name="addsup" id="addsup" autocomplete="off">
                        <datalist id="listsup">
                            <?php while ($ajsup =  $allsupport->fetch()){?>  
                                <option value="<?php echo $ajsup['nom']; ?>"> 
                                    <?php echo $ajsup['nom']; ?>
                                </option>
                            <?php }?> 	
                        </datalist>
                    </div>

                    <div>
                        <label for="typsup">Format fichier</label><br />
                        <input type="text" id="typsup" name="typsup" autocomplete="off">                       
                    </div> 

                    <div>
                        <br/>
                        <input type="submit" value="Ajouter ce support"/>
                    </div>
                </form>
            </div>     

           
        </div>
        
       


    </body>

   

</html>