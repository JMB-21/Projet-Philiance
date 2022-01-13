<?php
    
    if (isset($_SESSION["newsession"])){ 
        session_unset();
        session_destroy(); 
        // echo "Chem-4";           
?>    
        <p>connectez vous !</p>
<?php
    }
?>            

    
