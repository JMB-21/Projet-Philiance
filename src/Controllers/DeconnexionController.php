<?php
namespace App\Controllers;

use App\Controllers\Controller;


// Echo "vous etes sur la page deconnexion !";
 

         class DeconnexionController extends Controller {

            public function index() {

                    $template="home/deconnexion";
                    $this->render($template);
               
            }
        }
        