<?php 
namespace App\Controllers;

use App\Controllers\Controller;
use App\Models\NamesModel;

class ManagerController extends Controller {

    public function liste() {       
                      
        $template="liste/listemanager";               
        $this->render($template); 
    }
}