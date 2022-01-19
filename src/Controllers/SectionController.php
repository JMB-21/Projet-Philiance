<?php 
namespace App\Controllers;

use App\Controllers\Controller;
use App\Models\SectionModel;

class SectionController extends Controller {

    public function liste() { 
       
        $model      =   new SectionModel();
        $result     =   $model->findsectionAll();
        $sector    =   $result->fetchall();
        
        $template="liste/listesection"; 
        $this->render($template, array('sector' => $sector));
    }
}