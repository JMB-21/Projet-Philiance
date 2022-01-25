<?php 

namespace App\Controllers;

use App\Controllers\Controller;
use App\Models\NamesModel;
use App\Models\SectionModel;
use App\Models\Model;
use App\Models\RulesModel;
use App\Models\BiblioModel;
use App\Models\RubrikModel;
use App\Models\ThemModel;
use App\Models\SupportModel;

class HomeController extends Controller {

    public function index() {

        if (isset($_SESSION["newsession"])){   
            $model =new BiblioModel();
            $result = $model->findAll();
            $biblio = $result->fetchAll();
    
            $model = new RubrikModel();
            $result = $model->findAll();
            $rubrik = $result->fetchAll();
            
            $model = new ThemModel();
            $result = $model->findAll();
            $theme = $result->fetchAll();             
                         
            $template="home/homepage".$_SESSION["user"];
            $this->render($template, array('biblio' => $biblio, 'rubrik' => $rubrik,'theme' => $theme));  

        }else{    

            $template="home/homepage";
            $this->render($template);  
        }       
    }


    public function connexion() {

        $role ="";       

    //  echo "connexion";
    //  var_dump($_POST);

   
    //    $mdpconnect = sha1($_POST['mdpconnect']);
    

        // si le formulaire de connexion a été rempli
        if (isset($_POST["email"])){ 
            
            $mail = htmlspecialchars($_POST['email']);
            $mdp = $_POST['mdp'];

            // On cherche sur l'utilisateur a bien rentré son mdp 
            $name = new NamesModel();
            $result = $name->findmail($_POST["email"],$_POST["mdp"]);
            $user = $result->fetchall(); 

            // var_dump ($user);

            // si c'est le bon user/mdp
            if (!empty($user)){
                // on recupère son role dans la table name
                $id = $user[0][6];   
                // on cherche dans la table rules la regle correspondante
                $rule = new RulesModel();
                $result = $rule->findrule($id);
                $rule = $result->fetchall();   
                // on assigne à role le role trouvé
                $role = $rule[0][1];            

                

                // si le user/mdp est le bon
                if (isset($user)){      
                    // on crée variable de session 
                    $_SESSION["newsession"]=1;
                    $_SESSION["user"]=$role;
                    $_SESSION["role"]= $rule[0]['idr'];
                    $_SESSION["name"] = $user[0][2]." ".$user[0][1];

                    // var_dump($_SESSION);

                    // echo "<br>user ok <br>";

                    if(isset($_POST['rememberme'])) {
						setcookie('email',$mail,time()+3600,null,null,false,true);
						setcookie('mdp',$mdp,time()+3600,null,null,false,true);	
                        var_dump($_COOKIE);					
					}
                }
            }
        }
            // Si on est passé par la fonction index    
        if (isset($biblio)){              
        //    $this->render('home/homepage'.$role);
           // sinon on crée les données
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
                
            // si un utilisateur est bien connecté
            if (isset($_SESSION["user"])){ 
                // on affiche la page liée au role de l'utilisateur               
                $template="home/homepage".$_SESSION["user"];
                $this->render($template, array('biblio' => $biblio, 'rubrik' => $rubrik,'theme' => $theme));  
                // sinon on charge la page de base
            }else{                       
                $template="home/homepage";               
                $this->render($template); 
            }            
        }
        
    }


    public function connexionpseudo() {

        $role ="";
        // si le formulaire de connexion a été rempli
        if (isset($_POST["pseudo"])){ 

            // On cherche sur l'utilisateur a bien rentré son mdp 
            $name = new NamesModel();
            $result = $name->findname($_POST["pseudo"],$_POST["mdp"]);
            $user = $result->fetchall(); 

            // si c'est le bon user/mdp
            if (!empty($user)){
                // on recupère son role dans la table name
                $id = $user[0][6];   
                // on cherche dans la table rules la regle correspondante
                $rule = new RulesModel();
                $result = $rule->findrule($id);
                $rule = $result->fetchall();   
                // on assigne à role le role trouvé
                $role = $rule[0][1];            

                // si le user/mdp est le bon
                if (isset($user)){      
                    // on crée variable de session          
                    $_SESSION["newsession"]=1;
                    $_SESSION["user"]=$role;
                    $_SESSION["name"] = $user[0][2]." ".$user[0][1];
                }
            }
        }
            // Si on est passé par la fonction index    
        if (isset($biblio)){              
        //    $this->render('home/homepage'.$role);
           // sinon on crée les données
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
                
            // si un utilisateur est bien connecté
            if (isset($_SESSION["user"])){ 
                // on affiche la page liée au role de l'utilisateur               
                $template="home/homepage".$_SESSION["user"];
                $this->render($template, array('biblio' => $biblio, 'rubrik' => $rubrik,'theme' => $theme));  
                // sinon on charge la page de base
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

    public function newsletter() {  

        $this->render('home/newsletter');
    }

    public function mdpoublie() {  

        $this->render('mdpoublie');
    }

    public function contact() {         

        $this->render('home/contact');
    }

    public function mentions() {         

        $this->render('home/mentions');
    }

    public function faq() {         

        $this->render('home/faq');
    }

    public function cookie() {         

        $this->render('home/info-cookie');
    }

    public function support() {         

        $this->render('home/support');
    }
}
