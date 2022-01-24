  <!-- Navbar -->
  <header>

<!-- Pop-Up Connexion + se souvenir-->



<?php
    if (!isset($_SESSION["newsession"])){ 
?>
      <div class="form-popup" id="myForm" >
        <form class="form-container" action="http://localhost/Projet-Philiance/home/connexion" method="POST">
          <h1 class="btn-txt">Connexion</h1>
      
          <label for="email"><b>E-mail</b></label>
          <input type="text" placeholder="E-Mail" name="email" required>
      
          <label for="mdp"><b>Mot de passe</b></label>
          <input type="password" placeholder="mdp" name="mdp" required>
         
          <input type="checkbox" name="rememberme" id="remembercheckbox" />
          <label for="remembercheckbox"> Se souvenir de moi</label>
          <label for="mdpoublie"><a href="mdpoublie">Mot de Passe Oublié ? </a></label>
          
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

        <form class="form-container" action="http://localhost/Projet-Philiance/home/deconnexion" method="POST">      
          <h1 class="btn-txt">Deconnexion</h1>        
          <button type="submit" class="btn" name="formdeconnex">Deconnexion</button>
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



<a href="http://localhost/projet-philiance/home"><img src="http://localhost/projet-philiance/assets/img/logo_Philiance_formation-small.png" class="card-img-top" alt="Logo Philiance Formation" title="Logo Philiance"></a>

<nav class="navbar">
  <ul>
    <li><a href="http://localhost/projet-philiance/home">Accueil</a></li>
      <li><a href="#">Notre catalogue</a>
      <ul>
        <li><a href="#">Informatique</a></li>
        <li><a href="#">Langues</a></li>
        <li><a href="#">Métiers</a></li>
      </ul>
    </li>

    <li><a href="#">Mode de formation</a></li>
      <li><a href= "http://localhost/Projet-Philiance/home/newsletter">Newsletter</a></li>
      <li><a href="http://localhost/Projet-Philiance/home/contact">contact</a></li>
  </ul>

  
  
  <div class="social-icons">
          <a href="#" onclick="openForm()"><i class="far fa-user-circle"></i></a>
      </div>
  </nav>        
</header>

