<?php 

namespace App\Models;
use PDO;
use App\Models\Model;


 
//  * Modèle spécialisé chargé de réaliser les requêtes SQL relatives de la table rules
//  * Hérite du model principal
 
echo "gloup";

class RubrikModel extends Model  {

    protected $table = 'section';

     
    //   * Les modèles spécialisés traitent les requêtes fortement couplées
    //  * au schéma des tables (insert, update)
   

    public function add(array $data) {
        $sql = "INSERT INTO {$this->table} (group,sector,cours) VALUES (:group,:sector,:cours)";
        $requete = $this->getInstance()->prepare($sql);
        $requete->execute($data);
    }

     // ** ligne de la table section */
     public function findrubrik($id) {
             
        $sql = "SELECT * FROM rubrik WHERE idrubrik = $id";       
        return $this->getInstance()->query($sql);
     }

    public function findRubrikAll() {      
        
        $sql = "SELECT * FROM {$this->table}"; 
        return $this->getInstance()->query($sql);
    }

}