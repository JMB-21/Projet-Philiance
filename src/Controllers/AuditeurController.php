<?php 
namespace App\Controllers;

use App\Controllers\Controller;
use App\Models\NamesModel;

class AuditeurController extends Controller {

    public function liste() { 
        
        $model      =   new NamesModel();
        $result     =   $model->findAuditeur();
        $names    =   $result->fetchall();
        
        $template="liste/listeauditeur";        
        $this->render($template, array('names' => $names)); 
    }
}