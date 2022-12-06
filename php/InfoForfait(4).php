<?php session_start(); 

if(isset($_POST['identifiant']))
{
setcookie('identifiant', $_SESSION['identifiant'], time() + 365*24*3600, null ,null, false, true);
}

?>
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
    <?php include 'header.php' ?>
    	
    <!--Menu navigation-->
    <?php include 'menunavigation2.php' ?>
    
  </header>


    <!-- contenue -->
    <div>
     <div>
     	<ul>
    	   <p>
         <h1> Informations Forfait :</h1>
         <h3>------------Enfant---------------------</h3>
         <?php
          include 'data.php';
          global $db;

          $q = $db->query("SELECT * FROM forfaitenfant");
          while($forfaitenfant = $q->fetch()) 
          {
           ?>
            <table class="tab-style">
             <thead>
               <th>  </th>
               <th> FORFAIT ENFANT </th>
             </thead>
             <tbody>
             <tr>
              <td><?php echo " 1/2 journée " ?></td>
              <td><?php echo  $forfaitenfant['demijour'] . " euro " ?></td>
            </tr>
            <tr>
              <td><?php echo " 1 journée" ?></td>
              <td><?php echo  $forfaitenfant['1jour'] . " euro " ?></td>
            </tr>
             <tr>
              <td><?php echo " 1 semaine" ?></td>
              <td><?php echo  $forfaitenfant['1sem'] . " euro " ?></td>
            </tr>
            </tbody>
            </table>
          <?php
          }
          ?>
         

         </p>
         <p>
         <h3> ----------------Adulte---------------</h3>
         <?php

          global $db;

          $q = $db->query("SELECT * FROM forfaitadulte");
          while($forfaitadulte = $q->fetch()) 
          {
           ?>
             <table class="tab-style">
             <thead>
               <th>  </th>
               <th> FORFAIT ADULTE </th>
             </thead>
             <tbody>
             <tr>
              <td><?php echo " 1/2 journée " ?></td>
              <td><?php echo  $forfaitadulte['demijour'] . " euro " ?></td>
            </tr>
            <tr>
              <td><?php echo " 1 journée" ?></td>
              <td><?php echo  $forfaitadulte['1jour'] . " euro " ?></td>
            </tr>
             <tr>
              <td><?php echo " 1 semaine" ?></td>
              <td><?php echo  $forfaitadulte['1sem'] . " euro " ?></td>
            </tr>
            </tbody>
            </table>
          <?php
          }
          ?>
         

         </p>
    			
    	
    </ul>


     </div>
    
            <!--pied de page-->
    <footer>
     <nav class="reserv-nav">
       <ul>

        <li class="btn" ><a href= 
          <?php 
          if(!isset($_SESSION['identifiant']))
            { ?> "Connection(5).php" <?php 
            } else 
            { ?>  "reservationforfait(7).php"  <?php
            }
            ?>
            > RESERVER

      </ul>
    </nav>



          <p>
            copyright &copy; jules Thepault - 2021 - All right reserved  page 4 Info forfait
          </p>

    </footer>



  </body>
  </html>