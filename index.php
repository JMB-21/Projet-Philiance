<?php 

use App\Controllers\Controller;

/**
 * Mise à jour
 * Ce script tient lieu de router pour l'application.
 * 
 * Il est appelé à chaque requête (voir fichier .htaccess)
 * 
 * Il analyse les requêtes reçues et détermine :
 * - le controller à utiliser,
 * - l'action (méthode) à exécuter,
 * - transmet les éventuels paramètres supplémentaires à la méthode. 
 * 
 * Exemples :
 * http://localhost/lessons/modify/12 appelera la méthode modify() du controller LessonsController avec le paramètre 12
 * 
 */

/** L'autoloader fourni par composer est chargé à chaque requête */

require './vendor/autoload.php';

define('ROOT', __DIR__);

$path ="";

if (isset($_SERVER['HTTPS'])){ 
        switch ($_SERVER['HTTPS']) {
        case 'on':
            $path = "https://www.";
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

// echo "baseurl : ".BASEURL."<br>";

//define('ROOT', str_replace('index.php','',$_SERVER['SCRIPT_FILENAME']));
//  require_once(ROOT.'src/Models/Model.php');
//  require_once(ROOT.'src/Controllers/controller.php');



/** trim() : supprimme les caractères `/` au début et à la fin du paramètre passé dans l'url */
$request = trim($_GET['p'], '/');



// echo "<br><br><br><br><br><br>";
// echo "<br>request : ";
// var_dump ($request);
// echo "<br>";


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
 * => url = http://localhost/
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



    echo "<br><br><br><br><br><br>";

    echo "<br>controller : ";
    var_dump ($controller);
    echo "<br>";

    echo "<br>action : ";
    var_dump ($action);
    echo "<br>";

    // echo ROOT;
    // var_dump($_SERVER);

    // echo "BASE:".BASEURL;
    
    // echo "<br>params : ";
    // var_dump ($params);
    // echo "<br>";

 

//  echo '<script>';
//   echo 'console.log(''. $controller .'')';
//   echo '</script>';

/**
 * On vérifie que la méthode (action) existe pour le controller
 * Si ce n'est pas le cas (soit le controller n'existe pas, soit l'action n'appartient pas au controller)
 * => controller/action non prévu dans l'application
 * => la page demandée n'existe pas
 */
    //  session_unset(); 
      //  $_SESSION["newsession"]=1;
     //   $_SESSION["user"]="manager";   
session_start();

// var_dump($_SESSION);

 if (isset($_SESSION["newsession"])){      

    //  echo "<br>...Session : ";
    // var_dump ($_SESSION);
    // echo "<br>";

    if(method_exists($controller, $action)) {   
        // echo "method_exists";
        $call = new $controller(); 
        $call->$action($id); 
    } else {       
        //  header('Location: /Projet-Philiance' );      
        // require ROOT . '/src/Views/page404.html';
        $controller = "App\\Controllers\\HomeController"; 
        $action = 'home404'; 
        $call = new $controller(); 
        $call->$action($id);
    }    
 }else{

    // echo "<br><br><br><br><br><br>";
    //  echo "-- Pas de Session";    
    //   var_dump($controller);
    //   var_dump($action);
    //   var_dump($_SERVER);

    $controller='App\\Controllers\\homeController';
    // $action = 'connexion';

    if( method_exists( $controller, $action )) {
        $call = new $controller();
        $call->$action();
    } else {
        // require ROOT . '/src/Views/404.php';
        $controller = "App\\Controllers\\HomeController"; 
        $action = 'home404'; 
        $call = new $controller(); 
        $call->$action($id);
    }   
}


