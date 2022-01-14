<?php 
namespace App\Controllers;

use App\Controllers\Controller;
use App\Models\NamesModel;
use App\Models\Model;


class AuditeurController extends Controller {

    public function list() {       
                      
        $template="liste/listauditeur";               
        $this->render($template); 
    }
}