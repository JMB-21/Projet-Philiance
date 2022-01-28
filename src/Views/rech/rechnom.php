<?php
namespace App\Controllers;
use App\Controllers\Controller;
use App\Models\Model;
use PDO;
?>

<p>&nbsp;</p>

<div class="listeLecon">
    <div class="container">
        <div class="titreLecon">
            <h2>
                <?php            
                switch ($variable) {    
                    case '2':
                        echo "recherche de managers";
                        break;
                    case '3':
                        echo "recherche de formateurs";
                        break;
                    case '4':
                        echo "recherche d'auditeurs";
                        break; 
                    default:                        
                        break;
                }
                ?>
            </h2>
        </div>
    </div>
</div>

