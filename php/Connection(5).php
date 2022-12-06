<?php session_start(); 
if(isset($_POST['identifiant']) && isset($_POST['mdp']))
{
$_SESSION['identifiant'] = $_POST['identifiant'];
}
?>
<!-- Groupe n°111 THEPAULT Jules ROCHES Clement -->
<!DOCTYPE html>
  <?php include 'data.php'; ?>
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
  <?php include 'header.php'?>
  <!--Menu navigation-->
  <?php include 'menunavigation2.php' ?>
    
  </header>

  <!-- contenue -->
  <div id="content5">
    <div class="hautbox">
     	<ul>
    	   <h3> ------------------ Se connecter ---------------------</h3>
         <form method="post" action="">
          <table>
            <!--interface de connection-->

            <tr><td><label>Identifiant</label></td><td><input type="text" name="identifiant" id="identifiant" placeholder="Votre Identifiant" required><br/></td></tr>
            <tr><td><label>Mot de passe</label></td><td><input type="password" name="mdp" id="mdp"placeholder="Mot de passe" required><br/></td></tr>
            <tr><td></td><td><input type="submit" name="formconnect" id="formconnect" value="connection"><br/></td></tr>
          </table>
          </form>

          <?php
          global $db;

if(isset($_POST['formconnect'])) { // si le bouton "Connexion" est appuyé
    // on vérifie que le champ "Identifiant" n'est pas vide
    // empty vérifie à la fois si le champ est vide et si le champ existe belle et bien (is set)
    if(empty($_POST['identifiant'])) {
        echo "Le champ Identifiant est vide.";
    } else {
        // on vérifie maintenant si le champ "Mot de passe" n'est pas vide"
        if(empty($_POST['mdp'])) {
            echo "Le champ Mot de passe est vide.";
        } else {
            // les champs sont bien posté et pas vide, on sécurise les données entrées par le membre:
            $identifiant = htmlentities($_POST['identifiant'], ENT_QUOTES, "ISO-8859-1"); // le htmlentities() passera les guillemets en entités HTML, ce qui empêchera les injections SQL
            $mdp = htmlentities($_POST['mdp'], ENT_QUOTES, "ISO-8859-1");
            //on se connecte à la base de données:
            $mysqli = mysqli_connect("localhost","root", "", "site ski");
            //on vérifie que la connexion s'effectue correctement:
            if(!$mysqli){
                echo "Erreur de connexion à la base de données.";
            } else {
                // on fait maintenant la requête dans la base de données pour rechercher si ces données existe et correspondent:
                $Requete = mysqli_query($mysqli,"SELECT * FROM utilisateurs WHERE identifiant = '".$identifiant."' AND mdp = '".$mdp."'");//si vous avez enregistré le mot de passe en md5() il vous suffira de faire la vérification en mettant mdp = '".md5($MotDePasse)."' au lieu de mdp = '".$MotDePasse."'
                // si il y a un résultat, mysqli_num_rows() nous donnera alors 1
                // si mysqli_num_rows() retourne 0 c'est qu'il a trouvé aucun résultat
                if(mysqli_num_rows($Requete) == 0) {
                    echo "Le pseudo ou le mot de passe est incorrect, le compte n'a pas été trouvé.";
                } else {
                    // on ouvre la session avec $_SESSION:
                    $_SESSION['identifiant'] = $identifiant; // la session peut être appelée différemment et son contenu aussi peut être autre chose que le pseudo
                    echo "Vous êtes à présent connecté !";
                }
            }
        }
    }
}

          ?>


  <div class="basbox">
  <ul>
    <h3> ---------------- Créer un compte --------------- <h3><br/>
  <form method="post">
    <table>
      <tr><td><label>Nom</label></td><td><input type="text" name="nom" id="nom" placeholder="Votre nom" required></td></tr>
      <tr><td><label>Prenom</label></td><td><input type="text" name="prenom" id="prenom" placeholder="Votre prenom" required></td></tr>
      <tr><td><label>Adresse</label></td><td><input type="text" name="adresse" id="adresse"placeholder="Votre adresse" required></td></tr>
      <tr><td><label>email</label></td><td><input type="email" name="email" id="email" placeholder="Votre email" required></td></tr>
      <tr><td><label>Identifiant</label></td><td><input type="text" name="identifiant" id="identifiant" placeholder="Votre identifiant" required></td></tr>
      <tr><td><label>mot de passe</label></td><td><input type="password" name="mdp" id="mdp" placeholder="Votre mot de passe" required></td></tr>
      <tr><td><label>confirmer</label></td><td><input type="password" name="cmdp" id="cmdp" placeholder="Confirmer mot de passe" required></td></tr>
       <tr><td></td><td><input type="submit" name="formsend" id="formsend" value="Je m'inscrit !"></td></tr>
      </table>
    </form>

    <?php
    global $db;
    if(isset($_POST['formsend'])) {
        $nom = htmlspecialchars($_POST['nom']);
        $prenom = htmlspecialchars($_POST['prenom']);
        $adresse = htmlspecialchars($_POST['adresse']);
        $email = htmlspecialchars($_POST['email']);
        $identifiant = htmlspecialchars($_POST['identifiant']);
        $mdp = htmlspecialchars($_POST['mdp']);
       extract($_POST);


      $q = $db->prepare("INSERT INTO utilisateurs(nom,prenom,adresse,email,identifiant,mdp) VALUES(:nom,:prenom,:adresse,:email,:identifiant,:mdp)");
      $q->execute([
            'nom'=> $nom,
            'prenom'=> $prenom,
            'adresse'=> $adresse,
            'email'=> $email,
            'identifiant'=> $identifiant,
            'mdp'=> $mdp,
          ]); echo "le compte a été crée ";}
     ?>

          
      </ul>
     </div>
     
                    <!--pied de page-->
    <footer>
      <p> copyright &copy; jules Thepault - 2021 - All right reserved  page 5 Connection </p>
    </footer>
  </body>
	</html>