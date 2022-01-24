<!-- <?php 

if(!isset($_SESSION['newsession']))
{
    if(isset($_POST['formconnexion']))
    {
        $mail = htmlspecialchars($_POST['mail']);
        //    $mdpconnect = sha1($_POST['mdpconnect']);
        $mdp = $_POST['mdp'];
        if(!empty($mail) AND !empty($mdp))
        {
            $bdd = new PDO('mysql:host=127.0.0.1;dbname=philmedsoc', 'root', '');
            $requser = $bdd->prepare("SELECT * FROM names WHERE email = ? AND mdp = ?");
            $requser->execute(array($mail, $mdp));
            $userexist = $requser->rowCount();

            if($userexist == 1)
            {
                if(isset($_POST['rememberme'])) {
                    setcookie('email',$mail,time()+3600,null,null,false,true);
                    setcookie('mdp',$mdp,time()+3600,null,null,false,true);	
                    var_dump($COOKIE);				
                }
                $userinfo = $requser->fetch();
                $_SESSION['newsession']=1;
                $_SESSION['idn'] = $userinfo['idn'];	        
                $_SESSION['email'] = $userinfo['email'];
                
                $_SESSION['nom'] = $userinfo['nom'];

                echo "<br>";
                echo "Bonjour ".$userinfo['nom'];			
                echo "<br>";
                echo "Vous etes connecte !"; 
            }
            else
            {
                $erreur = "Mauvais mail ou mot de passe !";
            }
        }
        else
        {
            $erreur = "Tous les champs doivent être complétés !";
        }
    }
    else
    {
        echo "<br>";
        echo "Bienvenue, vous n'etes pas connecte";			
        echo "<br>";
        echo "Connectez vous !"; 
    }
}
else
{
    if(isset($_POST['formdeconnex']))
    {			
        setcookie('email','',time()-3600);
        setcookie('mdp','',time()-3600);
        $_SESSION = array();
        session_destroy();			
        echo "<br>";
        echo "Vous etes deconnecte !";			
        echo "<br>";			
    }
    else
    {
        echo "<br>";
        echo "Bonjour ".$_SESSION['nom'];			
        echo "<br>";
        echo "Vous etes connecte !"; 
    }
    
}
?> -->

