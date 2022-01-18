<?php 
namespace App\Controllers;

use App\Controllers\Controller;
use App\Models\NamesModel;

class DocumentController extends Controller {

    public function liste() {       
                      
        $template="liste/listedocument";               
        $this->render($template); 
    }
}