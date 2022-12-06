 <?php session_start(); ?>
 <!-- Groupe n°111 THEPAULT Jules ROCHES Clement -->
 <!DOCTYPE html>
	<html>
	<head>
		<title> Site Ski </title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="../css/style.css">
	</head>
	<body>

    <!--haut de page-->
  <header>
    <img src="../img/ban.JPG">

   </header>

    	<h3> Bouton de deconnexion redirige vers l'accueil </h3>

       	  <li class="btn"><a href="Visiteur(1).php">  déconnexion </a>
        <?php
        session_unset();
        session_destroy(); 
        setcookie('identifiant','',time());
        ?>
        </li>
       
</body>
  
           <!--pied de page-->
    <footer>
        	<p>
        		copyright &copy; jules Thepault - 2021 - All right reserved  page de deconnection
        	</p>
    </footer>
	

</html>


