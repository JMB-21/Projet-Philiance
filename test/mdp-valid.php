
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Comptage Caractere dans une Chaine</title>
    </head>

    <body>

        <Label>Comptage minuscule / majuscule / numerique et autre dans une chaine</label>
        <p></p>
<div>
        <form action="" method="post">
            <label>mot de passe</label>
            <input type="text" name="mdp"/>
            <input type="submit" name="valider"/>
        </form>
</div>
    </body>
</html>

<?php

    if(isset($_POST['valider'])){
        
        if(isset($_POST['mdp'])){

            $mdp=$_POST['mdp'];

            $lgc = strlen($mdp);
            echo "<br>chaine=".$mdp."<br><br>";

            mb_internal_encoding('UTF-8');                           
            $lg = mb_strlen($mdp);            
            echo "Nb de caracteres: ".$lg."<br>";

            $min=0;
            $maj=0;
            $num=0;            

            for ($i=0; $i <$lgc ; $i++) {              
                
                $asc= ord(substr($mdp[$i],0,1));                                
                
                switch ($asc) {
                    case ($asc < 48):
                        // Code special...                        
                        break;
                    case ($asc< 58):
                        // Code num...
                        $num=$num+1;
                        break;
                    case ($asc< 65):
                        // Code special...                        
                            break;
                    case ($asc< 91):
                        // Majuscule...
                        $maj=$maj+1;
                        break;
                    case ($asc< 97):
                        // Code special...                       
                        break;  
                    case ($asc< 123):
                        // minuscule...                        
                        $min=$min+1;
                        break;                                      
                    default:
                        // Code special...                       
                        break;
                }        
            }  
            echo "<br>Maj=".$maj."<br>";
            echo "Min=".$min."<br>";
            echo "Num=".$num."<br>";
            $spe = $lg-$maj-$min-$num;
            echo "Spe=".$spe."<br>";
        }
    }
?>