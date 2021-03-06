<?php 

namespace App\Models;
use PDO;
use App\Models\Model;
// echo "... namesmodels";

 
//  * Modèle spécialisé chargé de réaliser les requêtes SQL relatives de la table names
//  * Hérite du model principal
 

class NamesModel extends Model  {

    protected $table = 'names';

     
    //   * Les modèles spécialisés traitent les requêtes fortement couplées
    //  * au schéma des tables (insert, update)
   

    public function add(array $data) {
        $sql = "INSERT INTO {$this->table} (pseudo,mdp) VALUES (:pseudo,:mdp)";
        $requete = $this->getInstance()->prepare($sql);
        $requete->execute($data);
    }

     // ** la ligne pseudo/mdp d'une table */
     public function findnam($pseudo,$mdp) {
        
        //$sql = "SELECT pseudo, mdp FROM {$this->table} WHERE pseudo = $pseudo and mdp= $mdp";        
        $sql = "SELECT * FROM names WHERE pseudo = :pseudo and mdp= :mdp";         
        return $this->getInstance()->query($sql);

       
     }

}
