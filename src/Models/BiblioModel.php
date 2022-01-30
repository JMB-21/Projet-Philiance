<?php 

namespace App\Models;

use PDO;
use App\Models\Model;

/**
 * Modèle spécialisé chargé de réaliser les requêtes SQL relatives aux documents de la bibliotheque
 * Hérite du model principal
 */

class BiblioModel extends Model  {

    protected $table = 'biblio';

    /** 
     * Les modèles spécialisés traitent les requêtes fortement couplées
     * au schéma des tables (insert, update)
     */
     
    public function add(array $data) {
        $sql = "INSERT INTO {$this->table} (libelle) VALUES (:libelle)";
        $requete = $this->getInstance()->prepare($sql);
        $requete->execute($data);
    }  
    
    public function updatebiblio() {

        if (isset($_POST)){
            $Txt1 = $_POST['Txt1'];
            $Txt0 = $_POST['Txt0'];
            $Txt2 = $_POST['Txt2'];
            $cont = $_POST['contenu'];
            $Txt7 = $_POST['Txt7'];
            $Txt8 = $_POST['Txt8'];
            $Txt6 = $_POST['Txt6'];
            $id = $_POST['id'];

            if(isset($_POST['chbx'])){
                $onlin=1;
            }else{
                $onlin=0;
            }

            if(isset($_POST['Adm'])){
                $adm=1;
            }else{
                $adm=0;
            }

            if(isset($_POST['Man'])){
                $man=1;
            }else{
                $man=0;
            }

            if(isset($_POST['For'])){
                $fm=1;
            }else{
                $fm=0;
            }

            if(isset($_POST['Aud'])){
                $aud=1;
            }else{
                $aud=0;
            }
            


            // $cont = real_escape_string($cont);            

            $Txt0 = $this->getInstance()->quote($Txt0)."\n";
            echo "<br>Txt0 :".$Txt0."<br>";
            
            $sql = "UPDATE {$this->table} SET idroitad='$adm', idroitma='$man', idroitfo='$fm', idroitau='$aud', onlin='$onlin', chem='$Txt8', titre=$Txt0, reference='$Txt2', comment='$cont',duree='$Txt7' WHERE idb='$id'";       
            echo $sql;        
            $requete = $this->getInstance()->prepare($sql);  
            $requete->execute();
    }
       
    }        

    public function veriftxt($txt) {       
            
        return $this->getInstance()->query($rep);
    }    

    public function verifnum($num) {
            
            
        return $this->getInstance()->query($rep);
    }


}

