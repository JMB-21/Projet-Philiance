<?php 
namespace App\Controllers;

use App\Controllers\Controller;
use App\Models\NamesModel;
use App\Models\BiblioModel;

class DocumentController extends Controller {

    

    public function liste() {       
                      
        $template="liste/listedocument"; 
        echo "gloup2";              
        $this->render($template); 
    }

    public function edit($id) {       
                      
        $template="edit/editdocument";  
        
        $model      =   new BiblioModel();
        $result     =   $model->find('idb',$id);
        $biblio    =   $result->fetch();
        
        // $this->render($template, array('biblio' => $biblio, 'rubrik' => $rubrik,'theme' => $theme)); 
        $this->render($template, array('biblio' => $biblio)); 
        
    }

    public function supprime($id) {       
                      
        $template="supprime/supprimedocument";  
        
        $model      =   new BiblioModel();
        $result     =   $model->find('idb',$id);
        $biblio    =   $result->fetch();
        
        // $this->render($template, array('biblio' => $biblio, 'rubrik' => $rubrik,'theme' => $theme)); 
        $this->render($template, array('biblio' => $biblio)); 
        
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