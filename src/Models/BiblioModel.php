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
}

class RubrikModel extends Model  {
    
    protected $table = 'rubrik'; 
}

class ThemModel extends Model  {

    protected $table = 'theme'; 
}

