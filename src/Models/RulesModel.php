<?php 

namespace App\Models;
use PDO;
use App\Models\Model;


 
//  * Modèle spécialisé chargé de réaliser les requêtes SQL relatives de la table rules
//  * Hérite du model principal
 

class RulesModel extends Model  {

    protected $table = 'rules';
    
    //   * Les modèles spécialisés traitent les requêtes fortement couplées
    //  * au schéma des tables (insert, update)   

    public function add(array $data) {
        $sql = "INSERT INTO {$this->table} (typ) VALUES (:typ)";
        $requete = $this->getInstance()->prepare($sql);
        $requete->execute($data);
    }

     // ** la ligne d'une table */
     public function findrule($id) {      
             
        $sql = "SELECT * FROM rules WHERE idr = $id";       
        return $this->getInstance()->query($sql);

       
     }

}