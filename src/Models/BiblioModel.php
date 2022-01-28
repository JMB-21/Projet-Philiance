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
            var_dump($_POST);
        }

        // 'Txt1' => string 'Mï¿½dico-social' (length=15)
        // 'Txt0' => string 'titre-1' (length=7)
        // 'Txt2' => string 'EB-05' (length=5)
        // 'contenu' => string 'resume-1' (length=8)
        // 'Txt7' => string '30' (length=2)
        // 'Txt8' => string 'http://localhost/Projet-Philiance/assets/pdf/5.pdf' (length=50)
        // 'Txt6' => string 'Document PDF' (length=12)
        // 'id' => string '2' (length=1)

        // $sql = "UPDATE {$this->table} SET `idb`=$_POST['id'],`idroit`=$_POST['id'],`onlin`=[value-7],`chem`=[value-8],`titre`=[value-9],`reference`=[value-10],`comment`=[value-11],`creatdate`=[value-12],`duree`=[value-13]";       
        // echo $sql;
        // $requete = $this->getInstance()->prepare($sql);
        // $requete->execute($data);
    }


}

// class RubrikModel extends Model  {
    
//     protected $table = 'rubrik'; 
// }

class ThemModel extends Model  {

    protected $table = 'theme'; 
}

