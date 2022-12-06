<!-- Groupe n°111 THEPAULT Jules ROCHES Clement -->
<nav class="menu-nav">
  <ul>
    <li class="btn">
     <a href="Client(2).php"> Accueil </a>
    </li> 
   
   <li class="btn"><a href="Connection(5).php">  Se connecter   </a></li>     
      </a>

    <li class="btn"><a href="Panier(8).php">  voir mon panier   </a></li>
   
      <li class="btn"><a href="">
        <a><p> Bonjour :
          <?php 
          if(isset($_SESSION['identifiant'])) {
          echo $_SESSION['identifiant']; } ?>
          </p>
        </li>

       <li class="btn"><a href="deconnexion.php">  déconnexion 
     
        </a>
        </a>
    </li> 
  </ul>
</nav>