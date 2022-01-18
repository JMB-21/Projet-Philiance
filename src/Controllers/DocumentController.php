<?php 
namespace App\Controllers;

use App\Controllers\Controller;
use App\Models\NamesModel;

class DocumentController extends Controller {

    

    public function liste() {       
                      
        $template="liste/listedocument";               
        $this->render($template); 
    }


    public function deconnexion() { 
        
        if (isset($_SESSION["newsession"])){ 

           
            session_unset();
            session_destroy();                                 
    }    

    // $template="home/deconnexion";
    // $template="home/homepage";
    $template="";
        $this->render($template);
    }
}