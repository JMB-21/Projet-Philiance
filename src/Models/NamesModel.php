<?php 

namespace App\Models;
use PDO;
use App\Models\Model;

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

     // ** la ligne id d'une table */
     public function findnameid($id) {
        
        //$sql = "SELECT pseudo, mdp FROM {$this->table} WHERE pseudo = $pseudo and mdp= $mdp";        
        $sql = "SELECT * FROM names WHERE idn = $id";         
        return $this->getInstance()->query($sql);
     }

    public function findAdmin() {      
        
        $sql = "SELECT * FROM {$this->table} WHERE idrule = '1'"; 
        return $this->getInstance()->query($sql);
    }  
    
    public function findManag() {      
        
        $sql = "SELECT * FROM {$this->table} WHERE idrule = '2'"; 
        return $this->getInstance()->query($sql);
    }

    public function findForm() {      
        
        $sql = "SELECT * FROM {$this->table} WHERE idrule = '3'"; 
        return $this->getInstance()->query($sql);
    }

    public function findAuditeur() {      
        
        $sql = "SELECT * FROM {$this->table} WHERE idrule = '4'"; 
        return $this->getInstance()->query($sql);
    }

    
}
