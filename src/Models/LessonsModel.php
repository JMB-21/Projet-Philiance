<?php 

namespace App\Models;

use PDO;
use App\Models\Model;

/**
 * Modèle spécialisé chargé de réaliser les requêtes SQL relatives aux lessons
 * Hérite du model principal
 */
class LessonsModel extends Model  {

    protected $table = 'lessons';

    /** 
     * Les modèles spécialisés traitent les requêtes fortement couplées
     * au schéma des tables (insert, update)
     */

    public function add(array $data) {
        $sql = "INSERT INTO {$this->table} (libelle) VALUES (:libelle)";
        $requete = $this->getInstance()->prepare($sql);
        $requete->execute($data);
    }

    public function searchByTitre(string $terme) {
        $sql = "SELECT * FROM  {$this->Table} WHERE titre LIKE '%" . $terme ."%'";
        return $this->getInstance()->query($sql);
    }

}

