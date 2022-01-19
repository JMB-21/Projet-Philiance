<?php 
namespace App\Controllers;

use App\Controllers\Controller;
use App\Models\RubrikModel;

class RubrikController extends Controller {

    public function liste() { 
       
        $model      =   new RubrikModel();
        $result     =   $model->findrubrikAll();
        $rubrik    =   $result->fetchall();
        
        $template="liste/listerubrik"; 
        $this->render($template, array('rubrik' => $rubrik));
    }
}