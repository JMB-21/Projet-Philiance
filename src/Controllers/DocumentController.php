<?php 
namespace App\Controllers;

use App\Controllers\Controller;
use App\Models\NamesModel;
use App\Models\BiblioModel;

class DocumentController extends Controller {

    


    public function liste() {       
                      
        $template= "liste/listedocument";                      
        $this->render($template); 
    }

    public function edit($id) {       
                   
        // if (isset($_POST)){
        //     var_dump($_POST);
        // }

        $template= "edit/editdocument";  
        
        $model      =   new BiblioModel();
        $result     =   $model->find('idb',$id);
        $biblio    =   $result->fetch();
        
        // $this->render($template, array('biblio' => $biblio, 'rubrik' => $rubrik,'theme' => $theme)); 
        $this->render($template, array('biblio' => $biblio));         
    }

    public function modification() {       
                   
        if (isset($_POST)){
            var_dump($_POST);
        }

        $template= "edit/editdocument";  
        
        $model      =   new BiblioModel();
        $result     =   $model->updatebiblio();

        // $biblio    =   $result->fetch();
        
        // $this->render($template, array('biblio' => $biblio, 'rubrik' => $rubrik,'theme' => $theme)); 
        // $this->render($template, array('biblio' => $biblio));         
    }


    public function editpdf() {       
                      
        $template="edit/editpdf"; 
        $this->render($template);
    }

    public function editvideo() {       
                      
        $template="edit/editvideo"; 
        $this->render($template);      
    }

    public function supprime($id) {       
                      
        $template="supprime/supprimedocument";  
        
        $model      =   new BiblioModel();
        $result     =   $model->find('idb',$id);
        $biblio    =   $result->fetch();
        
        // $this->render($template, array('biblio' => $biblio, 'rubrik' => $rubrik,'theme' => $theme)); 
        $this->render($template, array('biblio' => $biblio));         
    }




    public function adddocument() {       
                      
        $template="add/adddocument";         
        $this->render($template);
               
        // $model      =   new BiblioModel();
        // $result     =   $model->find('idb',$id);
        // $biblio    =   $result->fetch();  
        // $this->render($template, array('biblio' => $biblio, 'rubrik' => $rubrik,'theme' => $theme));         
    }

    public function rechdocument() {       
        
          // $model      =   new BiblioModel();
        // $result     =   $model->find('idb',$id);
        // $biblio    =   $result->fetch();  
        // $this->render($template, array('biblio' => $biblio, 'rubrik' => $rubrik,'theme' => $theme));  
        
        $template="rech/rechdocument";       
        $this->render($template);
               
    }

    
}