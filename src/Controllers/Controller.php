<?php 
namespace App\Controllers;

use App\Controllers\Controller;

/**
 * Controller général
 * Permet de regrouper des méthodes communes aux autres controllers (controllers spécialisés)
 */

abstract class Controller {

    /**
     * Méthode permettant d'inclure les vues dans un template global
     *
     * @param string $template vue à inclure
     * @param array $data données utilisées par la vue
     * @return void
     */
       

    public function render($template, array $data = []) {
        
        extract($data);

        // echo $template;
        // var_dump($_SESSION);
        
        /** Début de bufferisation de la sortie */
        ob_start();       
       
// echo "Template : ".$template;

        require ROOT . '/src/Views/' . $template . '.php';
        
        /** Fin de bufferisation de la sortie et stckage du contenu du buffer dans $content */
        $content = ob_get_clean();

        // require ROOT . '/src/Views/register2.php';
        require ROOT . '/src/Views/default.php';
    }

    /** A détailler */

    public function redirect($destination) {
        header('Location: ' . $destination );       
    }
    
}