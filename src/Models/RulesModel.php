<?php 

namespace App\Models;
use PDO;
use App\Models\Model;


 
//  * Modèle spécialisé chargé de réaliser les requêtes SQL relatives de la table rules
//  * Hérite du model principal
 

class RulesModel extends Model  {

    protected $table = 'names';

     
    //   * Les modèles spécialisés traitent les requêtes fortement couplées
    //  * au schéma des tables (insert, update)
   

    public function add(array $data) {
        $sql = "INSERT INTO {$this->table} (pseudo,mdp) VALUES (:pseudo,:mdp)";
        $requete = $this->getInstance()->prepare($sql);
        $requete->execute($data);
    }

     // ** la ligne pseudo/mdp d'une table */
     public function findrule($id) {
      
        //$sql = "SELECT pseudo, mdp FROM {$this->table} WHERE pseudo = $pseudo and mdp= $mdp";        
        $sql = "SELECT * FROM rules WHERE idr = $id";

         // echo "<br>".$sql."<br>";
        return $this->getInstance()->query($sql);

       
     }

}