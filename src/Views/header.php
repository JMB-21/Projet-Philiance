   <!-- Navbar -->
   <header>
            <a href="#"><img src="./assets/img/logo_Philiance_formation-small.png" class="card-img-top" alt="Logo Philiance Formation" title="Logo Philiance"></a>
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
                   <a href="connection"><i class="far fa-user-circle"></i></a> 
                </div> 
                <div>
                <?php
 if (!isset($_SESSION["user"])){ 
  
?>
   <!-- <button class="open-button" onclick="openForm()"><img src="Picto_Connexion.svg">connexion</button> -->
  <button class="far fa-user-circle" onclick="openForm()">connexion</button>

  <div class="form-popup" id="myForm" >
    <form class="form-container" action="home" method="POST">
      <h1>Connexion</h1>
  
      <label for="pseudo"><b>E-mail</b></label>
      <input type="text" placeholder="pseudo" name="pseudo" required>
  
      <label for="mdp"><b>Mot de passe</b></label>
      <input type="text" placeholder="mdp" name="mdp" required>
  
      <button type="submit" class="btn">Connexion</button>
  <!-- <p class="paragraphe">Ou </p>
      <button onclick="window.location.href = 'new-inscript2.php';" type="submit" class="btn2">S'inscrire</button> -->
  
      <button type="button" class="btn cancel" onclick="closeForm()">Fermer</button>
    </form>
  </div>
<?php  
}else{
?>  
 <!-- <button class="open-button" onclick="openForm()"><img src="Picto_Connexion.svg">Deconnexion</button> -->
 <button class="far fa-user-circle" onclick="openForm()">Déconnexion</button>
 

    <form class="form-container" action="profil" method="POST">
      <h1>Profil</h1>        
        <button type="submit" class="btn">Profil</button>      
    </form>

    <form class="form-container" action="deconnexion" method="POST">      
      <h1>Deconnexion</h1>        
        <button type="submit" class="btn">Deconnexion</button>

      <button type="button" class="btn cancel" onclick="closeForm()">Fermer</button>
    </form>
  </div>
<?php
}      
?>




                </div>              
            </nav>        
        </header>   

        <script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>