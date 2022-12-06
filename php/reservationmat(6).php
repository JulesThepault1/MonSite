<?php session_start(); 

if(isset($_POST['identifiant']))
{
setcookie('identifiant', $_SESSION['identifiant'], time() + 365*24*3600, null ,null, false, true);
}

?>
<!DOCTYPE html>
<!-- Groupe n°111 THEPAULT Jules ROCHES Clement -->
  <?php include 'data.php' ?>
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
    	
    <!--Menu navigation-->
   <?php include 'menunavigation2.php' ?>
   <?php include 'header.php' ?>
 

  </header>


    <!-- contenue -->
    <p>Réservation Matériels</p>

    <div id="content6">
     <div class="hautbox">
     	<ul>
      <div id="Menu" >
      <ul>
        <form method="POST" action="">
          <select name="Type">
              <option> Pack skieur </option>
              <option> Ski seul </option>
          </select>
         <select name="Formule">
            <option> Enfant </option>
            <option> Adulte debutant </option>
            <option> Moyen </option>
            <option> Pro </option>
            <option> Miniski </option>
          </select>
          <select name="Duree">
            <option> 1 jours </option>
            <option> 2 jours </option>
            <option> 1semaine </option>
          </select>
          <input type="number" name="Nb" id="Nb" placeholder="Nombre">
    	    <input type="submit" name="formsend" id="formsend" value="Ajouter">
         </form>
         <?php
          global $db;

          if(isset($_POST['formsend'])) {
              $Type = htmlspecialchars($_POST['Type']);
              $Formule = htmlspecialchars($_POST['Formule']);
              $Duree = htmlspecialchars($_POST['Duree']);
              $Nb = htmlspecialchars($_POST['Nb']);
             extract($_POST);


            $requete = $db->prepare("INSERT INTO paniermatusers(Duree,Formule,Nb,Type,client) VALUES(?, ?, ?, ?, ? )");
            $requete->execute(array($_POST['Duree'], $_POST['Formule'], $_POST['Nb'], $_POST['Type'], $_SESSION['identifiant']));
            echo "Ajouter au Panier !";
          }
          ?>

      </ul>
    </div>


    	</li>
   



     </div>
    
           <!--pied de page-->
    <footer>


       <nav class="reserv-nav">
      <ul>
      <li class="btn">
        <a href="Panier(8).php">
      Terminer ma réservation
        </a>
      </li> 
      </ul>
    </nav>

        	<p>
        		copyright &copy; jules Thepault - 2021 - All right reserved
            page 6 ReservForfait
        	</p>
    </footer>



	</body>
	</html>