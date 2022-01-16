<?php
namespace App\Controllers;

use App\Controllers\Controller;


// Echo "vous etes sur la page deconnexion !";
 

         class DeconnexionController extends Controller {

            public function index() {

                if (isset($_SESSION["newsession"])){ 
                        session_unset();
                        session_destroy();                                 
                }    

                // $template="home/deconnexion";
                $template="home/homepage";
                    $this->render($template);
               
            }
        }
        