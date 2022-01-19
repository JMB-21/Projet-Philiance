<?php 
namespace App\Controllers;

use App\Controllers\Controller;
use App\Models\NamesModel;

class ManagerController extends Controller {

    public function liste() {       
      
        $model      =   new NamesModel();
        $result     =   $model->findManag();
        $names    =   $result->fetchall();
        
        $template="liste/listemanager";         
        $this->render($template, array('names' => $names)); 
    }
}