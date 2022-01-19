<?php 
namespace App\Controllers;

use App\Controllers\Controller;
use App\Models\NamesModel;

class AdminController extends Controller {

    public function liste() {       
      
        $model      =   new NamesModel();
        $result     =   $model->findAdmin();
        $names    =   $result->fetchall();
        
        $template="liste/listeadministrateur";      
        $this->render($template, array('names' => $names)); 
    }
}