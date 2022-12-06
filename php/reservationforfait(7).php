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
    <p>Réservation Forfaits</p>

    <div id="content6">
     <div class="hautbox">
     	<ul>
      <div id="Menu" >
      <ul>
        <form method="POST" action="">

         <select name="Temps">
            <option> 1/2 journee </option>
            <option> 1 journee </option>
            <option> 1semaine </option>
          </select>
          <select name="EnfAdlt">
            <option> Enfant </option>
            <option> Adulte </option>
          </select>
          <input type="number" name="Nbjour" id="Nbjour" placeholder="Nombre de jour">
    	    <input type="submit" name="formsend" id="formsend" value="Ajouter">
         </form>
         <?php
          global $db;

          if(isset($_POST['formsend'])) {
              $Jour = htmlspecialchars($_POST['Nbjour']);
              $TypeForfait = htmlspecialchars($_POST['EnfAdlt']);
              $Temps = htmlspecialchars($_POST['Temps']);
             extract($_POST);


            $requete = $db->prepare("INSERT INTO panierforfaitusers(Jour,TypeForfait,Temps,client) VALUES(?, ?, ?, ?)");
            $requete->execute(array($_POST['Nbjour'], $_POST['EnfAdlt'], $_POST['Temps'], $_SESSION['identifiant']));
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
            page 7 ReservForfait
        	</p>
    </footer>



	</body>
	</html>