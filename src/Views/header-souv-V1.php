  <!-- Navbar -->
  <header>

<!-- Pop-Up Connexion -->

<?php

    // echo "<br>Cookie :";
    // var_dump ($_COOKIE); 

	// session_start();
	$bdd = new PDO('mysql:host=127.0.0.1;dbname=philmedsoc', 'root', '');
	include_once('cookiconnex.php');
  // echo "POST : ";
  // var_dump ($_POST);
	if(isset($_POST['formconnexion']))
	{

    echo "<br>form ok";
	   $mail = htmlspecialchars($_POST['email']);
	//    $mdpconnect = sha1($_POST['mdpconnect']);
	   $mdp = $_POST['mdp'];
	   if(!empty($mail) AND !empty($mdp))
	   {
	      $requser = $bdd->prepare("SELECT * FROM names WHERE email = ? AND mdp = ?");
        var_dump ($requser);
	      $requser->execute(array($mail, $mdp));
	      $userexist = $requser->rowCount();
        
        // echo "<br>userexist : ";
        // var_dump ($userexist);

	      if($userexist == 1)
	      {
	         if(isset($_POST['rememberme'])) {
	            setcookie('email',$mail,time()+3600,null,null,false,true);
	            setcookie('password',$mdp,time()+3600,null,null,false,true);

				echo "<br>Cookie-Set :";
				var_dump ($_COOKIE); 
	         }
	         $userinfo = $requser->fetch();
	         $_SESSION['idn'] = $userinfo['idn'];
	         $_SESSION['pseudo'] = $userinfo['pseudo'];
	         $_SESSION['email'] = $userinfo['email'];
	        // header("Location: connect.php");
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
	?>


<?php
    if (!isset($_SESSION["user"])){ 
?>
        <div class="form-popup" id="myForm" >
        <form class="form-container" action="home" method="POST">
          <h1 class="btn-txt">Connexion</h1>
      
          <label for="email"><b>E-mail</b></label>
          <input type="text" placeholder="E-Mail..." name="email" required>
      
          <label for="mdp"><b>Mot de passe</b></label>
          <input type="text" placeholder="Mot de passe..." name="mdp" required>
         
          <input type="checkbox" name="rememberme" id="remembercheckbox" /><label for="remembercheckbox"> Se souvenir de moi</label>
          
          <button type="submit" class="btn" name="formconnexion">Connexion</button>
    
      
          <button type="button" class="btn cancel" onclick="closeForm()">Fermer</button>              </form>
      </div>
<?php  
    }else{
?>  
     
      <div class="form-popup" id="myForm" >
        <form class="form-container" action="profil" method="POST">
          <h1 class="btn-txt">Profil</h1>        
          <button type="submit" class="btn">Profil</button>      
        </form>

        <form class="form-container" action="home/deconnexion" method="POST">      
          <h1 class="btn-txt">Deconnexion</h1>        
          <button type="submit" class="btn">Deconnexion</button>
          <button type="button" class="btn cancel" onclick="closeForm()">Fermer</button>
        </form>
     </div>  
<?php
    }      
?>
            


<script>
function openForm() {
document.getElementById("myForm").style.display = "block";
// e.preventDefault(); 
}

function closeForm() {
document.getElementById("myForm").style.display = "none";
// e.preventDefault(); 
}
</script>



<a href="#"><img src="http://localhost/projet-philiance/assets/img/logo_Philiance_formation-small.png" class="card-img-top" alt="Logo Philiance Formation" title="Logo Philiance"></a>

<nav class="navbar">
  <ul>
    <li><a href="#">Accueil</a></li>
      <li><a href="#">Notre catalogue</a>
      <ul>
        <li><a href="#">Informatique</a></li>
        <li><a href="#">Langues</a></li>
        <li><a href="#">Métiers</a></li>
      </ul>
    </li>

    <li><a href="#">Mode de formation</a></li>
      <li><a href="#">Newsletter</a></li>
      <li><a href="#">contact</a></li>
  </ul>

  
  
  <div class="social-icons">
          <a href="#" onclick="openForm()"><i class="far fa-user-circle"></i></a>
      </div>
  </nav>        
</header>

