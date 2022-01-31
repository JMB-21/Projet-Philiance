<?php 

use App\Controllers\Controller;



/** L'autoloader fourni par composer est chargé à chaque requête */

require './vendor/autoload.php';

define('ROOT', __DIR__);

$path ="";

if (isset($_SERVER['HTTPS'])){ 
        switch ($_SERVER['HTTPS']) {
        case 'on':
            $path = "https://";
            break;
        case 'off':
            $path = "http://www.";  
            break;
        default:
            $path = "http://";
            break;
    } 
}else{
    $path = "http://";
}

$path = $path.$_SERVER['HTTP_HOST'].$_SERVER['SCRIPT_NAME'];
$path = str_replace("index.php", "", $path);

define('BASEURL',$path);


/** trim() : supprimme les caractères `/` au début et à la fin du paramètre passé dans l'url */

$request = trim($_GET['p'], '/');

/** 
 * Transforme la chaîne en tableau :
 * string : controller/action/param
 * array  : 
 *  0   =>  controller
 *  1   =>  action
 *  2   =>  param
 */
$params = explode( '/', $request );



/** 
 * Si le premier paramètre est vide 
 * => c'est la page d'accueil 
 */

if(empty($params[0])) {    
    $controller = "App\\Controllers\\HomeController";   
} else {   
    $controller = "App\\Controllers\\" . ucfirst($params[0]) . 'Controller';  
}

/** 
 * Si le deuxième paramètre est vide 
 * => url = http://localhost/controller
 * => on attribue une action "par défaut" (par exemple la liste des entités) 
 */

 
    $id ="";
    if(empty($params[1])) {
        $action = 'index';  
    } else {  
        if(empty($params[2])) {
            $action = $params[1]; 
        } else {
            $action = $params[1]; 
            $id=$params[2];
        }
    }


    $mot=substr_count(BASEURL,'localhost');              

    if ($mot === 0) {
        
        /* Pour compenser le problème de fonctionnement de l'autoloader distant de composer */

        require ROOT . '/src/Controllers/AdminController.php';
        require ROOT . '/src/Controllers/AuditeurController.php';
        require ROOT . '/src/Controllers/BiblioController.php';
        require ROOT . '/src/Controllers/CategoriesController.php';
        require ROOT . '/src/Controllers/DeconnexionController.php';
        require ROOT . '/src/Controllers/DocumentController.php';
        require ROOT . '/src/Controllers/FormateurController.php';
        require ROOT . '/src/Controllers/HomeController.php';
        require ROOT . '/src/Controllers/LessonsController.php';
        require ROOT . '/src/Controllers/ManagerController.php';
        require ROOT . '/src/Controllers/NewsController.php';
        require ROOT . '/src/Controllers/ProfilController.php';
        require ROOT . '/src/Controllers/RubrikController.php';
        require ROOT . '/src/Controllers/SectionController.php';
        require ROOT . '/src/Controllers/ThemeController.php';

        require ROOT . '/src/Models/Model.php';
        require ROOT . '/src/Models/BiblioModel.php';
        require ROOT . '/src/Models/CategoriesModel.php';
        require ROOT . '/src/Models/LessonsModel.php';
        require ROOT . '/src/Models/NamesModel.php';
        require ROOT . '/src/Models/RubrikModel.php';
        require ROOT . '/src/Models/RulesModel.php';
        require ROOT . '/src/Models/SectionModel.php';
        require ROOT . '/src/Models/SupportModel.php';
        require ROOT . '/src/Models/ThemeModel.php'; 
    }     
    

    
/**
 * On vérifie que la méthode (action) existe pour le controller
 * Si ce n'est pas le cas (soit le controller n'existe pas, soit l'action n'appartient pas au controller)
 * => controller/action non prévu dans l'application
 * => la page demandée n'existe pas
 */
   
     session_start();
  

 if (isset($_SESSION["newsession"])){      

   
    if(method_exists($controller, $action)) {   
       
        $call = new $controller(); 
        $call->$action($id); 
    } else {              
       
        $controller = "App\\Controllers\\HomeController"; 
        $action = 'home404'; 
        $call = new $controller(); 
        $call->$action($id);
    }    
 }else{

   

    $controller='App\\Controllers\\homeController';
    
    if( method_exists( $controller, $action )) {
        $call = new $controller();
        $call->$action();
    } else {        
        $controller = "App\\Controllers\\HomeController"; 
        $action = 'home404'; 
        $call = new $controller(); 
        $call->$action($id);
    }   
}


