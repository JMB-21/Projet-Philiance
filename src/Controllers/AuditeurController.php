<?php 
namespace App\Controllers;

use App\Controllers\Controller;
use App\Models\NamesModel;

class AuditeurController extends Controller {

    public function liste() {       
                      
        $template="liste/listeauditeur";               
        $this->render($template); 
    }
}