<?php 

namespace App\Controllers;

use App\Controllers\Controller;
use App\Models\NamesModel;
use App\Models\Model;
use App\Models\RulesModel;
use App\Models\BiblioModel;
use App\Models\RubrikModel;
use App\Models\ThemModel;

class HomeController extends Controller {

    public function index() {
       
        $model      =   new BiblioModel();
        $result     =   $model->findAll();
        $biblio    =   $result->fetchAll();
   
        $model     =   new RubrikModel();
        $result     =   $model->findAll();
        $rubrik    =   $result->fetchAll();
        
        $model     =   new ThemModel();
        $result     =   $model->findAll();
        $theme    =   $result->fetchAll();
             
        if (isset($_SESSION["newsession"])){                  
            $template="home/homepage".$_SESSION["user"];
        }else{            
            $template="home/homepage";
        }
       
        $this->render($template, array('biblio' => $biblio, 'rubrik' => $rubrik,'theme' => $theme));        
    }


    public function connexion() {

        $role ="";
        if (isset($_POST["pseudo"])){ 

            $name = new NamesModel();
            $result = $name->findname($_POST["pseudo"],$_POST["mdp"]);
            $user = $result->fetchall(); 

            if (!empty($user)){
                $id = $user[0][6];   
                $rule = new RulesModel();
                $result = $rule->findrule($id);
                $rule = $result->fetchall();   
                $role = $rule[0][1];            

                if (isset($user)){                
                    $_SESSION["newsession"]=1;
                    $_SESSION["user"]=$role;
                    $_SESSION["name"] = $user[0][2]." ".$user[0][1];
                }
            }
        }
                
        if (isset($biblio)){              
           $this->render('home/homepage'.$role);
        }else{
            $model      =   new BiblioModel();
            $result     =   $model->findAll();
            $biblio    =   $result->fetchAll();

            $model     =   new RubrikModel();
            $result     =   $model->findAll();
            $rubrik    =   $result->fetchAll();
            
            $model     =   new ThemModel();
            $result     =   $model->findAll();
            $theme    =   $result->fetchAll();
                
            if (isset($_SESSION["user"])){                
                $template="home/homepage".$_SESSION["user"];
                $this->render($template, array('biblio' => $biblio, 'rubrik' => $rubrik,'theme' => $theme));  
            }else{                       
                $template="home/homepage";               
                $this->render($template); 
            }            
        }
        
    }


    public function deconnexion() {       

        if (isset($_SESSION["newsession"])){  
            session_unset();          
            session_destroy();                           
        }           
        $this->render('home/homepage');
    }

}