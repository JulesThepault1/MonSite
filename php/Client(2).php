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
		<link rel="stylesheet" type="text/css" href="../css/Style.css">
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
    <div id="content">
     <div class="hautbox">
     	<ul>
    	<li class="btn">
    		<a href="InfoMateriel(3).php">
    			Information Matériels
    		</a>
    	</li>
    </ul>

    </div>
     <div class="milieubox">
     	<ul>
    	<li class="btn">
    		<a href="InfoForfait(4).php">
    			Information Forfaits
    		</a>
    	</li>
    </ul>

     </div>
     <div class="basbox">
     	<ul>
    	   <li class="btn">
    		  <a href="InfoStation(9).php">
    			Information Station
    		  </a>
    	   </li>
        </ul>

     </div>
    
           <!--pied de page-->
    <footer>
        	<p>
        		copyright &copy; jules Thepault - 2021 - All right reserved
            page 2 Client
        	</p>
    </footer>



	</body>
	</html>