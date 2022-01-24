<?php 

namespace App\Models;
use PDO;
use App\Models\Model;


 
//  * Modèle spécialisé chargé de réaliser les requêtes SQL relatives de la table theme
//  * Hérite du model principal
 
class ThemeModel extends Model  {

    protected $table = 'theme';

     
    //   * Les modèles spécialisés traitent les requêtes fortement couplées
    //  * au schéma des tables (insert, update)
   

    public function add(array $data) {
        $sql = "INSERT INTO {$this->table} (acro,them) VALUES (:acro,:them)";
        $requete = $this->getInstance()->prepare($sql);
        $requete->execute($data);
    }

     // ** ligne de la table */
     public function findtheme($id) {
             
        $sql = "SELECT * FROM theme WHERE idth = $id";       
        return $this->getInstance()->query($sql);
     }

    public function findThemeAll() {      
        
        $sql = "SELECT * FROM {$this->table}"; 
        return $this->getInstance()->query($sql);
    }

}