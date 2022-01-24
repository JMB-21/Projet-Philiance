<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
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
</head>
<body>

<?php
 if (!isset($_SESSION["user"])){ 
  
?>
  <button class="open-button" onclick="openForm()"><img src="Picto_Connexion.svg">connexion</button>

  <div class="form-popup" id="myForm" >
    <form class="form-container" action="home" method="POST">
      <h1>Connexion</h1>
  
      <label for="pseudo"><b>E-mail</b></label>
      <input type="text" placeholder="pseudo" name="pseudo" required>
  
      <label for="mdp"><b>Mot de passe</b></label>
      <input type="text" placeholder="mdp" name="mdp" required>
      <br /><br />
	            <input type="checkbox" name="rememberme" id="remembercheckbox" /><label for="remembercheckbox">Se souvenir de moi</label>
	            <br /><br />
  
      <button type="submit" class="btn">Connexion</button>
  <!-- <p class="paragraphe">Ou </p>
      <button onclick="window.location.href = 'new-inscript2.php';" type="submit" class="btn2">S'inscrire</button> -->
  
      <button type="button" class="btn cancel" onclick="closeForm()">Fermer</button>
    </form>
  </div>
<?php  
}else{
?>  
 <button class="open-button" onclick="openForm()"><img src="Picto_Connexion.svg">Deconnexion</button>
 <div class="form-popup" id="myForm" >
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

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>

</body>
</html>