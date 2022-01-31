<?php 

namespace App\Models;
use PDO;
use App\Models\Model;


 
//  * Modèle spécialisé chargé de réaliser les requêtes SQL relatives de la table rubrik
//  * Hérite du model principal
 
class RubrikModel extends Model  {

    protected $table = 'rubrik';

     
    //   * Les modèles spécialisés traitent les requêtes fortement couplées
    //  * au schéma des tables (insert, update)
   

    public function add(array $data) {
        $sql = "INSERT INTO {$this->table} (idthem,nom) VALUES (:idthem,:nom)";
        $requete = $this->getInstance()->prepare($sql);
        $requete->execute($data);
    }

     // ** ligne de la table */
     public function findrubrik($id) {
             
        $sql = "SELECT * FROM rubrik WHERE idrubrik = $id";       
        return $this->getInstance()->query($sql);
     }

    public function findrubrikall() {      
        
        $sql = "SELECT DISTINCT rubrik FROM {$this->table} order by rubrik asc";         
        return $this->getInstance()->query($sql);
    }

}