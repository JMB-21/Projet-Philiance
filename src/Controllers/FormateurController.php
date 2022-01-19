<?php 
namespace App\Controllers;

use App\Controllers\Controller;
use App\Models\NamesModel;

class FormateurController extends Controller {

    public function liste() {       
                      
        $model      =   new NamesModel();
        $result     =   $model->findForm();
        $names    =   $result->fetchall();
        
        $template="liste/listeformateur";        
        $this->render($template, array('names' => $names));         
    }
}