<?php 
namespace App\Controllers;

use App\Controllers\Controller;
use App\Models\NamesModel;
use App\Models\Model;


class ProfilController extends Controller {

    public function index() {        
                      
        $template="profil";               
        $this->render($template); 
    }
}