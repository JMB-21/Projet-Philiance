<?php  
namespace App\Controllers;

use App\Controllers\Controller;
use App\Models\CategoriesModel;

class CategoriesController extends Controller {
    
    public function index() {
        $model = new CategoriesModel();
        $result = $model->findAll();
        $categories = $result->fetchAll();
        $this->render('categories/liste', array(
            'categories'    =>  $categories,
            'titre'         =>  'Catégories',
            'description'   =>  'description SEO friendly',
        ));
    }

}