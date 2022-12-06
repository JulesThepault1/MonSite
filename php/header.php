<!-- Groupe n°111 THEPAULT Jules ROCHES Clement -->

<nav class="header">
   <?php
      if(isset($_SESSION['identifiant'])) {
    ?>
        <p><?php echo "vous êtes connecté";?></p>
      <?php }else{echo "vous êtes non connecté";}
      ?>
  </nav>