<?php 
namespace App\Controllers;

use App\Controllers\Controller;
use App\Models\NamesModel;

class NewsController extends Controller {

    public function index() {       
      
        // $model      =   new NamesModel();
        // $result     =   $model->findManag();
        // $names    =   $result->fetchall();
        
        $template="home/news";         
        // $this->render($template, array('names' => $names)); 
        $this->render($template);
    }
}