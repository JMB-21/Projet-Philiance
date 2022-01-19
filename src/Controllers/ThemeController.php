<?php 
namespace App\Controllers;

use App\Controllers\Controller;
use App\Models\ThemeModel;

class ThemeController extends Controller {

    public function liste() { 
       
        $model      =   new ThemeModel();
        $result     =   $model->findthemeAll();
        $theme    =   $result->fetchall();
        
        $template="liste/listetheme"; 
        $this->render($template, array('theme' => $theme));
    }
}