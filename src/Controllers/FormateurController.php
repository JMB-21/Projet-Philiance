<?php 
namespace App\Controllers;

use App\Controllers\Controller;
use App\Models\NamesModel;

class FormateurController extends Controller {

    public function liste() {       
                      
        $template="liste/listeformateur";               
        $this->render($template); 
    }
}