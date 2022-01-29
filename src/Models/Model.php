<?php 
namespace App\Models;

use PDO;
use PDOException;

/**
 * Model général
 * Permet de regrouper des méthodes communes aux autres models (models spécialisés)
 */
abstract class Model {

    /** Connexion à la base de données */
    private static $instance = null;

    /** 
     * Singleton permettant d'obtenir un accès à la base de données
     * Crée un accès si aucun accès n'est déjà en cours
     * Retourne l'accès en cours si il existe
     */
    public function getInstance() {
        if( self::$instance === null) {
            try {
              
               $mot=substr_count(BASEURL,'localhost');              

                if ($mot === 0) {
                    // echo "distant";
                    self::$instance = new PDO('mysql:host= db5006433601.hosting-data.io', ' dbu851630', 'philiance22');                     
                } else {
                    // echo "local";
                    self::$instance = new PDO('mysql:host=localhost;dbname=philmedsoc', 'root', '');                
                }     
                
            } catch( PDOException $e) {
                die($e->getMessage());
            }
        }
        return self::$instance;
    }
    
    /** Toutes les lignes d'une table */
    public function findAll() {      
        
        $sql = "SELECT * FROM {$this->table}";

        // echo "<br>".$sql."<br>";
           
        return $this->getInstance()->query($sql);
        
    }    

    /** Une ligne particulière d'une table */
    public function find($idnam,$id) {
        $sql = "SELECT * FROM {$this->table} WHERE $idnam = $id";        
        return $this->getInstance()->query($sql);
     
        //...
    }

    /** Lignes correspondant à un critère */
    public function findBy($key, $value) {
        $sql = "SELECT * FROM {$this->table} WHERE $key = $value";
        // ...
    }

    // ** la ligne pseudo/mdp d'une table */
    public function findname($pseudo,$mdp) {

        $sql = "SELECT * FROM {$this->table} WHERE pseudo = '$pseudo' and mdp= '$mdp'";
        return $this->getInstance()->query($sql);      
    }
    
    // ** la ligne email/mdp d'une table */
    public function findmail($mail,$mdp) {

        $sql = "SELECT * FROM {$this->table} WHERE email = '$mail' and mdp= '$mdp'";
        return $this->getInstance()->query($sql);      
    }

}