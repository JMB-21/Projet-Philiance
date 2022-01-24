<?php 

namespace App\Models;
use PDO;
use App\Models\Model;


 
//  * Modèle spécialisé chargé de réaliser les requêtes SQL relatives de la table support
//  * Hérite du model principal
 
class SupportModel extends Model  {

    protected $table = 'support';

     
    //   * Les modèles spécialisés traitent les requêtes fortement couplées
    //  * au schéma des tables (insert, update)
   

    public function add(array $data) {
        $sql = "INSERT INTO {$this->table} (typ,nom) VALUES (:typ,:nom)";
        $requete = $this->getInstance()->prepare($sql);
        $requete->execute($data);
    }

     // ** ligne de la table */
     public function findsupport($id) {
             
        $sql = "SELECT * FROM support WHERE idsu = $id";       
        return $this->getInstance()->query($sql);
     }

    public function findSupportAll() {      
        
        $sql = "SELECT * FROM {$this->table}"; 
        return $this->getInstance()->query($sql);
    }

}