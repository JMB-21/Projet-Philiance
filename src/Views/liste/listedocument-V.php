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

<div class="listeLeçon">
        <div class="container">
               <div class="titreLeçon">   
                <h2>MÉDICO-SOCIAL</h2>   
               </div>  
               
              
                <div class="BlocRecherche">
                    <div class="row"> 
                        <div class="col-md-6">
                            <form class="input-group" action="listeLeçons.php" method="post">
                                <div class="form-outline">
                                    <input type="rechercher" id="form1" class="form-control" name="criteria" placeholder="Rechercher" /> 
                                </div>
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-search"></i>                                   
                                </button>
                            </form> 
                            
                        </div>    
                            <div class="col-md-6 btnListe">
                                <button type="button" class="btn btn-success btn-sm mb-2"><a href="formulaire.php">Inserer</a></button>
                            </div>
                    </div> 
                </div>    
                <div class="row listeLeçon">                      
                    <?php
                         $sqlQuery = 'SELECT * FROM biblio';
                         $listes = $mysqltrainingcourses->prepare($sqlQuery);
                         $listes->execute();
                         $trainingcourses = $listes->fetchAll();                     
                        foreach ($trainingcourses as $trainingcourses) {
                    ?>  
                   
                    <?php     
                        }
                    ?> 
                </div>                         
            
        </div>    