  <!-- Navbar -->
  <style>
@font-face {
    font-family: 'brandon_grotesque-light';
    src: url('../font/brandon-grotesque-light.otf');

  
}
* {box-sizing: border-box;}

/* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
  background-color: #044BD9;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  /* bottom: 23px; */
  right: 28px;
  width: 280px;
  font-family: brandon_grotesque-light;
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  /* bottom: 0; */
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
  font-family: brandon_grotesque-light;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
  font-family: brandon_grotesque-light;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #F2F2F2;
  font-family: brandon_grotesque-light;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
  font-family: brandon_grotesque-light;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #044BD9;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
  font-family: brandon_grotesque-light;
}

.form-container .btn2 {
  background-color: #0460D9;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
  font-family: brandon_grotesque-light;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
  font-family: brandon_grotesque-light;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
  font-family: brandon_grotesque-light;
}

h1 {
  font-family: brandon_grotesque-light;
}

.paragraphe {
  text-align: center;
}

.open-button img {
  width: 30px;
}
</style>


  <header>

<!-- Pop-Up Connexion + se souvenir-->

<?php
    if (!isset($_SESSION["newsession"])){ 
?>
      <div class="form-popup" id="myForm" >
        <form class="form-container" action="<?=BASEURL?>home/connexion" method="POST">
          <h1 class="btn-txt">Connexion</h1>
      
          <label for="email"><b>E-mail</b></label>
          <input type="text" placeholder="E-Mail" name="email" required>
      
          <label for="mdp"><b>Mot de passe</b></label>
          <input type="password" placeholder="mdp" name="mdp" required>
         
          <input type="checkbox" name="rememberme" id="remembercheckbox" />
          <label for="remembercheckbox"> Se souvenir de moi</label>
          <label for="mdpoublie"><a href="home/mdpoublie">Mot de Passe Oublié ? </a></label>
          
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

        <form class="form-container" action="<?=BASEURL?>home/deconnexion" method="POST">      
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





<a href="<?=BASEURL?>home"><img src="<?=BASEURL?>assets/img/logo_Philiance_formation-small.png" class="card-img-top" alt="Logo Philiance Formation" title="Logo Philiance"></a>

<nav class="navbar">
  <ul>
    <li><a href="<?=BASEURL?>home">Accueil</a></li>
      <li><a href="#">Notre catalogue</a>
      <ul>
        <li><a href="#">Informatique</a></li>
        <li><a href="#">Langues</a></li>
        <li><a href="#">Métiers</a></li>
      </ul>
    </li>

    <li><a href="#">Mode de formation</a></li>
      <li><a href= "<?=BASEURL?>home/newsletter">Newsletter</a></li>
      <li><a href="<?=BASEURL?>home/contact">contact</a></li>
  </ul>
 
  
  <div class="social-icons">
          <a href="#" onclick="openForm()"><i class="far fa-user-circle"></i></a>
      </div>
      <?php
         if (isset($_SESSION["newsession"])){ 
      ?>
          <div class="navbar">
            &nbsp; <?=$_SESSION["name"] ?>
            <br>            
            &nbsp; <?=$_SESSION["user"] ?>
          </div>
          <div class="navbar">
            
          </div>
      <?php
        }
      ?>    
  </nav>        
</header>

