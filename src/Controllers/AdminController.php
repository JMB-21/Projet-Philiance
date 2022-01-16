<?php 
namespace App\Controllers;

use App\Controllers\Controller;
use App\Models\NamesModel;

class AdminController extends Controller {

    public function liste() {       
                      
        $template="liste/listeadministrateur";               
        $this->render($template); 
    }
}