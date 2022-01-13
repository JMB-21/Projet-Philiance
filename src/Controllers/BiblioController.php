<?php 

namespace App\Controllers;

use App\Models\BiblioModel;
use App\Models\RubrikModel;
use App\Controllers\Controller;


/**
 * Controller spécialisé chargé de traiter les requêtes relatives aux documents de la bibliotheque
 * * Hérite du controller principal
 */
class BiblioController extends Controller {

    /** Retourne la liste des documents de la bibliotheque*/
    public function index() {
   

        /** Demande le model permettant de traiter les requêtes SQL relatives aux documents */
        $model      =   new BiblioModel();
        $result     =   $model->findAll();
        $biblio    =   $result->fetchAll();

       

        $model     =   new RubrikModel();
        $result     =   $model->findAll();
        $rubrik    =   $result->fetchAll();

        
        /** 
         * Appel de l'affichage de la vue dans le template principal 
         * paramètre 1 : 'lessons/liste' -> chemin + fichier (sans extension) de la vue à utiliser
         * paramètre 2 : tableau contenant les différentes variables à passer à la vue
        */ 
        $template="visualldocu";       
        require ROOT . '/src/Views/lessons/' . $template . '.php';
       // $this->render('lessons/biblio', array('biblio' => $biblio, 'titre' => 'Documents', 'description' => 'Liste des Documents'));        
    }

    /* Ajoute un document dans la BDD  */

    // public function add() {

    //     $messages=[];

    //     if($_SERVER['REQUEST_METHOD']=='POST') {

    //         extract($_POST);

    //         /* Vérification des donées saisies */
    //         if(empty($libelle)) { $messages[] = "Le libellé est obligatoire"; }
    //         autres vérifications
            
    //         $libelle = htmlentities(strip_tags($libelle));
            
    //         /* Fin vérification des donées saisies */

    //         if(empty($messages)) {
    //             $model = new LessonsModel();
    //             $model->add(array(
    //                 'libelle' => $libelle,
    //             ));
    //         }
        
    //     }
        
    //     $this->render('lessons/formulaire', array(
    //         'messages' => $messages,
    //     ));

    // }

    public function show() {
        echo __METHOD__; 
    }

}