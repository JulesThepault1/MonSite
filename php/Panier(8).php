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


    <div id="content6">
     <div class="hautbox">
     	<ul>
      <div id="Menu" >
      <ul>
     <div class="gauchebox">
      <ul>
     <p>
       
          <h3> Information Client (Gérer mes informations)</h3>

          <table>
               <?php
               $q = $db->query("SELECT * FROM utilisateurs WHERE identifiant = '".$_SESSION['identifiant']."'"); 
                while ($utilisateurs = $q->fetch()) {
                ?>
               <table class="tableau1-style">
                <tbody>
               <tr><td><label> Id : </label></label><?php echo $utilisateurs['ID'];?></td></tr>
               <tr><td><label> Nom : </label></label><?php echo $utilisateurs['nom'];?></td></tr>
               <tr><td><label> Prénom : </label></label><?php echo $utilisateurs['prenom'];?></td></tr>
               <tr><td><label> Identifiant : </label></label><?php echo $utilisateurs['identifiant'];?></td></tr>
               <tr><td><label> Email : </label></label><?php echo $utilisateurs['email'];?></td></tr>
               <tr><td><label> Mot de passe : </label></label><?php echo $utilisateurs['mdp'];?></td></tr>
              </table>
              </tbody>
              <?php
               }
               ?>
          </table>
     </p>
    </ul>

     </div>
     <div class="hautdroitebox">
      <ul>
     
        <h3>Mes réservations de forfaits </h3>

                 <table>
           <?php
        $q = $db->query("SELECT * FROM panierforfaitusers WHERE client = '".$_SESSION['identifiant']."' ");
        while ($panierforfaitusers = $q->fetch()) 
         {
           ?>
            <table class="tab-style">
             <thead>
                <th> TypeForfait  </th>
                <th> Jour</th>
                <th> Temps </th>
             </thead>
             <tbody>

              <td><?php echo  $panierforfaitusers['TypeForfait'] ?></td>

              <td><?php echo  $panierforfaitusers['Jour'] ?></td>

              <td><?php echo  $panierforfaitusers['Temps'] ?></td>

            </tr>
            </tbody>
            </table>
          <?php
          }
          ?>

        </table>
         <li class="btn">
        <a href="reservationforfait(7).php">
      Ajouter une réservation forfaits
        </a>
      </li> 
      
    </ul>

     </div>
     <div class="basdroitebox">
      <ul>
     
        <h3>Mes réservations de matériels</h3>

         <table>
           <?php
        $q = $db->query("SELECT * FROM paniermatusers WHERE client = '".$_SESSION['identifiant']."' ");
        while ($paniermatusers = $q->fetch()) 
         {
           ?>
            <table class="tab-style">
             <thead>
                <th> Type  </th>
                <th> Formule</th>
                <th> Duree </th>
                <th> Nombre</th>
             </thead>
             <tbody>

              <td><?php echo  $paniermatusers['Type'] ?></td>

              <td><?php echo  $paniermatusers['Formule'] ?></td>

              <td><?php echo  $paniermatusers['Duree'] ?></td>

              <td><?php echo  $paniermatusers['Nb'] ?></td>
            </tr>
            </tbody>
            </table>
          <?php
          }
          ?>

        </table>





        </p>
         <li class="btn">
        <a href="Reservationmat(6).php">
      Ajouter une réservation matériels
        </a>
      </li> 
     
    </ul>

     </div>

    	
    
           <!--pied de page-->
    <footer>


       <nav class="reserv-nav">
      <ul>
      <li class="btn">
        <a href="paiement(10).php">
      Terminer ma réservation
        </a>




      </li> 
      </ul>
    </nav>

        	<p>
        		copyright &copy; jules Thepault - 2021 - All right reserved
            page 8 Panier
        	</p>
    </footer>



	</body>
	</html>