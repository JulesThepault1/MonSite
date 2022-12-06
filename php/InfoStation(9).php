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
    	<img src="../img/ban.jpg">
    	
    <!--Menu navigation-->
  <?php include 'menunavigation2.php' ?>
  <?php include 'header.php' ?>

  </header>

    <!-- contenue -->
  
      <div id="content9">
     <div class="hautbox">
      <h3>Informations station</h3>
      <p> La station est ouverte du 

        <?php 

        $requete = ("SELECT * FROM infostation"); 
          $q = $db->query($requete);
           while($infostation = $q->fetch()) 
           echo $infostation['dateouv'];

        ?> 
        au <?php 

        $requete = ("SELECT * FROM infostation"); 
        $q = $db->query($requete);
        while($infostation = $q->fetch()) 
        echo $infostation['dateferm'];
        ?>

        entre

        <?php 
        $requete = ("SELECT * FROM infostation"); 
        $q = $db->query($requete);
        while($infostation = $q->fetch()) 
        echo $infostation['Houv'];
        ?> heure

        et

        <?php
        $requete = ("SELECT * FROM infostation"); 
        $q = $db->query($requete);
        while($infostation = $q->fetch()) 
        echo $infostation['Hferm'];
        ?> heure

          
        </p>

        <p>
          
          <?php 
          $requete = ("SELECT * FROM remontees"); 
          $q = $db->query  ($requete);
          while($remontees = $q->fetch()) 
          echo $remontees['Nbouv'];
          ?> remontées ouvertes sur 13

        </p>
    </ul>


     </div>
     <div class="basbox">
     <h3>
       Informations pistes: ouvertes 26 sur 28
     </h3>
     <p>
       <?php
        $q = $db->query("SELECT * FROM infopistes");
        while ($infopistes = $q->fetch()) 
         {
           ?>
             <table class="tab-style">
             <thead>
               <th>  </th>
               <th>  </th>
               <th>  </th>
             </thead>
             <tbody>
             <tr>
              
              <td><?php echo  $infopistes['nompiste'] ?></td>
        
              <td><?php echo  $infopistes['diff'] ?></td>
         
              <td><?php echo  $infopistes['ouvferm'] ?></td>
          
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

      



        	<p>
            copyright &copy; jules Thepault - 2021 - All right reserved  page 9 Info Station
          </p>

    </footer>



	</body>
	</html>