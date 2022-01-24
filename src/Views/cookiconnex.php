<?php
echo "<br>cook";
	if(!isset($_SESSION['id']) AND isset($_COOKIE['password']) AND !empty($_COOKIE['password'])) {

		echo "<br>CookInit";	

		$requser = $bdd->prepare("SELECT * FROM names WHERE pseudo = ? AND mdp = ?");
		$requser->execute(array($_COOKIE['pseudo'], $_COOKIE['password']));
		$userexist = $requser->rowCount();

		if($userexist == 1)
		{
			echo "<br>UserExist";
			$userinfo = $requser->fetch();
			$_SESSION['id'] = $userinfo['id'];
			$_SESSION['pseudo'] = $userinfo['pseudo'];	      
		}
	}
?>