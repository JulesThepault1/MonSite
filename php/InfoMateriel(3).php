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
    	<img src="../img/ban.jpg">
      <?php include 'header.php' ?>
    	
    <!--Menu navigation-->
    <?php include 'menunavigation2.php' ?>
    
  </header>


    <!-- contenue -->
    <div>
     <div>
     	<ul>
         <h1> Matériels sport d'hiver :</h1>
         <h1> Ski </h1>
         <h3> Pack Skieur : ( ski + chaussures + bâton ) </h3>
         <?php
          include 'data.php';
          global $db;?>
          <?php
          $q = $db->query("SELECT * FROM packskieur");
          while($packskieur = $q->fetch()) 
          {
           ?>
            <table class="tab-style">
             <thead>
               <th>  </th>
               <th> 1 jour </th>
               <th> 2 jours </th>
               <th> 1 semaine </th>
             </thead>
             <tbody>
             <tr>
              <td><?php echo " Enfant : " ?></td>
              <td><?php echo  $packskieur['Enfant1jour'] . " euro " ?></td>
              <td><?php echo  $packskieur['Enfant2jour'] . " euro " ?></td>
              <td><?php echo  $packskieur['Enfant1sem'] . " euro " ?></td>
            </tr>
            <tr>
              <td><?php echo " Adulte débutant : " ?></td>
              <td><?php echo  $packskieur['AdltDeb1jour'] . " euro " ?></td>
              <td><?php echo  $packskieur['AdltDeb2jour'] . " euro " ?></td>
              <td><?php echo  $packskieur['AdltDeb1sem'] . " euro " ?></td>
             </tr>
             <tr>
              <td><?php echo " Moyen : " ?></td>
              <td><?php echo  $packskieur['Moyen1jour'] . " euro " ?></td>
              <td><?php echo  $packskieur['Moyen2jour'] . " euro " ?></td>
              <td><?php echo  $packskieur['Moyen1sem'] . " euro " ?></td>
             </tr>
             <tr>
              <td><?php echo " Pro : " ?></td>
              <td><?php echo  $packskieur['Pro1jour'] . " euro " ?></td>
              <td><?php echo  $packskieur['Pro2jour'] . " euro " ?></td>
              <td><?php echo  $packskieur['Pro1sem'] . " euro " ?></td>
             </tr>
             <tr>
              <td><?php echo " Miniski : " ?></td>
              <td><?php echo  $packskieur['MiniSki1jour'] . " euro " ?></td>
              <td><?php echo  $packskieur['MiniSki2jour'] . " euro " ?></td>
              <td><?php echo  $packskieur['MiniSki1sem'] . " euro " ?></td>
             </tr>
            </tbody>
            </table>
          <?php
          }
          ?>

          <h3> Ski seul </h3>

          <?php
          $q = $db->query("SELECT * FROM skiseul");
          while($skiseul = $q->fetch()) 
          {
           ?>
            <table class="tab-style">
             <thead>
               <th>  </th>
               <th> 1 jour </th>
               <th> 2 jours </th>
               <th> 1 semaine </th>
             </thead>
             <tbody>
             <tr>
              <td><?php echo " Enfant : " ?></td>
              <td><?php echo  $skiseul['Enfant1jour'] . " euro " ?></td>
              <td><?php echo  $skiseul['Enfant2jour'] . " euro " ?></td>
              <td><?php echo  $skiseul['Enfant1sem'] . " euro " ?></td>
            </tr>
            <tr>
              <td><?php echo " Adulte débutant : " ?></td>
              <td><?php echo  $skiseul['AdltDeb1jour'] . " euro " ?></td>
              <td><?php echo  $skiseul['AdltDeb2jour'] . " euro " ?></td>
              <td><?php echo  $skiseul['AdltDeb1sem'] . " euro " ?></td>
             </tr>
             <tr>
              <td><?php echo " Moyen : " ?></td>
              <td><?php echo  $skiseul['Moyen1jour'] . " euro " ?></td>
              <td><?php echo  $skiseul['Moyen2jour'] . " euro " ?></td>
              <td><?php echo  $skiseul['Moyen1sem'] . " euro " ?></td>
             </tr>
             <tr>
              <td><?php echo " Pro : " ?></td>
              <td><?php echo  $skiseul['Pro1jour'] . " euro " ?></td>
              <td><?php echo  $skiseul['Pro2jour'] . " euro " ?></td>
              <td><?php echo  $skiseul['Pro1sem'] . " euro " ?></td>
             </tr>
             <tr>
              <td><?php echo " Miniski : " ?></td>
              <td><?php echo  $skiseul['Miniski1jour'] . " euro " ?></td>
              <td><?php echo  $skiseul['Miniski2jour'] . " euro " ?></td>
              <td><?php echo  $skiseul['Miniski1sem'] . " euro " ?></td>
             </tr>
            </tbody>
            </table>
          <?php
          }
          ?>
            <h3> chaussure ski uniquement </h3>

          <?php
          $q = $db->query("SELECT * FROM chaussureskiuniquement");
          while($chaussureskiuniquement = $q->fetch()) 
          {
           ?>
            <table class="tab-style">
             <thead>
               <th>  </th>
               <th> 1 jour </th>
               <th> 2 jours </th>
               <th> 1 semaine </th>
             </thead>
             <tbody>
             <tr>
              <td><?php echo " Enfant : " ?></td>
              <td><?php echo  $chaussureskiuniquement['Enfant1jour'] . " euro " ?></td>
              <td><?php echo  $chaussureskiuniquement['Enfant2jour'] . " euro " ?></td>
              <td><?php echo  $chaussureskiuniquement['Enfant1sem'] . " euro " ?></td>
            </tr>
            <tr>
              <td><?php echo " Adulte débutant : " ?></td>
              <td><?php echo  $chaussureskiuniquement['Adulte1jour'] . " euro " ?></td>
              <td><?php echo  $chaussureskiuniquement['Adulte2jour'] . " euro " ?></td>
              <td><?php echo  $chaussureskiuniquement['Adulte1sem'] . " euro " ?></td>
            </tr>
            </tbody>
            </table>
          <?php
          }
          ?>
           <h1> Snowboard </h1>
           <h3> Pack Snowboard  (Snowboard + chaussures) </h3>

           <?php
          $q = $db->query("SELECT * FROM packsnowboard");
          while($packsnowboard = $q->fetch()) 
          {
           ?>
            <table class="tab-style">
             <thead>
               <th>  </th>
               <th> 1 jour </th>
               <th> 2 jours </th>
               <th> 1 semaine </th>
             </thead>
             <tbody>
             <tr>
              <td><?php echo " Snow junior : " ?></td>
              <td><?php echo  $packsnowboard['Snowjunior1jour'] . " euro " ?></td>
              <td><?php echo  $packsnowboard['Snowjunior2jour'] . " euro " ?></td>
              <td><?php echo  $packsnowboard['Snowjunior1sem'] . " euro " ?></td>
            </tr>
            <tr>
              <td><?php echo " Snow Adulte : " ?></td>
              <td><?php echo  $packsnowboard['Snowadulte1jour'] . " euro " ?></td>
              <td><?php echo  $packsnowboard['Snowadulte2jour'] . " euro " ?></td>
              <td><?php echo  $packsnowboard['Snowjunior1sem'] . " euro " ?></td>
            </tr>
            </tbody>
            </table>
          <?php
          }
          ?>

          <h3> Snowboard seul </h3>

           <?php
          $q = $db->query("SELECT * FROM snowboardseul");
          while($snowboardseul = $q->fetch()) 
          {
           ?>
            <table class="tab-style">
             <thead>
               <th>  </th>
               <th> 1 jour </th>
               <th> 2 jours </th>
               <th> 1 semaine </th>
             </thead>
             <tbody>
             <tr>
              <td><?php echo " Snow junior : " ?></td>
              <td><?php echo  $snowboardseul['Snowjunior1jour'] . " euro " ?></td>
              <td><?php echo  $snowboardseul['Snowjunior2jour'] . " euro " ?></td>
              <td><?php echo  $snowboardseul['Snowjunior1sem'] . " euro " ?></td>
            </tr>
            <tr>
              <td><?php echo " Snow Adulte : " ?></td>
              <td><?php echo  $snowboardseul['Snowadulte1jour'] . " euro " ?></td>
              <td><?php echo  $snowboardseul['Snowadulte2jour'] . " euro " ?></td>
              <td><?php echo  $snowboardseul['Snowadulte1sem'] . " euro " ?></td>
            </tr>
            </tbody>
            </table>
          <?php
          }
          ?>

            <h3> Chaussures SnowboardSeul </h3>


           <?php
          $q = $db->query("SELECT * FROM chaussuressnowboardseul");
          while($chaussuressnowboardseul = $q->fetch()) 
          {
           ?>
            <table class="tab-style">
             <thead>
               <th>  </th>
               <th> 1 jour </th>
               <th> 2 jours </th>
               <th> 1 semaine </th>
             </thead>
             <tbody>
             <tr>
              <td><?php echo " Snow junior : " ?></td>
              <td><?php echo  $chaussuressnowboardseul['Snowjunior1jour'] . " euro " ?></td>
              <td><?php echo  $chaussuressnowboardseul['Snowjunior2jour'] . " euro " ?></td>
              <td><?php echo  $chaussuressnowboardseul['Snowjunior1sem'] . " euro " ?></td>
            </tr>
            <tr>
              <td><?php echo " Snow Adulte : " ?></td>
              <td><?php echo  $chaussuressnowboardseul['Snowadulte1jour'] . " euro " ?></td>
              <td><?php echo  $chaussuressnowboardseul['Snowadulte2jour'] . " euro " ?></td>
              <td><?php echo  $chaussuressnowboardseul['Snowadulte1sem'] . " euro " ?></td>
            </tr>
            </tbody>
            </table>
          <?php
          }
          ?>
          
          
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
            { ?>  "reservationmat(6).php"  <?php
            }
            ?>
            > RESERVER

      </ul>
    </nav>



          <p>
            copyright &copy; jules Thepault - 2021 - All right reserved  page 3 Info materiel
          </p>

    </footer>

    </nav>